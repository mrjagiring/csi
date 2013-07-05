<?php
$this->breadcrumbs=array(
	'Scopes'=>array('index'),
	$model->id_scope=>array('view','id'=>$model->id_scope),
	'Update',
);

$this->menu=array(
	array('label'=>'List Scope','url'=>array('index')),
	array('label'=>'Create Scope','url'=>array('create')),
	array('label'=>'View Scope','url'=>array('view','id'=>$model->id_scope)),
	array('label'=>'Manage Scope','url'=>array('admin')),
);
?>

<h1>Update Scope <?php echo $model->id_scope; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>