<?php
$this->breadcrumbs=array(
	'Coas'=>array('index'),
	$model->id_coa=>array('view','id'=>$model->id_coa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Coa','url'=>array('index')),
	array('label'=>'Create Coa','url'=>array('create')),
	array('label'=>'View Coa','url'=>array('view','id'=>$model->id_coa)),
	array('label'=>'Manage Coa','url'=>array('admin')),
);
?>

<h1>Update Coa <?php echo $model->id_coa; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>