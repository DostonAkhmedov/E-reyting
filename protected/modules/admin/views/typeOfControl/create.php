<?php
/* @var $this TypeOfControlController */
/* @var $model TypeOfControl */

$this->breadcrumbs=array(
	'Type Of Controls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TypeOfControl', 'url'=>array('index')),
	array('label'=>'Manage TypeOfControl', 'url'=>array('admin')),
);
?>

<h1>Create TypeOfControl</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>