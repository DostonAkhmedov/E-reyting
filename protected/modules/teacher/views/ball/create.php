<?php
/* @var $this BallController */
/* @var $model Ball */

$this->breadcrumbs=array(
	'Balls'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ball', 'url'=>array('index')),
	array('label'=>'Manage Ball', 'url'=>array('admin')),
);
?>

<h1>Create Ball</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>