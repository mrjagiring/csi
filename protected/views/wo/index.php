<?php
$this->breadcrumbs=array(
	'Wos',
);

$this->menu=array(
	array('label'=>'Create Wo','url'=>array('create')),
	array('label'=>'Manage Wo','url'=>array('admin')),
);
?>

<h1>Wos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
