<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Stock</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>home">Home</a></li>
                        <li class="breadcrumb-item active">Stock</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Stock List</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 250px;">
                        <input type="text" name="table_search" class="form-control float-right" id="searchbar" onkeyup="search_list()" placeholder="Search Name or Author">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Author</th>
                            <th>Year</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($veri as $rs) {
                        ?>
                            <tr id="parent" class="rows">
                                <td><?= $rs->type ?></td>
                                <td class="search_name"><?= $rs->name ?></td>
                                <td class="search_author"><?= $rs->author ?></td>
                                <td><?= $rs->year ?></td>
                                <td><?= $rs->quantity ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
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
        <!-- /.card-footer-->
</div>
</section>
<!-- /.content -->
</div>

<script>
    function search_list() {
        let input = document.getElementById('searchbar').value
        input = input.toLowerCase();
        let x = document.getElementsByClassName('search_name');
        let y = document.getElementsByClassName('search_author');

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