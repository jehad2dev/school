<?php $this->set('title_for_layout',"Gestion du fiches");?>

<h2>Gestion des fiches</h2>

<p>
	
	<?php echo $this->Html->link('<i class="icon-plus"></i> Ajouter une nouvel élément',
			array('action'=>'edit'),
			array('escape' => false,'class' => 'btn')); ?>
</p>

<div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th width="75px">Action</th>
				<th>Nom</th>
				<th>Last update</th>
			</tr>
		</thead>
		<?php foreach ($sheets as $k => $v):  $v = current($v);?>
		<tr>
			<td>
				<div class="btn-group">
					<a class="btn dropdown-toggle btn-mini" data-toggle="dropdown" href="#">
						<i class="icon-cog"></i>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<?php echo $this->Html->link('<i class="icon-eye-open"></i> Voir',
								array(
									'action'=>'view',
									$v['id']),
								array('escape' => false)); ?>
						</li>
						<li>
							<?php echo $this->Html->link('<i class="icon-edit"></i> Modifier',
								array(
									'action'=>'edit',
									$v['id']),
								array('escape' => false)); ?>
						</li>
						<li>
							<?php echo $this->Html->link('<i class="icon-repeat"></i> Dupliquer',
								array(
									'action'=>'edit',
									$v['id'],
									'?' => array(
										'method' => 'duplicated')),
								array('escape' => false)); ?>
						</li>
						<li class="divider"></li>
						<li>
							<?php echo $this->Html->link('<i class="icon-trash"></i> Supprimer',
								array(
									'action'=>'delete',
									$v['id']),
								array('escape' => false),
								'Voulez vous vraiment supprimer ?' ); ?>
						</li>
					</ul>
				</div>

			</td>
			<td><?php echo $v['name'] ?></td>
			<td><?php echo $v['date_last_modified'] ?></td>
		</tr>
		<?php endforeach ?>
	</table>

	<?php echo $this->Paginator->pagination(); ?>
</div>
<br>
