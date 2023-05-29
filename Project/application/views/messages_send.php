<?php
$this->load->view('_header');
$this->load->view('_sidebar');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Send Message to Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>home">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url() ?>messages">Messages</a></li>
                        <li class="breadcrumb-item active">Send Message to Admin</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Send New Message to Admin</h3>
                            <div class="card-tools">
                                <a href="<?= base_url() ?>messages" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                            </div>
                        </div>


                        <!-- /.card-header -->
                        <form action="<?= base_url() ?>messages/sendsave" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Subject:</label>
                                    <input class="form-control" name="subject" placeholder="Subject:">
                                </div>
                                <div class="form-group">
                                    <label for="">Message:</label>
                                    <textarea id="compose-textarea" name="message" class="form-control" style="height: 300px" maxlength="1000" placeholder="Enter message..."></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                                </div>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
$this->load->view('_footer');
?>