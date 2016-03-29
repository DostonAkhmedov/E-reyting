<?php
/* @var $this StudentController */
/* @var $model Student */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Student', 'url'=>array('index')),
	array('label'=>'Create Student', 'url'=>array('create')),
	array('label'=>'Update Student', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Student', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Student', 'url'=>array('admin')),
);
?>

<h1>View Student #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'group_id'=>[
			'name'=>'group_id',
			'value'=>$model->group->name,
		],
		'subject_id'=>[
			'name'=>'subject_id',
			'value'=>$model->subject->name,
		],
		'type_of_control_id'=>[
			'name'=>'type_of_control_id',
			'value'=>$model->typeOfControl->name,
		],
		'ball',
		'total_ball',
	),
)); ?>
