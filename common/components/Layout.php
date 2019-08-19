<?php

namespace common\components;


/**
 * Class Layout
 *
 * @package common\components
 */
class Layout
{
    // SISTEMA
    const GRID_LAYOUT = "\n{items}\n
<div class='row'>
    <div class='col-md-8'>
        {pager}
    </div>
    <div class='col-md-4' style='float: right; margin-top: 25px; text-align: right'>
        {summary}
    </div>
</div>
";


    const BTN_CADASTRAR = 'btn btn-success pull-right btn-estilos';
    const BTN_FILTRAR = 'btn btn-warning btn-estilos';
    const BTN_RESET = 'btn btn-default btn-estilos';
    const BTN_SALVAR = 'btn btn-success btn-estilos';
    const BTN_VOLTAR = 'btn btn-default btn-estilos';

    const BTN_OPCOES_GRUPO = 'btn btn-default btn-opcoes-grupo';

    const GRID_STRIPED = true;
    const GRID_HOVER = true;
    const GRID_BORDERED = false;
    const GRID_CONDENSED = false;
    const GRID_PAJAX = false;
    const GRID_RESPONSIVE = true;
    const GRID_RESPONSIVE_WRAP = false;


}
