<?php
/* @var $this BallController */
/* @var $data Ball */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_id')); ?>:</b>
	<?php echo CHtml::encode($data->group_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_id')); ?>:</b>
	<?php echo CHtml::encode($data->subject_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ON1')); ?>:</b>
	<?php echo CHtml::encode($data->ON1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JN1')); ?>:</b>
	<?php echo CHtml::encode($data->JN1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ON2')); ?>:</b>
	<?php echo CHtml::encode($data->ON2); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('JN2')); ?>:</b>
	<?php echo CHtml::encode($data->JN2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('YAN')); ?>:</b>
	<?php echo CHtml::encode($data->YAN); ?>
	<br />

	*/ ?>

</div>