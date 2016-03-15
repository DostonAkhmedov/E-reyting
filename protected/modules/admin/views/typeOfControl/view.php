<?php
/* @var $this TypeOfControlController */
/* @var $model TypeOfControl */

$this->breadcrumbs=array(
	'Type Of Controls'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TypeOfControl', 'url'=>array('index')),
	array('label'=>'Create TypeOfControl', 'url'=>array('create')),
	array('label'=>'Update TypeOfControl', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TypeOfControl', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TypeOfControl', 'url'=>array('admin')),
);
?>

<h1>View TypeOfControl #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
