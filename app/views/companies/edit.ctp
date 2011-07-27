<div class="companies form">
<?php echo $this->Form->create('Company');?>
	<fieldset>
		<legend><?php __('Edit Company'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('street');
		echo $this->Form->input('city');
		echo $this->Form->input('phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('web');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Company.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Company.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companies', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>