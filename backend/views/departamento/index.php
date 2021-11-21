<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DepartamentoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Departamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departamento-index">

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
    'attribute' => 'id_departamento', 
    'label' => 'ID',
    'vAlign' => 'middle',
    'hAlign' => 'center'
],

[
    'attribute' => 'departamento', 
    'vAlign' => 'middle',
    'hAlign' => 'center'
],
[
  'attribute' => 'descripcion_departamento', 
  'vAlign' => 'middle',
  'hAlign' => 'center'
],
[
    'attribute' => 'extension', 
    'vAlign' => 'middle',
    'hAlign' => 'center'
  ],
  [
    'attribute' => 'jefe_departamento', 
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
      'heading'=>Yii::t('app', 'Departamentos'),


'type' => 'info', 
 'before'=>Html::a(Yii::t('app', 'Nuevo'), ['create'], ['class' => 'btn btn-danger']),

      'after'=>Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),

      'footer'=>false
  ],

]); ?>
</div>
