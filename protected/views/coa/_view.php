<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_coa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_coa),array('view','id'=>$data->id_coa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coa_code')); ?>:</b>
	<?php echo CHtml::encode($data->coa_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coa_name')); ?>:</b>
	<?php echo CHtml::encode($data->coa_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent')); ?>:</b>
	<?php echo CHtml::encode($data->parent); ?>
	<br />


</div>