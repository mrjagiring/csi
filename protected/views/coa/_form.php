<div class="form">

<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'coa-form',
    'type'=>'horizontal',
)); ?>
 
<fieldset>
	<?php if ($model->isNewRecord) echo '<legend>Create COA</legend>'; else echo '<legend>Update COA</legend>'; ?>
	<?php echo $form->textFieldRow($model, 'coa_code'); ?>
	<?php echo $form->textFieldRow($model, 'coa_name'); ?>
	<?php echo $form->dropDownListRow($model, 'parent', CHtml::listData(Coa::model()->findAll(array('condition'=>'parent < 1000')), 'coa_code', 'coa_name')); ?>
	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
	</div>
</fieldset>
<?php $this->endWidget(); ?>
</div><!-- form -->

