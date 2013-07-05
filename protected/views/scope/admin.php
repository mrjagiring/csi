<?php
$this->breadcrumbs=array(
	'Scopes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Scope','url'=>array('index')),
	array('label'=>'Create Scope','url'=>array('create')),
);
?>

<h1>Manage Scopes</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'scope-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'scope',
		'detail',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
