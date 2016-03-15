<?php
/* @var $this TypeOfControlController */
/* @var $model TypeOfControl */

$this->breadcrumbs=array(
	'Type Of Controls'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TypeOfControl', 'url'=>array('index')),
	array('label'=>'Create TypeOfControl', 'url'=>array('create')),
	array('label'=>'View TypeOfControl', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TypeOfControl', 'url'=>array('admin')),
);
?>

<h1>Update TypeOfControl <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>