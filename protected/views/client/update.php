<?php
$this->breadcrumbs=array(
	'Clients'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Client','url'=>array('create')),
	array('label'=>'View Client','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Client','url'=>array('admin')),
);
?>

<h1>Update Client <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
