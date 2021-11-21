<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DestinoFinalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="destino-final-index">
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
    'attribute' => 'id_destino', 
    'label' => 'ID',
    'vAlign' => 'middle',
    'hAlign' => 'center'
],

[
    'attribute' => 'tipo_destino', 
    'label' => 'Destino final', 
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
      'heading'=>Yii::t('app', 'Destino final'),


'type' => 'info', 
 'before'=>Html::a(Yii::t('app', 'Nuevo'), ['create'], ['class' => 'btn btn-danger']),

      'after'=>Html::a('<i class="fas fa-redo"></i> Reset Grid', ['index'], ['class' => 'btn btn-info']),

      'footer'=>false
  ],

]); ?>
</div>
