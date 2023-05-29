<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reply User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/home">Home</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url() ?>admin/messages">Messages</a></li>
                        <li class="breadcrumb-item active">Read Message</li>
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
                            <h3 class="card-title">Read Message</h3>

                            <div class="card-tools">
                                <a href="<?= base_url() ?>admin/messages" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h5><?= $veri[0]->subject ?></h5>
                                <h6>From: <?= $veri[0]->user1 ?>
                                    <span class="mailbox-read-time float-right"><?= $veri[0]->date ?></span>
                                </h6>
                            </div>
                            <!-- /.mailbox-read-info -->
                            <!-- /.mailbox-controls -->
                            <div class="mailbox-read-message" style="border: 0.5px solid black; border-radius: 10px; margin:20px;">
                                <b><?= $veri[0]->user1 ?> > </b><?= $veri[0]->message ?>
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <?php
                        if ($veri[0]->reply != NULL) {
                        ?>
                            <div class="card-body p-0">
                                <div class="mailbox-read-info">
                                    <h5>Reply</h5>
                                    <h6>From: <?= $veri[0]->user2 ?>
                                        <span class="mailbox-read-time float-right"><?= $veri[0]->reply_date ?></span>
                                    </h6>
                                </div>
                                <!-- /.mailbox-read-info -->
                                <!-- /.mailbox-controls -->
                                <div class="mailbox-read-message" style="border: 0.5px solid black; border-radius: 10px; margin:20px;">
                                    <b><?= $veri[0]->user2 ?> ></b><?= $veri[0]->reply ?>
                                </div>
                                <!-- /.mailbox-read-message -->
                            </div>
                        <?php
                        } else {
                        ?>
                            <!-- /.card-body -->
                            <form action="<?= base_url() ?>admin/messages/reply/<?= $veri[0]->id ?>" method="POST">
                                <div class="card-footer">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Reply:</label>
                                        <textarea name="reply" class="form-control" maxlength="1000" rows="5" placeholder="Enter Reply..." required></textarea>
                                    </div>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-reply"></i> Reply</button>
                                    </div>

                                    <!-- /.card-footer -->
                                </div>
                            </form>
                        <?php }
                        ?>
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
$this->load->view('admin/_footer');
?>