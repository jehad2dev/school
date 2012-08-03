<?php $this->set('title_for_layout',"Gestion des fiches");?>

<div>
	<h2>Gestion des fiches</h2>
	<br>
	<?php echo $this->Form->create('Sheet'); ?>
	<?php echo $this->Form->input('id'); ?>
	<?php echo $this->Form->input('name',array('label'=>"Titre")); ?>
	<?php echo $this->Form->input('discipline_id',array('label'=>"Matière")); ?>
	<?php echo $this->Form->input('competance_id',array('label'=>"Compétence visée")); ?>
	<?php echo $this->Form->input('competance_list_id',array('label'=>"Compétence utilisée")); ?>
	<?php echo $this->Form->input('learning_axis_id',array('label'=>"Axe d'apprentissage")); ?>
	<?php echo $this->Form->input('material_id',array('label'=>"Matériel")); ?>
	<?php echo $this->Form->input('teacher_task',array('label'=>"Tache de l'enseignant")); ?>
	<?php echo $this->Form->input('target',array('label'=>"Objectif")); ?>
	<?php echo $this->Form->input('development',array('label'=>"Développement")); ?>
	<?php echo $this->Form->input('evaluation_id',array('label'=>"Evaluation")); ?>
	<?php echo $this->Form->input('progress',array('label'=>"Progression")); ?>
	<?php echo $this->Form->end('Enregistrer'); ?>
</div>