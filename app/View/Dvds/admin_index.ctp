<div class="dvds index">
     Hello world
	<h2><?php echo __('Dvds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
           
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('format_id'); ?></th>
			<th><?php echo $this->Paginator->sort('type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('image_url'); ?></th>
			<th><?php echo $this->Paginator->sort('offical_website'); ?></th>
			<th><?php echo $this->Paginator->sort('imdb_link'); ?></th>
			<th><?php echo $this->Paginator->sort('rating_id'); ?></th>
			<th><?php echo $this->Paginator->sort('number_of_disk'); ?></th>
			<th><?php echo $this->Paginator->sort('number_of_episode'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dvds as $dvd): ?>
	<tr>
		<td><?php echo h($dvd['Dvd']['id']); ?>&nbsp;</td>
		<td><?php echo h($dvd['Dvd']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dvd['Format']['format'], array('controller' => 'formats', 'action' => 'view', $dvd['Format']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dvd['Type']['types'], array('controller' => 'types', 'action' => 'view', $dvd['Type']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dvd['Location']['location'], array('controller' => 'locations', 'action' => 'view', $dvd['Location']['id'])); ?>
		</td>
		<td><?php echo h($dvd['Dvd']['image_url']); ?>&nbsp;</td>
		<td><?php echo h($dvd['Dvd']['offical_website']); ?>&nbsp;</td>
		<td><?php echo h($dvd['Dvd']['imdb_link']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dvd['Rating']['rating'], array('controller' => 'ratings', 'action' => 'view', $dvd['Rating']['id'])); ?>
		</td>
		<td><?php echo h($dvd['Dvd']['number_of_disk']); ?>&nbsp;</td>
		<td><?php echo h($dvd['Dvd']['number_of_episode']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dvd['Dvd']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dvd['Dvd']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dvd['Dvd']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dvd['Dvd']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Dvd'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Formats'), array('controller' => 'formats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Format'), array('controller' => 'formats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ratings'), array('controller' => 'ratings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rating'), array('controller' => 'ratings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genres'), array('controller' => 'genres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
	</ul>
</div>
