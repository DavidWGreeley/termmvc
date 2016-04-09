<div class="dvds view">
<h2><?php echo __('Dvd'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dvd['Dvd']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($dvd['Dvd']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Format'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dvd['Format']['format'], array('controller' => 'formats', 'action' => 'view', $dvd['Format']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dvd['Type']['types'], array('controller' => 'types', 'action' => 'view', $dvd['Type']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dvd['Location']['location'], array('controller' => 'locations', 'action' => 'view', $dvd['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Url'); ?></dt>
		<dd>
			<?php echo h($dvd['Dvd']['image_url']); ?><br>
                        <img src="<?php echo h($dvd['Dvd']['image_url']); ?>" />
			&nbsp;
		</dd>
		<dt><?php echo __('Offical Website'); ?></dt>
		<dd>
			<?php echo h($dvd['Dvd']['offical_website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imdb Link'); ?></dt>
		<dd>
			<?php echo h($dvd['Dvd']['imdb_link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dvd['Rating']['id'], array('controller' => 'ratings', 'action' => 'view', $dvd['Rating']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of Disk'); ?></dt>
		<dd>
			<?php echo h($dvd['Dvd']['number_of_disk']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of Episode'); ?></dt>
		<dd>
			<?php echo h($dvd['Dvd']['number_of_episode']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dvd'), array('action' => 'edit', $dvd['Dvd']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dvd'), array('action' => 'delete', $dvd['Dvd']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dvd['Dvd']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Dvds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dvd'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Genres'); ?></h3>
	<?php if (!empty($dvd['Genre'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Genre'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dvd['Genre'] as $genre): ?>
		<tr>
			<td><?php echo $genre['id']; ?></td>
			<td><?php echo $genre['genre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'genres', 'action' => 'view', $genre['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'genres', 'action' => 'edit', $genre['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'genres', 'action' => 'delete', $genre['id']), array('confirm' => __('Are you sure you want to delete # %s?', $genre['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Genre'), array('controller' => 'genres', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
