<?php
/* @var $this BallController */
/* @var $model Ball */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'group_id'); ?>
		<?php echo $form->textField($model,'group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subject_id'); ?>
		<?php echo $form->textField($model,'subject_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'student_id'); ?>
		<?php echo $form->textField($model,'student_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ON1'); ?>
		<?php echo $form->textField($model,'ON1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JN1'); ?>
		<?php echo $form->textField($model,'JN1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ON2'); ?>
		<?php echo $form->textField($model,'ON2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JN2'); ?>
		<?php echo $form->textField($model,'JN2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'YAN'); ?>
		<?php echo $form->textField($model,'YAN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->