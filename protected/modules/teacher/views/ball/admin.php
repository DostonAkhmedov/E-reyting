<?php
/* @var $this BallController */
/* @var $model Ball */

$this->breadcrumbs=array(
	'Balls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ball', 'url'=>array('index')),
	array('label'=>'Create Ball', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ball-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Balls</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ball-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'group_id',
		'subject_id',
		'student_id',
		'ON1',
		'JN1',
		/*
		'ON2',
		'JN2',
		'YAN',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
