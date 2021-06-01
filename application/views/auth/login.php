	<div>
	<form class="user" action="<?= base_url('login'); ?>" method="POST">
		<?= $this->session->flashdata('message');  ?>
		<input type="text" name="email" id="email" placeholder="Email Address">
		<br>
		<?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
		<br>
		<input type="password" name="password" id="password" placeholder="Password">
		<br>
		<?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
		<br>
		<button type="submit">Login</button>
		<br>
		<a href="<?= base_url('login/register');?>" id="signup" class="signup">Register Here!</a>
	</form>
	</div>
</div>
</div>
</body>
</html>