<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/announcements">Announcements</a></li>
                        <li class="breadcrumb-item active">Edit Announcement</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Announcement</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= base_url() ?>admin/announcements/editsave/<?= $veri[0]->id ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Matter</label>
                                    <input type="text" name="matter" class="form-control" id="exampleInputName1" value="<?= $veri[0]->matter ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Announcement</label>
                                    <textarea name="announcement" class="form-control" maxlength="1000" rows="5" placeholder="<?= $veri[0]->announcement ?>" required></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Apply</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<br>

<?php
$this->load->view('admin/_footer');
?>