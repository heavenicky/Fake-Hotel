	<div>
	<form class="user" action="<?= base_url('login/register'); ?>" method="POST">
		<input type="text" name="namadepan" id="namadepan" placeholder="First Name" value="<?= set_value('namadepan'); ?>">
		<br>
		<?= form_error('namadepan', ' <small class="text-danger pl-3">', '</small>'); ?>
		<input type="text" name="namabelakang" placeholder="Last Name" id="namabelakang" value="<?= set_value('namabelakang'); ?>">
		<br>
		<?= form_error('namabelakang', ' <small class="text-danger pl-3">', '</small>'); ?>
		<input type="date" id="tanggallahir" name="tanggallahir" value="<?= set_value('tanggallahir'); ?>">
		<br>
		<?= form_error('tanggallahir', ' <small class="text-danger pl-3">', '</small>'); ?>
		<input type="email" name="email" id="email" placeholder="Email" value="<?= set_value('email'); ?>">
		<br>
		<?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
	
		<input type="password" name="password1" id="password1" placeholder="Password">
		<br>
		<input type="password" name="password2" id="password2" placeholder="Confirm Password">
		<br>
		<?= form_error('password1', ' <small class="text-danger pl-3">', '</small>'); ?>
		<br>
		<button type="submit">Register</button>
		<br>
		<a href="<?= base_url('login'); ?>" id="signin" class="signin">Already Have An Account? Login Here!</a>
	</form>
	</div>
</div>
</div>
</body>
</html>