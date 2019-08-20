<?php

namespace frontend\controllers;

use common\exceptions\FeedbackException;
use frontend\models\Grupo;
use frontend\models\ImportacaoFilial;
use frontend\models\ImportacaoGrupo;
use common\components\AuthController;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Response;
use yii\web\UploadedFile;

/**
 * ColaboradorController implements the CRUD actions for Colaborador model.
 */
class ImportacaoController extends AuthController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Colaborador models.
     * @return mixed
     */
    public function actionImportacaoGrupo()
    {
        $importacao = new ImportacaoGrupo();

        if (\Yii::$app->request->isPost && $importacao->load(\Yii::$app->request->post())) {
            $importacao->arquivo = UploadedFile::getInstance($importacao, 'arquivo');
            if ($importacao->validate()) {
                try {
                    $importacao->run();
                } catch (FeedbackException $e) {
                    \Yii::$app->session->addFlash('error', $e->getMessage());
                }
            } else {
                \Yii::$app->session->addFlash('error', 'Erro ao validar importação, favor corrigir os erros apontados.');
            }
        }

        return $this->render('importacao', ['importacao' => $importacao]);
    }

    public function actionImportacaoFilial()
    {
        $importacao = new ImportacaoFilial();

        if (\Yii::$app->request->isPost && $importacao->load(\Yii::$app->request->post())) {
            $importacao->arquivo = UploadedFile::getInstance($importacao, 'arquivo');
            if ($importacao->validate()) {
                try {
                    $importacao->run();
                } catch (FeedbackException $e) {
                    \Yii::$app->session->addFlash('error', $e->getMessage());
                }
            } else {
                \Yii::$app->session->addFlash('error', 'Erro ao validar importação, favor corrigir os erros apontados.');
            }
        }

        return $this->render('importacao', ['importacao' => $importacao]);
    }

}
