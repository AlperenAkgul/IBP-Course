<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Library</h1> 
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
      <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-info"></i> Welcome back, <?= $this->session->session_data['name_surname'] ?></h5>
        You can browse library stock by "Stock" page and you can send messages to the administrator by "Messages" page.<br>
        Also, you can change your password by clicking on your name on sidebar.
      </div>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title">ANNOUCEMENTS</h3>
            </div>
            <!-- ./card-header -->
            <div class="card-body">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>User</th>
                    <th>Matter</th>
                  </tr>
                </thead>
                <?php
                foreach ($duyuru as $rs) {
                ?>
                  <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false" class="expandable">
                      <td><?= $rs->date ?></td>
                      <td><?= $rs->user ?></td>
                      <td><?= $rs->matter ?></td>
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
          <!-- /.card -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<script>
  window.onload = function() {
    expandTable()
  };

  function expandTable() {
    let tables = document.getElementsByClassName('expandable');

    tables[0].setAttribute("aria-expanded", "true");
  }
</script>