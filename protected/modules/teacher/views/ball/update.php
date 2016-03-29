<?php
/* @var $this BallController */
/* @var $model Ball */

$this->breadcrumbs=array(
	'Balls'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ball', 'url'=>array('index')),
	array('label'=>'Create Ball', 'url'=>array('create')),
	array('label'=>'View Ball', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ball', 'url'=>array('admin')),
);
?>

<h1>Update Ball <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>