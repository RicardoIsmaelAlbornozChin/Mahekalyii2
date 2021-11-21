<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ArticuloSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articulo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
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
      'attribute' => 'id_articulo', 
      'label' => 'ID',
      'vAlign' => 'middle',
      'hAlign' => 'center'
  ],

  [
      'attribute' => 'articulo', 
      'vAlign' => 'middle',
      'hAlign' => 'center'
  ],
  [
    'attribute' => 'descripcion', 
    'vAlign' => 'middle',
    'hAlign' => 'center'
],

[
    'attribute' => 'fecha_entrada', 
    'vAlign' => 'middle',
    'hAlign' => 'center'
],

[
    'attribute' => 'cantidad_articulo', 
    'vAlign' => 'middle',
    'hAlign' => 'center'
],

[
    'attribute' => 'id_marca', 
    'label' => 'Marca',
    'value'=>'marca.nombre_marca',                    

    'vAlign' => 'middle',
    'hAlign' => 'center'
],
[
   'attribute' => 'id_modelo', 
    'label' => 'Modelo',
    'value'=>'modelo.nombre_modelo',                    

    'vAlign' => 'middle',
    'hAlign' => 'center'
],
[
    'attribute' => 'id_categoria',
    'label' => 'Categoría',
    'value'=>'categoria.nombre_categoria',                    
    
    'vAlign' => 'middle',
    'hAlign' => 'center'
],
/*
[
    'attribute' => 'id_unidades', 
    'label' => 'Unidades',
    'value'=>'unidades.nombre_unidades',                    

    'vAlign' => 'middle',
    'hAlign' => 'center'
],
*/
[
    'attribute' => 'id_departamento', 
    'label' => 'Departamento',
    'value'=>'departamento.departamento',                    

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
        'heading'=>Yii::t('app', 'Artículos'),


'type' => 'info', 
   'before'=>Html::a(Yii::t('app', 'Nuevo'), ['create'], ['class' => 'btn btn-danger']),

        'after'=>Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),

        'footer'=>false

    ],
 
]); ?>
</div>
