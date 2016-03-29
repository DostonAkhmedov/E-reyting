<?php
/* @var $this TypeOfSubjectController */
/* @var $model TypeOfSubject */

$this->breadcrumbs=array(
	'Type Of Subjects'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TypeOfSubject', 'url'=>array('index')),
	array('label'=>'Create TypeOfSubject', 'url'=>array('create')),
	array('label'=>'Update TypeOfSubject', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TypeOfSubject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TypeOfSubject', 'url'=>array('admin')),
);
?>

<h1>View TypeOfSubject #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
