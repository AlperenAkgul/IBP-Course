<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Announcements</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/home">Home</a></li>
                        <li class="breadcrumb-item active">Announcements</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <?php if ($this->session->flashdata("result")) {
        ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Well Done!</h5>
                <?= $this->session->flashdata("result") ?>
            </div>
        <?php
        }
        ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Announcement List</h3>
            </div>
            <td class="project-actions text-center">
                <a class="btn btn-primary btn-sm" href="<?= base_url() ?>admin/announcements/add" style="background-color: #02d526; border-color: #02d526;">
                    <i class="fas fa-plus">
                    </i>
                    Add
                </a>
            </td>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>User</th>
                            <th>Matter</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($duyuru as $rs) {
                    ?>
                        <tbody>
                            <tr data-widget="expandable-table" aria-expanded="true" class="rows">
                                <td><?= $rs->date ?></td>
                                <td><?= $rs->user ?></td>
                                <td><?= $rs->matter ?></td>
                                <td class="project-actions text-center">
                                    <a class="btn btn-info btn-sm" href="<?= base_url() ?>admin/announcements/edit/<?= $rs->id ?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="<?= base_url() ?>admin/announcements/delete/<?= $rs->id ?>" onclick="return confirm('Are you sure you want to delete this announcement?');">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr class="expandable-body">
                                <td colspan="5">
                                    <p>
                                        <?= $rs->announcement ?>
                                    </p>
                                </td>
                            </tr>
                        <?php
                    }
                        ?>
                        </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <br>
            <div class="card-tools" style="margin-left: auto; margin-right: auto;">
                <ul class="pagination pagination-sm float-right">
                    <?php
                    $length = count($duyuru);
                    for ($i = 0; $i < ($length / 10); $i++) {
                    ?>
                        <li class="page-item"><a class="page-link" onclick="pagination(<?= $i + 1 ?>)"><?= $i + 1 ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <!-- /.card-footer-->
</div>
</section>
<!-- /.content -->
</div>
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