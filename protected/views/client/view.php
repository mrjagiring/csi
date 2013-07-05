<?php
$this->breadcrumbs=array(
	'Clients'=>array('admin'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Create Client','url'=>array('create')),
	array('label'=>'Update Client','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Client','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Client','url'=>array('admin')),
);
?>

<h1>View Client #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'company',
		'address',
		'phone',
		'email',
		'contact',
		'npwp',
		'create_at',
		'update_at',
	),
)); ?>
