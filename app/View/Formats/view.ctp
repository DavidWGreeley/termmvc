<div class="formats view">
<h2><?php echo __('Format'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($format['Format']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Format'); ?></dt>
		<dd>
			<?php echo h($format['Format']['format']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Format'), array('action' => 'edit', $format['Format']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Format'), array('action' => 'delete', $format['Format']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $format['Format']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Formats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Format'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dvds'), array('controller' => 'dvds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dvd'), array('controller' => 'dvds', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dvds'); ?></h3>
	<?php if (!empty($format['Dvd'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Format Id'); ?></th>
		<th><?php echo __('Type Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Image Url'); ?></th>
		<th><?php echo __('Offical Website'); ?></th>
		<th><?php echo __('Imdb Link'); ?></th>
		<th><?php echo __('Rating Id'); ?></th>
		<th><?php echo __('Number Of Disk'); ?></th>
		<th><?php echo __('Number Of Episode'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($format['Dvd'] as $dvd): ?>
		<tr>
			<td><?php echo $dvd['id']; ?></td>
			<td><?php echo $dvd['name']; ?></td>
			<td><?php echo $dvd['format_id']; ?></td>
			<td><?php echo $dvd['type_id']; ?></td>
			<td><?php echo $dvd['location_id']; ?></td>
			<td><?php echo $dvd['image_url']; ?></td>
			<td><?php echo $dvd['offical_website']; ?></td>
			<td><?php echo $dvd['imdb_link']; ?></td>
			<td><?php echo $dvd['rating_id']; ?></td>
			<td><?php echo $dvd['number_of_disk']; ?></td>
			<td><?php echo $dvd['number_of_episode']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dvds', 'action' => 'view', $dvd['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dvds', 'action' => 'edit', $dvd['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dvds', 'action' => 'delete', $dvd['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dvd['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dvd'), array('controller' => 'dvds', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
