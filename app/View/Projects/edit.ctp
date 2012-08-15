<?php $this->set('title_for_layout',"Gestion des projets");?>

<div>
	<h2>Gestion des projets</h2>
	<br>
	<?php echo $this->Form->create('Project', array('class' => 'form-horizontal')); ?>
	<?php echo $this->Form->input('id'); ?>
	<?php echo $this->Form->input('name',array('label'=>"Nom")); ?>
	<?php echo $this->Form->end('Enregistrer'); ?>
</div>