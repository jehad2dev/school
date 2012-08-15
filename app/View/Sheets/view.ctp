<?php $this->set('title_for_layout',"Fiche : " . $data['Sheet']['name']);?>


<div style="border: 1px solid #dddddd">
	<dl class="dl-horizontal">
		<dt>Projet</dt>
		<dd><?php echo $data['Project']['name'] ?>&nbsp;</dd>
		<dt>Sujet</dt>
		<dd><?php echo $data['Sheet']['name'] ?></dd>
	</dl>
</div>
<div style="border: 1px solid #dddddd">
	<dl class="dl-horizontal">
		<dt>Matiere / domaine</dt>
		<dd><?php echo $data['Discipline']['name'] ?></dd>
		<dt>Compétence visée</dt>
		<dd><?php echo $data['TargetCompetence']['name'] ?></dd>
	</dl>
	<dl>
		<dt>Compétence utilisée</dt>
		<dd>
			<ul>
				<?php foreach ($data['Competence'] as $v) :?>
				<li>
					<?php echo $v['name'] ?>
				</li>
				<?php endforeach; ?>
			</ul>			
		</dd>
	</dl>	
</div>
<div style="border: 1px solid #dddddd">
	<dl class="dl-horizontal">
		<dt>Axe</dt>
		<dd><?php echo $data['LearningAxis']['name']  ?>	</dd>
	</dl>	
</div>
<div style="border: 1px solid #dddddd">
	<dl>
		<dt>Défis</dt>
		<dd><?php echo nl2br($data['Sheet']['challenge']) ?>	</dd>
	</dl>
</div>
<div style="border: 1px solid #dddddd">
	<dl>
		<dt>Objectif</dt>
		<dd><?php echo nl2br($data['Sheet']['target']) ?>	</dd>
	</dl>
	<dl>
		<dt>Materiel</dt>
		<dd>
			<ul>
				<?php foreach ($data['Material'] as $v) :?>
				<li>
					<?php echo $v['name'] ?>
				</li>
				<?php endforeach; ?>
			</ul>
		</dd>
	</dl>	
</div>
<div style="border: 1px solid #dddddd">
	<dl>
		<dt>Déroulement</dt>
		<dd><?php echo nl2br($data['Sheet']['progress']) ?>	</dd>
	</dl>
</div>
<div style="border: 1px solid #dddddd">
	<dl class="dl-horizontal">
		<dt>Evaluation</dt>
		<dd><?php echo $data['Evaluation']['name']  ?>	</dd>
	</dl>	
</div>
<div style="border: 1px solid #dddddd">
	<dl>
		<dt>Observations</dt>
		<dd><?php echo nl2br($data['Sheet']['comment']) ?>	</dd>
	</dl>
</div>