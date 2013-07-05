<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_scope')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_scope),array('view','id'=>$data->id_scope)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scope')); ?>:</b>
	<?php echo CHtml::encode($data->scope); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail')); ?>:</b>
	<?php echo CHtml::encode($data->detail); ?>
	<br />


</div>