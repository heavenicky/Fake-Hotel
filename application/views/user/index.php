<div class="container">

    <div class="row">

      <div class="col-lg-3">
        <div class="navbar-form navbar-right">
          <?= form_open('user') ?>
            <input type="text" name="keyword" class="form-control" placeholder="Search Keyword">
            <button type="Submit" class="btn btn-primaty">Search</button>
          <?= form_close()  ?>
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?= base_url('assets/');?>images/hotel/first.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= base_url('assets/');?>images/hotel/second.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= base_url('assets/');?>images/hotel/third.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
</div>
<?= $this->session->flashdata('message');  ?>
<div class="row">
	
  <?php foreach($hotel as $h) : ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top img-thumbnail" style="width: 270px; height: 140px" src=" assets/images/hotel/<?= $h->gambar ?>"alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?= $h->nama ?></a>
                </h4>
                <span class="badge badge-pill badge-success mb-3"><?= 'Rp.' . $h->harga?></span>
            </div>
              <div class="card-footer">
              	<?php 
              		if($h->jumlah_kamar<1){
              			echo "<span class='btn btn-danger' disable>Hotel Full</span>";
              		}
              		else{
              			echo anchor('user/booking/'.$h->id, '<button class="btn btn-success">Booking</button>');
              		}
              	 ?>
              	 <a href="<?= base_url('user/detail/').$h->id ?>" class="btn btn-warning">Detail</a>
              </div>
            </div>
          </div>
    <?php endforeach; ?>
</div>

