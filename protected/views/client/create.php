<?php
$this->breadcrumbs=array(
	'Clients'=>array('admin'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Client','url'=>array('admin')),
	array('label'=>'Manage Client','url'=>array('admin')),
);
?>

<h1>Create Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
