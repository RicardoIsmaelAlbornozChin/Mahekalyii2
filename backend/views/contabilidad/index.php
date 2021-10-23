<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= Html::cssFile('@web/css/estilos.css') ?>

<div class="wrap">
<div class = "row">
<div class = "col-md-4"><img src = "<?= Yii::getAlias('@web')?>/img/turttle.jpg" alt="Logo de Mahekal" class =" img-responsive"></div>
<div class = "col-md-8"><h1>Inventario de Contabilidad</h1></div>


</div>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
 ;


        $menuItems[] = ['label' => 'Compras', 'url' => ['site/index'],
        'options' =>['class' =>'dropdown'],
        'template'=>'<a href="{url}" class="href_class">{label}</a>',
        'items' =>[ ['label' => 'Compras', 'url' => ['compra/index']],
                    ['label' => 'Detalles de compra', 'url' => ['/detalle-compra/index']],
                                                                 
                                           
                ],
        ];

        $menuItems[] = ['label' => 'Bajas', 'url' => ['site/index'],
        'options' =>['class' =>'dropdown'],
        'template'=>'<a href="{url}" class="href_class">{label}</a>',
        'items' =>[ ['label' => 'Bajas', 'url' => ['bajas/index']],
                    ['label' => 'Crear baja', 'url' => ['Site/index']],
                    ['label' => 'Reporte bajas', 'url' => ['Site/index']],
                    ['label' => 'Rubros', 'url' => ['rubro/index']],
                    ['label' => 'Destinos', 'url' => ['destino-final/index']],

    ],
    ];


        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

   
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
