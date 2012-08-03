<?php $this->set('title_for_layout',"Gestion des compétences");?>

<div>
	<h2>Gestion des compétences</h2>
	<br>
	<?php echo $this->Form->create('Competence', array('class' => 'form-horizontal')); ?>
	<?php echo $this->Form->input('id'); ?>
	<?php echo $this->Form->input('discipline_id',array('label'=>"Matière")); ?>
	<?php echo $this->Form->input('parent_id',array('label'=>"Compétence parent", 'options'=>$treelist)); ?>
	<?php echo $this->Form->input('name',array('label'=>"Nom")); ?>
	<?php echo $this->Form->end('Enregistrer'); ?>
</div>