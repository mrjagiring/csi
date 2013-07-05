<?php
$this->breadcrumbs=array(
	'Clients'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Client','url'=>array('create')),
);
?>

<h1>Manage Clients</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'client-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'company',
		'address',
		'phone',
		'contact',
		/*
		'npwp',
		'email',
		'create_at',
		'update_at',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
