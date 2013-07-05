<?php
$this->breadcrumbs=array(
	'Staffs'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Staff','url'=>array('create')),
);
?>

<h1>Manage Staffs</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'staff-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'code',
		'name',
		'address',
		'phone',
		'department',
		/*
		'email',
		'create_at',
		'update_at',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
