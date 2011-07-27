<h2>Hackathon - NR Hackers- Cake Rocks!</h2>

<?php
if (Configure::read() > 0):
	Debugger::checkSecurityKeys();
endif;
?>

<p>
    <ul>
        <li><?php echo $this->Html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
        
        <li><?php echo $this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
    </ul>
</p>

