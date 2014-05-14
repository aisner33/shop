<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription; ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<title>Metronic Shop UI</title>
	  <meta content="width=device-width, initial-scale=1.0" name="viewport">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	  <meta content="Metronic Shop UI description" name="description">
	  <meta content="Metronic Shop UI keywords" name="keywords">
	  <meta content="keenthemes" name="author">

	  <meta property="og:site_name" content="-CUSTOMER VALUE-">
	  <meta property="og:title" content="-CUSTOMER VALUE-">
	  <meta property="og:description" content="-CUSTOMER VALUE-">
	  <meta property="og:type" content="website">
	  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
	  <meta property="og:url" content="-CUSTOMER VALUE-">

	   <!-- Fonts START -->
	  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&subset=all" rel="stylesheet" type="text/css">
	  <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow&subset=all" rel="stylesheet" type="text/css">
	  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->
  <!-- Fonts END -->

  <!-- Global styles START -->  
  <?php echo $this->Html->css(array('/assets/plugins/font-awesome/css/font-awesome.min','/assets/plugins/bootstrap/css/bootstrap')); ?>       
  <!-- Global styles END --> 

  <!-- Page level plugin styles START -->
  <?php echo $this->Html->css(array('/assets/plugins/fancybox/source/jquery.fancybox','/assets/plugins/bxslider/jquery.bxslider','/assets/plugins/layerslider/css/layerslider')); ?>
  <!-- Page level plugin styles END --> 

  <!-- Theme styles START -->
  <?php echo $this->Html->css(array('/assets/css/style-metronic','/assets/css/style','/assets/css/style-responsive','/assets/css/custom')); ?>
  <!-- Theme styles END -->
	<?php
		//echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		//echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container2">
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
