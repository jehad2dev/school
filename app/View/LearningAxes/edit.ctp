<?php $this->set('title_for_layout',"Gestion des axes d'apprentissage");?>

<div>
	<h2>Gestion des axes d'apprentissage</h2>
	<br>
	<?php echo $this->Form->create('LearningAxis', array('class' => 'form-horizontal')); ?>
	<?php echo $this->Form->input('id'); ?>
	<?php echo $this->Form->input('name',array('label'=>"Nom")); ?>
	<?php echo $this->Form->end('Enregistrer'); ?>
</div>