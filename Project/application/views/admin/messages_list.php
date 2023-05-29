<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Messages</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/home">Home</a></li>
                        <li class="breadcrumb-item active">Messages</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row justify-content-center">
            <!-- /.col -->
            <div class="col-md-9 ">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Inbox</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 250px;">
                                <input type="text" name="table_search" class="form-control float-right" id="searchbar" onkeyup="search_messages()" placeholder="Search Sender or Subject">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Seen</th>
                                        <th>Replied</th>
                                        <th>Sender Name</th>
                                        <th>Subject</th>
                                        <th>Send Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($veri as $rs) {
                                    ?>
                                        <tr class="rows" id="parent">
                                            <?php
                                            if ($rs->user2_seen != 'yes') {
                                            ?>
                                                <td class="mailbox-star"><i>X</i></a></td>
                                            <?php
                                            } else {
                                            ?>
                                                <td class="mailbox-star"><i class="fas fa-check"></i></a></td>

                                            <?php
                                            } ?>
                                            <?php
                                            if ($rs->replied != 'yes') {
                                            ?>
                                                <td class="mailbox-star"><i>X</i></a></td>
                                            <?php
                                            } else {
                                            ?>
                                                <td class="mailbox-star"><i class="fas fa-check"></i></a></td>

                                            <?php
                                            } ?>
                                            <td class="mailbox-name"><?= $rs->user1 ?></a></td>
                                            <td class="mailbox-subject"><b><?= $rs->subject ?></b></td>
                                            <td class="mailbox-date"><?= $rs->date ?></td>
                                            <td class="project-actions text-right">
                                                <a class="btn btn-primary btn-sm" href="<?= base_url() ?>admin/messages/read/<?= $rs->id ?>">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    View
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <!-- /.table -->
                        </div>
                        <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.card-body -->
                    <br>
                    <div class="card-tools" style="margin-left: auto; margin-right: auto;">
                        <ul class="pagination pagination-sm float-right">
                            <?php
                            $length = count($veri);
                            for ($i = 0; $i < ($length / 10); $i++) {
                            ?>
                                <li class="page-item"><a class="page-link" onclick="pagination(<?= $i + 1 ?>)"><?= $i + 1 ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    function search_messages() {
        let input = document.getElementById('searchbar').value
        input = input.toLowerCase();
        let x = document.getElementsByClassName('mailbox-name');
        let y = document.getElementsByClassName('mailbox-subject');

        for (i = 0; i < x.length; i++) {
            if (!x[i].innerHTML.toLowerCase().includes(input) && !y[i].innerHTML.toLowerCase().includes(input)) {
                x[i].closest("#parent").style.display = "none";
            } else {
                x[i].closest("#parent").style.display = "";
            }
        }
    }
</script>

<script>
    window.onload = function() {
        pagination(1)
    };

    function pagination(id) {
        let rows = document.getElementsByClassName("rows");
        if (rows.length > (id * 10) - 10) {
            for (i = 0; i < rows.length; i++) {
                rows[i].style.display = "none";
            }

            for (i = (id * 10) - 10; i < (id * 10); i++) {
                if (i >= rows.length) {
                    i = rows.length;
                }
                rows[i].style.display = "";
            }
        }
    }
</script>