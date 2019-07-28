<?php

use yii\helpers\Url;

?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="dropdown sidebar-profile-dropdown">
        <a class="dropdown-toggle d-flex align-items-center justify-content-between" href="#" data-toggle="dropdown" id="profileDropdown1">
            <img src="admin/images/face29.png" alt="profile" class="sidebar-profile-icon"/>
            <div>
                <div class="nav-profile-name">Lucille Wilkins</div>
                <div class="nav-profile-designation">Mid term business</div>
            </div>
        </a>
        <div class="dropdown-menu navbar-dropdown dropdown-menu-left" aria-labelledby="profileDropdown1">
            <a class="dropdown-item">
                <i class="mdi mdi-account"></i>
                Profile
            </a>
            <a class="dropdown-item">
                <i class="mdi mdi-logout"></i>
                Logout
            </a>
        </div>
    </div>
    <ul class="nav">
        <li class="nav-item active">
            <div class="sidebar-title">Main</div>
            <a class="nav-link" href="<?= Url::to(['site/index'])?>">
                <i class="mdi mdi-cards-variant menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <div class="sidebar-title">Web application</div>
            <a class="nav-link" href="<?= Url::to(['grupo/index']) ?>">
                <i class="mdi mdi-calendar-blank menu-icon"></i>
                <span class="menu-title">Grupo</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= Url::to(['filial/index']) ?>">
                <i class="mdi mdi-email-open-outline menu-icon"></i>
                <span class="menu-title">Filial</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= Url::to(['contrato/index']) ?>">
                <i class="mdi mdi-cube-outline menu-icon"></i>
                <span class="menu-title">Contrato</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= Url::to(['juridico/index']) ?>">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title">Jurídico</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= Url::to(['colaborador/index']) ?>">
                <i class="mdi mdi-image menu-icon"></i>
                <span class="menu-title">Colaborador</span>
            </a>
        </li>


        <li class="nav-item">
            <div class="sidebar-title">Pages</div>
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <i class="mdi mdi-folder-multiple-outline menu-icon"></i>
                <span class="menu-title">General Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="false" aria-controls="user-pages">
                <i class="mdi mdi-file-outline menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error-pages" aria-expanded="false" aria-controls="error-pages">
                <i class="mdi mdi-vector-arrange-below menu-icon"></i>
                <span class="menu-title">Error Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <div class="sidebar-title">Help</div>
            <a class="nav-link" href="http://www.urbanui.com/wagondash/docs/documentation.html" target="_blank">
                <i class="mdi mdi-file-document menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>
    </ul>
    <div class="designer-info">
        Designed by: <?= Yii::$app->params['autor'] ?> </a>
    </div>
</nav>