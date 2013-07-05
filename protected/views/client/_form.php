<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'client-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>
<fieldset>
    <legend>Fields with <span class="required">*</span> are required.</legend>
	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'company',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textAreaRow($model,'address',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'phone',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'contact',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'npwp',array('class'=>'span5','maxlength'=>20)); ?>
<fieldset>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Create' : 'Save',)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
	</div>

<?php $this->endWidget(); ?>
