<?php
$this->breadcrumbs=array(
	'Work Order',
);

$this->menu=array(
	array('label'=>'Create WO','url'=>array('create')),
	array('label'=>'Manage WO','url'=>array('admin')),
);
?>

<h1>Work Order</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
