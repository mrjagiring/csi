<?php
$this->breadcrumbs=array(
	'Coas',
);

$this->menu=array(
	array('label'=>'Create Coa','url'=>array('create')),
	array('label'=>'Manage Coa','url'=>array('admin')),
);
?>

<h1>Coas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
