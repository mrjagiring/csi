<?php
$this->breadcrumbs=array(
	'Coas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Coa','url'=>array('index')),
	array('label'=>'Manage Coa','url'=>array('admin')),
);
?>

<h1>Create Coa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>