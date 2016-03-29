<?php
/* @var $this BallController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Balls',
);

$this->menu=array(
	array('label'=>'Create Ball', 'url'=>array('create')),
	array('label'=>'Manage Ball', 'url'=>array('admin')),
);
?>

<h1>Balls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
