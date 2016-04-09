<div class="dvds form">
<?php echo $this->Form->create('Dvd'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dvd'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('format_id');
		echo $this->Form->input('type_id');
		echo $this->Form->input('location_id');
		echo $this->Form->input('image_url');
		echo $this->Form->input('offical_website');
		echo $this->Form->input('imdb_link');
		echo $this->Form->input('rating_id');
		echo $this->Form->input('number_of_disk');
		echo $this->Form->input('number_of_episode');
		echo $this->Form->input('Genre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Dvd.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Dvd.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Dvds'), array('action' => 'index')); ?></li>
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
