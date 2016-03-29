<?php
/* @var $this StudentController */
/* @var $data Student */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_id')); ?>:</b>
	<?php echo CHtml::encode($data->group->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_id')); ?>:</b>
	<?php echo CHtml::encode($data->subject->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_of_control_id')); ?>:</b>
	<?php echo CHtml::encode($data->typeOfControl->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ball')); ?>:</b>
	<?php echo CHtml::encode($data->ball); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_ball')); ?>:</b>
	<?php echo CHtml::encode($data->total_ball); ?>
	<br />


</div>