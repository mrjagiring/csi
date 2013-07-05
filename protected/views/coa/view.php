<?php
$this->breadcrumbs=array(
	'Coas'=>array('index'),
	$model->id_coa,
);

$this->menu=array(
	array('label'=>'List Coa','url'=>array('index')),
	array('label'=>'Create Coa','url'=>array('create')),
	array('label'=>'Update Coa','url'=>array('update','id'=>$model->id_coa)),
	array('label'=>'Delete Coa','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_coa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Coa','url'=>array('admin')),
);
?>

<h1>View Coa #<?php echo $model->id_coa; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id_coa',
		'coa_code',
		'coa_name',
		'parent',
	),
)); ?>
