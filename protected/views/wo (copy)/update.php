<?php
$this->breadcrumbs=array(
	'Work Order'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Create WO','url'=>array('create')),
	array('label'=>'View WO','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage WO','url'=>array('admin')),
);
?>

<h1>Update Work Order <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
