<?php $this->set('title_for_layout',"Gestion des fiches");?>
<div>
	<h2>Gestion des fiches</h2>
	<br>
	<?php echo $this->Form->create('Sheet'); ?>
	<?php echo $this->Form->input('id'); ?>
	<?php echo $this->Form->input('project_id',array('label'=>"Projet",'class' => 'span6')); ?>
	<?php echo $this->Form->input('name',array('label'=>"Titre",'class' => 'span6')); ?>
	<?php echo $this->Form->input('discipline_id',array('label'=>"Matière",'class' => 'span6')); ?>
	<?php echo $this->Form->input('competence_id',array('label'=>"Compétence visée",'class' => 'span6', 'options'=>$treelist)); ?>
	<?php echo $this->Form->input('Competence.Competence',array('label'=>"Compétence utilisée",'class' => 'span6	', 'options'=>$treelist)); ?>
	<?php echo $this->Form->input('learning_axis_id',array('label'=>"Axe d'apprentissage",'class' => 'span6')); ?>
	<?php echo $this->Form->input('Material.Material',array('label'=>"Matériel",'class' => 'span6')); ?>
	<?php echo $this->Form->input('challenge',array('label'=>"Défi",'class' => 'span6')); ?>
	<?php echo $this->Form->input('target',array('label'=>"Objectif",'class' => 'span6')); ?>
	<?php echo $this->Form->input('comment',array('label'=>"Observation",'class' => 'span6')); ?>
	<?php echo $this->Form->input('evaluation_id',array('label'=>"Evaluation",'class' => 'span6')); ?>
	<?php echo $this->Form->input('progress',array('label'=>"Déroulement",'class' => 'span6')); ?>
	<?php echo $this->Form->end('Enregistrer'); ?>
</div>

<?php echo $this->Html->script('Sheets/edit', array('block' => 'scriptBottom')); ?>