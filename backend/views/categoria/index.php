<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategoriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categorias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categoria-index">

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
    'attribute' => 'id_categoria', 
    'label' => 'ID',
    'value' => 'categoriaVariable',
    'vAlign' => 'middle',
    'hAlign' => 'center'
],

[
    'attribute' => 'nombre_categoria',
    'label' =>  'Categoría', 
    //'value' => 'categoriaVariable', 
    'vAlign' => 'middle',
    //'hAlign' => 'center',
    'group' => true,  // enable grouping,
    'groupedRow' => true,                    // move grouped column to a single grouped row
    'groupOddCssClass' => 'kv-grouped-row',  // configure odd group cell css class
    'groupEvenCssClass' => 'kv-grouped-row', // configure even group cell css class
],
[
  'attribute' => 'descripcion_categoria', 
  'label' => 'Descripción',
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
      'heading'=>Yii::t('app', 'Categorías'),


'type' => 'info', 
 'before'=>Html::a(Yii::t('app', 'Nuevo'), ['create'], ['class' => 'btn btn-danger']),

      'after'=>Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),

      'footer'=>false
  ],

]); ?>
</div>
