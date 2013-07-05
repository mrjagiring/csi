<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php //Yii::app()->bootstrap->register(); ?>
</head>

<body>
<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'type'=>'inverse', // null or 'inverse'
	'brand'=>'CSI',
	'brandUrl'=>'#',
	'collapse'=>true, // requires bootstrap-responsive.css
	'items'=>array(
		array(
			'class'=>'bootstrap.widgets.TbMenu',
			'items'=>array(
				array('label'=>'Home', 'icon'=>'home', 'url'=>array('/site/index')),
				array('label'=>'Accounting', 'icon'=>'book', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Work Activity', 'icon'=>'book', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
					array('label'=>"Work Order", 'url'=>array('/wo/admin'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>"Make Invoice", 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>"Manage Invoice", 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
					)),
				array('label'=>'Bank Activity', 'icon'=>'book', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
					array('label'=>"Bank Voucher", 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>"Allocate Payment", 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>"Manage Allocate", 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
					)),
				array('label'=>'Report', 'icon'=>'book', 'url'=>array('#'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Tools', 'icon'=>'cog', 'url'=>'#', 'visible'=>!Yii::app()->user->isGuest, 'items'=>array(
					array('label'=>"Client", 'url'=>array('/client/admin'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>"Staff", 'url'=>array('/staff/admin'), 'visible'=>!Yii::app()->user->isGuest),
					array('label'=>"Work", 'url'=>array('/scope/admin'), 'visible'=>!Yii::app()->user->isGuest),
					)),
				array('label'=>'Login', 'icon'=>'cog', 'url'=>Yii::app()->User->loginUrl, 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				),
			),
		),
	));
?>
<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<br/>
		Copyright &copy; <?php echo date('Y'); ?>
		Design and Customize by Mr. Jagiring.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
