<?php $this->set('title_for_layout',__("Gestion des compétences"));?>

<h2>Gestion des compétences</h2>

<p>
	
	<?php echo $this->Html->link('<i class="icon-plus"></i> Ajouter une nouvel élément',
			array('action'=>'edit'),
			array('escape' => false,'class' => 'btn')); ?>
</p>

<div>
	<table>
		<tr>
			<th width="100px">Action</th>
			<th>Nom</th>
		</tr>
		<?php foreach ($competences as $k => $v):  $v = current($v);?>
		<tr>
			<td>
				<?php echo $this->Html->link('<i class="icon-edit"></i>',
					array(
						'action'=>'edit',
						$v['id']),
					array('escape' => false,'class' => 'btn')); ?>

				<?php echo $this->Html->link('<i class="icon-trash icon-white"></i>',
					array(
						'action'=>'delete',
						$v['id']),
					array('escape' => false,'class' => 'btn btn-danger'),
					'Voulez vous vraiment supprimer ? Les compétences enfants serront supprimées' ); ?>
				</td>
				<td><?php echo $v['name'] ?></td>
			</tr>
		<?php endforeach ?>
	</table>

	<?php echo $this->Paginator->pagination(); ?>
</div>
