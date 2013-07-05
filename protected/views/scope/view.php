<?php
$this->breadcrumbs=array(
	'Scopes'=>array('index'),
	$model->id_scope,
);

$this->menu=array(
	array('label'=>'List Scope','url'=>array('index')),
	array('label'=>'Create Scope','url'=>array('create')),
	array('label'=>'Update Scope','url'=>array('update','id'=>$model->id_scope)),
	array('label'=>'Delete Scope','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_scope),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Scope','url'=>array('admin')),
);
?>

<h1>View Scope #<?php echo $model->id_scope; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_scope',
		'scope',
		'detail',
	),
)); ?>
