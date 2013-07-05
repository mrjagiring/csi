<?php
$this->breadcrumbs=array(
	'Work Order'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Create WO','url'=>array('create')),
	array('label'=>'Update WO','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete WO','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage WO','url'=>array('admin')),
);
?>

<h1>View Work Order <?php echo $model->letter_no; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'client_id', 'value'=>$this->getClient($model)),
		'letter_no',
		'vessel',
		'object',
		'description',
		'attending',
		'loading',
		'destination',
		'qty',
		'create_at',
	),
)); ?>
