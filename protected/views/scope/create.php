<?php
$this->breadcrumbs=array(
	'Scopes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Scope','url'=>array('index')),
	array('label'=>'Manage Scope','url'=>array('admin')),
);
?>

<h1>Create Scope</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>