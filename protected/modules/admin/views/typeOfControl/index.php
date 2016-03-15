<?php
/* @var $this TypeOfControlController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Type Of Controls',
);

$this->menu=array(
	array('label'=>'Create TypeOfControl', 'url'=>array('create')),
	array('label'=>'Manage TypeOfControl', 'url'=>array('admin')),
);
?>

<h1>Type Of Controls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
