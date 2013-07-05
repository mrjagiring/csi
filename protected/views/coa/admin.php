<?php
$this->breadcrumbs=array(
	'Coas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Coa','url'=>array('index')),
	array('label'=>'Create Coa','url'=>array('create')),
);
?>

<h1>Manage COA</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'coa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'coa_code',
		'coa_name',
		array(
			'name'=>'parent',
			'header'=>'Parent Group',
			'type'=>'text',
			'value'=> array($this,'parentCOA'),
		),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
