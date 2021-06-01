<div class="edit">
  <h1>My Profile</h1>
</div>
<div style="background-color: #ffffff">
  <div class="container">
    <div class="text-center py-5">
      <?= $this->session->flashdata('message'); ?>
      <img src="<?=base_url('assets/images/profile/') . $user['profilepic']; ?>" alt class="ui-w-100 rounded-circle"  style="width: 250px; height: 200px;">
      <br>
      <div>
        <h3 class="font-weight-bold my-4">
          <?php 
            echo $user['namadepan'] . ' ' . $user['namabelakang'];
          ?>
          <br>
          <i class="glyphicon glyphicon-envelope"></i><?php echo ' ' . $user['email'] ?>
          <br/>
          <i class="glyphicon glyphicon-gift"></i><?php echo ' ' . $user['tanggallahir'] ?>
        </h3>
        <a class="btn btn-custom" href="<?= base_url('user/edit');?>">Edit Profile</a>
  </div>