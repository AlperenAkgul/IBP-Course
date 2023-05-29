<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Admin Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/home">Home</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-info"></i> Welcome back, <?= $this->session->session_data['name_surname'] ?></h5>
        You can add, edit or delete users from system by "Users" <br>
        You can add, edit or delete users from library stock by "Stock" page.<br>
        Also, you can send messages to the users by "Messages" page and manage Announcements by "Announcements" page.
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Slider</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 320px;">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="small-box bg-info" style="position: relative; height: 300px;">
                      <div class="inner">
                        <h3>Users</h3>

                        <p>Manage Users</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-user"></i>
                      </div>
                      <a href="<?= base_url() ?>admin/users" class="small-box-footer" style="position: absolute; bottom:7%; width:100%;">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="small-box bg-danger" style="position: relative; height: 300px;">
                      <div class="inner">
                        <h3>Messages</h3>

                        <p>Send Messages to Users</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-envelope"></i>
                      </div>
                      <a href="<?= base_url() ?>admin/messages" class="small-box-footer" style="position: absolute; bottom:7%; width:100%;">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="small-box bg-success" style="position: relative; height: 300px;">
                      <div class="inner">
                        <h3>Stock</h3>

                        <p>Manage Library Stock</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-book"></i>
                      </div>
                      <a href="<?= base_url() ?>admin/stock" class="small-box-footer" style="position: absolute; bottom:7%; width:100%;">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="small-box bg-warning" style="position: relative; height: 300px;">
                      <div class="inner">
                        <h3>Announcements</h3>

                        <p>Manage Announcements</p>
                      </div>
                      <div class="icon">
                        <i class="fas fa-scroll"></i>
                      </div>
                      <a href="<?= base_url() ?>admin/announcements" class="small-box-footer" style="position: absolute; bottom:7%; width:100%;">More info <i class="fas fa-arrow-circle-right"></i></a>

                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-custom-icon" aria-hidden="true">
                    <i class="fas fa-chevron-left"></i>
                  </span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-custom-icon" aria-hidden="true">
                    <i class="fas fa-chevron-right"></i>
                  </span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>