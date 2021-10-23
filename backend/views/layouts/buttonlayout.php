<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use backend\controllers;
use  yii\web\Controller;

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

<div class = "row">
<div class = "col-md-4"><img src = "<?= Yii::getAlias('@web')?>/img/turttle.jpg" alt="Logo de Mahekal" class =" img-responsive"></div>
<div class = "col-md-8"><h1>Tiramisú</h1></div>

<?= Html::cssFile('@web/css/menuimages.css') ?>


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
<!--
<div class="flex-container"> Flex container 

<div>1</div>
<div>2</div>
<div>3</div>
<div>4</div>

<div><img src = "<?= Yii::getAlias('@web')?>/img/turttle.jpg" alt="Logo de Mahekal" class =" img-responsive"></div>
<div><img src = "<?= Yii::getAlias('@web')?>/img/rh.png" alt="Recursos humanos" class =" img-responsive"></div>
<div><img src = "<?= Yii::getAlias('@web')?>/img/turttle.jpg" alt="Logo de Mahekal" class =" img-responsive"></div>
<div><img src = "<?= Yii::getAlias('@web')?>/img/sistemas.png" alt="Recursos humanos" class =" img-responsive"></div>

</div>







 <div> 
Photo Grid 
    <div class = "row" >
    
    </div>

<div class = "column">

<div class = "col-md-4"><img src = "<?= Yii::getAlias('@web')?>/img/sistemas.png" alt="Sistemas" class =" img-responsive"></div>

</div>

    The following image works a link <br>
    <a href="http://backend.mahekalyii2.com/index.php?r=sistemas%2Findex"   
    >    <img src="<?= Yii::getAlias('@web')?>/img/pava.png" alt="RRHH" height="150" width="150">
</a>*/

-->

</body>

</div>


</div>
   

    <div class="container">
     
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
