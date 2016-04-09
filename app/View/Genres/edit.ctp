<div class="genres form">
<?php echo $this->Form->create('Genre'); ?>
	<fieldset>
		<legend><?php echo __('Edit Genre'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('genre');
		echo $this->Form->input('Dvd');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Genre.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Genre.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Genres'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Dvds'), array('controller' => 'dvds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dvd'), array('controller' => 'dvds', 'action' => 'add')); ?> </li>
	</ul>
</div>
