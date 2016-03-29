<?php
/* @var $this TypeOfSubjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Type Of Subjects',
);

$this->menu=array(
	array('label'=>'Create TypeOfSubject', 'url'=>array('create')),
	array('label'=>'Manage TypeOfSubject', 'url'=>array('admin')),
);
?>

<h1>Type Of Subjects</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
