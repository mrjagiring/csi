<?php
$this->breadcrumbs=array(
	'Staffs'=>array('admin'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Create Staff','url'=>array('create')),
	array('label'=>'Update Staff','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Staff','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Staff','url'=>array('admin')),
);
?>

<h1>View Staff #<?php echo $model->code; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'code',
		'address',
		'phone',
		'email',
		'department',
		'create_at',
		'update_at',
	),
)); ?>
