<?php
/* @var $this BallController */
/* @var $model Ball */

$this->breadcrumbs=array(
	'Balls'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ball', 'url'=>array('index')),
	array('label'=>'Create Ball', 'url'=>array('create')),
	array('label'=>'Update Ball', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ball', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ball', 'url'=>array('admin')),
);
?>

<h1>View Ball #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'group_id',
		'subject_id',
		'student_id',
		'ON1',
		'JN1',
		'ON2',
		'JN2',
		'YAN',
	),
)); ?>
