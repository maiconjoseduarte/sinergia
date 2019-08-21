<?php

namespace frontend\models;

use common\exceptions\FeedbackException;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ImportacaoGrupo extends Importacao
{
    public $nome = 'Grupo';
    /**
     * Processa o arquivo de grupos
     *
     * @param Worksheet $sheet
     * @return mixed|void
     * @throws FeedbackException
     */
    public function process(Worksheet $sheet)
    {
        foreach ($sheet->getRowIterator() as $row) {
            //Ignorar cabeçalho
            if ($row->getRowIndex() === 1) {
                continue;
            }
            $transaction = Grupo::getDb()->beginTransaction();
            try {

                $grupo = new Grupo();

                $grupo->id = $this->getString($sheet, "A{$row->getRowIndex()}");
                $grupo->nome = $this->getString($sheet, "B{$row->getRowIndex()}");
                $grupo->status = $this->getString($sheet, "C{$row->getRowIndex()}");


                if ($grupo->save() === false) {
                    throw new FeedbackException(sprintf('%s<br>%s', 'Erro ao salvar o grupo.', implode('<br>', $grupo->getFirstErrors())));
                }

                $this->processamentosSucesso[] = [
                    'linha' => $row->getRowIndex(),
                    'mensagem' => "Grupo {$grupo->nome} cadastrado com sucesso."
                ];

                $transaction->commit();
            } catch (\Exception $e) {
                $mensagem = "Erro ao importar o grupo.";
                if ($e instanceof FeedbackException) {
                    $mensagem = $e->getMessage();
                }

                $transaction->rollBack();
                if ($this->continuarProcessamento) {
                    $this->processamentosErro[] = [
                        'linha' => $row->getRowIndex(),
                        'mensagem' => $mensagem
                    ];
                    continue;
                } else {
                    throw new FeedbackException($mensagem);
                }
            }
        }
    }
}
