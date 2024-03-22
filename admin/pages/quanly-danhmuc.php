<?php include ("../layout/header.php"); ?>
<?php include ("../layout/aside.php");?>

<div class="content-wrapper py-5">
<div class="content">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-lg-12">
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Products</h3>
                <div class="card-tools">
                  
                  <a href="#" class="btn btn-tool btn-sm">
                   
                  <i class="bi bi-plus-circle"></i>
                    <p class="mr-1" style="float: left;">Thêm Danh Mục</p>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>Tên Danh Mục</th>
                    <th>Hành Động</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                     1
                    </td>
                    <td>Danh Mục 1</td>
                    <td>
                      <a href="#" class="text-muted">
                      <i class="bi bi-tools mr-3"></i>
                      </a>
                      <a href="#" class="text-muted">
                      <i class="bi bi-trash2-fill"></i>
                      </a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>         
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
</div>
<?php include ("../layout/footer.php");?>