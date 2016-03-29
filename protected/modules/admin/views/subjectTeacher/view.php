<?php
/* @var $this SubjectTeacherController */
/* @var $model SubjectTeacher */

$this->breadcrumbs=array(
	'Subject Teachers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SubjectTeacher', 'url'=>array('index')),
	array('label'=>'Create SubjectTeacher', 'url'=>array('create')),
	array('label'=>'Update SubjectTeacher', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SubjectTeacher', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubjectTeacher', 'url'=>array('admin')),
);
?>

<h1>View SubjectTeacher #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'group_id',
		'subject_id',
		'type_of_subject_id',
		'department_id',
		'teacher_id',
	),
)); ?>
