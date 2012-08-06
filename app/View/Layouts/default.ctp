<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'JJ Web Solutions');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.style');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33907123-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
	<div id="container">
		<div id="header">
		</div>
		<div id="nav">
			<ul><li><?= $this->Html->link('Home', array('controller' => 'home', 'action' => 'index')); ?></li>
				<li><?= $this->Html->link('Contact', array('controller' => 'home', 'action' => 'contact')); ?></li>
				</ul>
		</div>
		<div id="content">
		
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<div id="links">
				<div style="padding-top:70px; padding-left: 70px;"><a href="http://www.mozilla.org/en-US/firefox/new/"><?= $this->Html->image('firefox.png', array('alt' => 'Firefox')); ?></a>
				<a href="https://www.google.com/intl/en/chrome/browser/"><?= $this->Html->image('chrome.png', array('alt' => 'Google Chrome')); ?></a>
				<!-- Place this tag where you want the +1 button to render. -->
				<div class="g-plusone" data-annotation="inline" data-width="300"></div>

				<!-- Place this tag after the last +1 button tag. -->
				<script type="text/javascript">
  				(function() {
   				 var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
   				 po.src = 'https://apis.google.com/js/plusone.js';
    			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
 				 })();
				</script>
				</div>			
				</div>
			<div id="copyright">Copyright &copy; 2012 by JJ Web Solutions, LLC</div>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
