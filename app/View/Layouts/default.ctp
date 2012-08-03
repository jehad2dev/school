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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>

	<?php echo $this->Html->css('bootstrap.min'); ?>
	<?php echo $this->Html->css('bootstrap-responsive.min'); ?>

</head>
<body>

	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">Ecole Apps</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li class="<?php echo ($this->params['controller'] == 'sheets' ?'active':''); ?>">
							<?php echo $this->Html->link(
								"Fiches",
								array(
									'action'=>'index',
									'controller'=>'sheets'
									)
								); ?>
						</li>
						<li class="<?php echo ($this->params['controller'] == 'materials' ?'active':''); ?>">
							<?php echo $this->Html->link(
								"Matériels",
								array(
									'action'=>'index',
									'controller'=>'materials'
									)
								); ?>
						</li>
						<li class="<?php echo ($this->params['controller'] == 'evaluations' ?'active':''); ?>">
							<?php echo $this->Html->link(
								"Evaluations",
								array(
									'action'=>'index',
									'controller'=>'evaluations'
									)
								); ?>
						</li>
						<li class="<?php echo ($this->params['controller'] == 'learningaxes' ?'active':''); ?>">
							<?php echo $this->Html->link(
								"Axes d'apprentissage",
								array(
									'action'=>'index',
									'controller'=>'learningaxes'
									)
								); ?>
						</li>
						<li class="<?php echo ($this->params['controller'] == 'disciplines' ?'active':''); ?>">
							<?php echo $this->Html->link(
								"Matieres",
								array(
									'action'=>'index',
									'controller'=>'disciplines'
									)
								); ?>
						</li>
						<li class="<?php echo ($this->params['controller'] == 'competences' ?'active':''); ?>">
							<?php echo $this->Html->link(
								"Compétences",
								array(
									'action'=>'index',
									'controller'=>'competences'
									)
								); ?>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
<?php echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'); ?>
<?php echo $this->Html->script('bootstrap.min'); ?>
<?php echo $scripts_for_layout; ?>
</html>
