<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'wo-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
)); ?>
<fieldset>
    <legend>Fields with <span class="required">*</span> are required.</legend>
	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListRow($model, 'client_id', CHtml::listData(Client::model()->findAll(), 'id', 'company'));?>

	<?php echo $form->textFieldRow($model,'letter_no',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'vessel',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'object',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span5')); ?>

	<?php echo $form->datepickerRow($model, 'attending', array('prepend'=>'<i class="icon-calendar"></i>', 'options'=>array( 'format' => 'yyyy-mm-dd', 'showAnim'=>'fold',))); ?>

	<?php echo $form->textFieldRow($model,'loading',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'destination',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'qty',array('append'=>'<i>Ton</i>', 'class'=>'span2')); ?>
<fieldset>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Create' : 'Save',)); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
	</div>

<?php $this->endWidget(); ?>
