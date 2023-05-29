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
                    <h1 class="m-0">Edit Item</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/home">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/stock">Stock</a></li>
                        <li class="breadcrumb-item active">Edit Item</li>
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
                            <h3 class="card-title">Edit Item</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= base_url() ?>admin/stock/editsave/<?= $veri[0]->id ?>" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleSelectRounded0">Type</label>
                                    <select class="custom-select rounded-0" name="type" id="exampleSelectRounded0" required>
                                        <option><?= $veri[0]->type ?></option>
                                        <option>Book</option>
                                        <option>Magazine</option>
                                        <option>Article</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputType1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName1" value="<?= $veri[0]->name ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputType1">Author</label>
                                    <input type="text" name="author" class="form-control" id="exampleInputName1" value="<?= $veri[0]->author ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputType1">Year</label>
                                    <input type="number" name="year" class="form-control" id="exampleInputName1" value="<?= $veri[0]->year ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputType1">Quantity</label>
                                    <input type="number" name="quantity" class="form-control" id="exampleInputName1" value="<?= $veri[0]->quantity ?>" required>
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