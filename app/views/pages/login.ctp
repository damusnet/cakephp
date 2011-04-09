<?php echo $this->Html->css('openid'); ?>
<div id="box">
	<div id="message"><?php echo $this->Session->flash('auth'); ?></div>
	<?php echo $this->Form->create('User'); ?>
	<p class="main">
		<?php echo $this->Form->input('email', array('label' => 'email: ', 'div' => false, 'class' => 'fields focus')); ?>
		<?php echo $this->Form->input('password', array('label' => 'password: ', 'div' => false, 'class' => 'fields')); ?>
	</p>	
	<?php echo $this->Form->end('login'); ?>
</div>
<p style="margin: 25px;">
	<!-- Simple OpenID Selector -->
	<?php echo $this->Form->create('Authentification', array('action' => 'login', 'id' => 'openid_form')); ?>
		<div id="openid_choice">
			<div id="openid_btns"></div>
		</div>
		<div id="openid_input_area">
			<?php echo $this->Form->input('identifier', array('label' => false, 'value' => 'http://')); ?>
			<?php echo $this->Form->submit('login'); ?>
		</div>
		<noscript>
			<p>OpenID is service that allows you to log-on to many different websites using a single indentity.
			Find out <a href="http://openid.net/what/">more about OpenID</a> and <a href="http://openid.net/get/">how to get an OpenID enabled account</a>.</p>
		</noscript>
	<?php echo $this->Form->end(); ?>
	<!-- /Simple OpenID Selector -->
</p>
<?php echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js'); ?>
<?php echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js'); ?>
<?php echo $this->Html->scriptBlock('$("input.focus:last").focus();'); ?>
<?php echo $this->Html->script('openid-jquery'); ?>
<?php echo $this->Html->script('openid-fr'); ?>
<?php echo $this->Html->scriptBlock('$(document).ready(function() { openid.img_path = "../img/"; openid.init("data[Openids][identifier]"); $("#openid_choice").show(); });'); ?>
