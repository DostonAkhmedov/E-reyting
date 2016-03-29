<?php
/* @var $this TypeOfSubjectController */
/* @var $model TypeOfSubject */

$this->breadcrumbs=array(
	'Type Of Subjects'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TypeOfSubject', 'url'=>array('index')),
	array('label'=>'Create TypeOfSubject', 'url'=>array('create')),
	array('label'=>'View TypeOfSubject', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TypeOfSubject', 'url'=>array('admin')),
);
?>

<h1>Update TypeOfSubject <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>