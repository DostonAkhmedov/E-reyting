<?php
/* @var $this BallController */
/* @var $model Ball */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ball-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'group_id'); ?>
		<?php echo $form->textField($model,'group_id'); ?>
		<?php echo $form->error($model,'group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject_id'); ?>
		<?php echo $form->textField($model,'subject_id'); ?>
		<?php echo $form->error($model,'subject_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'student_id'); ?>
		<?php echo $form->textField($model,'student_id'); ?>
		<?php echo $form->error($model,'student_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ON1'); ?>
		<?php echo $form->textField($model,'ON1'); ?>
		<?php echo $form->error($model,'ON1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JN1'); ?>
		<?php echo $form->textField($model,'JN1'); ?>
		<?php echo $form->error($model,'JN1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ON2'); ?>
		<?php echo $form->textField($model,'ON2'); ?>
		<?php echo $form->error($model,'ON2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'JN2'); ?>
		<?php echo $form->textField($model,'JN2'); ?>
		<?php echo $form->error($model,'JN2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'YAN'); ?>
		<?php echo $form->textField($model,'YAN'); ?>
		<?php echo $form->error($model,'YAN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->