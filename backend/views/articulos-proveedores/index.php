<?php

use yii\helpers\Html;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\ArticulosProveedoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Articulos Proveedores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articulos-proveedores-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<?php

$gridColumns = [

  [

      'class'=>'kartik\grid\SerialColumn',

      'contentOptions'=>['class'=>'kartik-sheet-style'],

      'width'=>'36px',

      'header'=>'',

      'headerOptions'=>['class'=>'kartik-sheet-style']

  ],

  [

      'attribute' => 'id_articulosproveedores', 

      'vAlign' => 'middle',

      'hAlign' => 'center'

     

  ],

 

  [

      'attribute' => 'id_proveedor', 

      'vAlign' => 'middle',

      'hAlign' => 'center'

     

  ],
  [

    'attribute' => 'id_articulo', 

    'vAlign' => 'middle',

    'hAlign' => 'center'

   

],

  [

      'class' => 'kartik\grid\ActionColumn',

    

  ],

];



?>


<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => $gridColumns,
    'responsive'=>false,
    'hover'=>true,
    'pjax'=> true,
    'toolbar'=>[
        '{export}',
        '{toggleData}'
    ],
    
    'panel'=>[
        'heading'=>Yii::t('app', 'articulos-proveedores'),


'type' => 'info', 
   'before'=>Html::a(Yii::t('app', 'Nuevo'), ['create'], ['class' => 'btn btn-danger']),

        'after'=>Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),

        'footer'=>false

    ],
 
 
 
 
 
 
    /* 'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        'id_articulosproveedores',
        'precio_venta',
        'id_proveedor',
        'id_articulo',

        ['class' => 'yii\grid\ActionColumn'],
    ],*/
]); ?>
</div>
