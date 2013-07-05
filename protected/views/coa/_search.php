<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id_coa',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'coa_code',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'coa_name',array('class'=>'span5','maxlength'=>40)); ?>

	<?php echo $form->textFieldRow($model,'parent',array('class'=>'span5','maxlength'=>5)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
