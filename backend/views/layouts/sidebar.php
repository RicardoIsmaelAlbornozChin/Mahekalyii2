<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo 
    <a href="index3.html" class="brand-link">
        <img src="<?= $assetDir ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>-->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= Yii::getAlias('@web') ?>/img/logo.png" alt="logo" class=" img-responsive" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrador</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Artículos',
                        'icon' => 'boxes',
                        'badge' => '<span class="right badge badge-info">4</span>',
                        'items' => [
                            ['label' => 'Artículos', 'url' => ['articulo/index'], 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                            ['label' => 'Marca', 'url' => ['marca/index'], 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                            ['label' => 'Modelo', 'url' => ['modelo/index'], 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                            ['label' => 'Categoría', 'url' => ['categoria/index'], 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                            ['label' => 'Unidades', 'url' => ['unidades/index'], 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],




                        ]
                    ],
                    [
                        'label' => 'Ubicaciones',
                        'icon' => 'map-marker',
                        'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'Departamentos', 'url' => ['departamento/index'], 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                            ['label' => 'Resguardos', 'url' => ['resguardos/index'], 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],



                        ]
                    ],
                    [
                        'label' => 'Bajas',
                        'icon' => 'file',
                        'badge' => '<span class="right badge badge-info">3</span>',
                        'items' => [
                            ['label' => 'Bajas', 'url' => ['bajas/index'], 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                            ['label' => 'Rubros', 'url' => ['rubro/index'], 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                            ['label' => 'Destino final', 'url' => ['destino-final/index'], 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],



                        ]
                    ],

/*
                    
                    [



                        'label' => 'Pruebas',
                        'icon' => 'file',
                        'badge' => '<span class="right badge badge-info">3</span>',
                        'items' => [
                            ['label' => 'Vista con select2', 'url' => 'http://backend.mahekalyii2.com/index.php?r=articulos-proveedores%2Findex', 'icon' => 'th', 'badge' => '<span class="right badge badge-danger">P1</span>'],
                            ['label' => 'Vista sistemas', 'url' => 'http://backend.mahekalyii2.com/index.php?r=sistemas%2Findex', 'icon' => 'th', 'badge' => '<span class="right badge badge-danger">P1</span>'],



                        ]
                    ],

*/




                    ['label' => 'Accesos', 'url' => 'http://backend.mahekalyii2.com/index.php?r=admin', 'icon' => 'th', 'badge' => '<span class="right badge badge-danger">Admin</span>'],
                    ['label' => 'Usuarios', 'url' => 'http://backend.mahekalyii2.com/index.php?r=usuario', 'icon' => 'th', 'badge' => '<span class="right badge badge-danger">Admin</span>'],

           


/*
                    ['label' => 'Yii2 PROVIDED', 'header' => true],
                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    ['label' => 'MULTI LEVEL EXAMPLE', 'header' => true],
                    ['label' => 'Level1'],
                    [
                        'label' => 'Level1',
                        'items' => [
                            ['label' => 'Level2', 'iconStyle' => 'far'],
                            [
                                'label' => 'Level2',
                                'iconStyle' => 'far',
                                'items' => [
                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                                    ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle']
                                ]
                            ],
                            ['label' => 'Level2', 'iconStyle' => 'far']
                        ]
                    ],
                    ['label' => 'Level1'],
                    ['label' => 'LABELS', 'header' => true],
                    ['label' => 'Important', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                    ['label' => 'Warning', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                    ['label' => 'Informational', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
               */
               
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>