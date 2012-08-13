<?php $this->set('title_for_layout',"Gestion du fiches");?>

<h2>Gestion des fiches</h2>

<p>
	
	<?php echo $this->Html->link('<i class="icon-plus"></i> Ajouter une nouvel élément',
			array('action'=>'edit'),
			array('escape' => false,'class' => 'btn')); ?>
</p>

<div>
	<table>
		<tr>
			<th width="150px">Action</th>
			<th>Nom</th>
			<th>Last update</th>
		</tr>
		<?php foreach ($sheets as $k => $v):  $v = current($v);?>
		<tr>
			<td>
				<?php echo $this->Html->link('<i class="icon-edit"></i>',
					array(
						'action'=>'edit',
						$v['id']),
					array('escape' => false,'class' => 'btn')); ?>

				<?php echo $this->Html->link('<i class="icon-repeat"></i>',
					array(
						'action'=>'edit',
						$v['id'],
						'?' => array(
							'method' => 'duplicated')),
					array('escape' => false,'class' => 'btn')); ?>

				<?php echo $this->Html->link('<i class="icon-trash icon-white"></i>',
					array(
						'action'=>'delete',
						$v['id']),
					array('escape' => false,'class' => 'btn btn-danger'),
					'Voulez vous vraiment supprimer ?' ); ?>
				</td>
				<td><?php echo $v['name'] ?></td>
				<td><?php echo $v['date_last_modified'] ?></td>
			</tr>
		<?php endforeach ?>
	</table>

	<?php echo $this->Paginator->pagination(); ?>
</div>
<br>
<div><i class="icon-edit"></i> Modifier</div>
<div><i class="icon-repeat"></i> Dupliquer</div>
<div><i class="icon-trash"></i> Supprimer</div>
