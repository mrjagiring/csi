<?php
$this->breadcrumbs=array(
	'Work Order'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'Manage WO','url'=>array('admin')),
);
?>

<h1>Create Work Order</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
