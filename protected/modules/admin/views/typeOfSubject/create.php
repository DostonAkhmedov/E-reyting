<?php
/* @var $this TypeOfSubjectController */
/* @var $model TypeOfSubject */

$this->breadcrumbs=array(
	'Type Of Subjects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TypeOfSubject', 'url'=>array('index')),
	array('label'=>'Manage TypeOfSubject', 'url'=>array('admin')),
);
?>

<h1>Create TypeOfSubject</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>