<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ResguardosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resguardos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resguardos-index">

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
    'attribute' => 'id_resguardo', 
    'label' => 'ID',
    'vAlign' => 'middle',
    'hAlign' => 'center'
],

[
    'attribute' => 'fecha_resguardo', 
    'label' => 'Fecha de resguardo', 
    'vAlign' => 'middle',
    'hAlign' => 'center'
],
[
  'attribute' => 'id_departamento', 
  'value'=>'idDepartamento.departamento' ,
  'label' => 'Departamento', 
  'vAlign' => 'middle',
  'hAlign' => 'center'
],
[
    'attribute' => 'id_articulo',
    'value'=>'idArticulo.articulo' ,
   'label' => 'Articulo', 
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
      'heading'=>Yii::t('app', 'Resguardos'),


'type' => 'info', 
 'before'=>Html::a(Yii::t('app', 'Nuevo'), ['create'], ['class' => 'btn btn-danger']),

      'after'=>Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),

      'footer'=>false
  ],

]); ?>
</div>
