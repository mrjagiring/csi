<?php
$this->breadcrumbs=array(
	'Work Order'=>array('admin'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Create WO','url'=>array('create')),
);
?>

<h1>Manage Work Order</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'wo-grid',
	'dataProvider'=>$model->search(),
	'type'=>'striped',
	'template'=>'{summary}{items}{pager}',
	'filter'=>$model,
	'columns'=>array(
		array(
		    'name'=>'client_id',
		    'headerHtmlOptions'=>array('width'=>'200px', 'style'=>'text-align: left;'),
		    'value'=> array($this,'getClient'),
		),
		'letter_no',
		'vessel',
		'object',
		'loading',
		'destination',
		/*
		'description',
		'attending',
		'qty',
		'status',
		'create_at',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
