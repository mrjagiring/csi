<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'client_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'letter_no',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'vessel',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'object',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'attending',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'loading',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'destination',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'qty',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_at',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
