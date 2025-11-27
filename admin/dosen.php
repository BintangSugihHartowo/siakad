<?php 
require_once "../config.php";
$data=$db->query("select * from dsn");
?>
<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-sm-6"><h3 class="mb-0">Dashboard Dosen</h3></div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard Dosen</li>
                </ol>
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-12">
                <!--begin::Card-->
                <div class="card">
                  <!--begin::Card Header-->
                  <div class="card-header">
                    <!--begin::Card Title-->
                    <h3 class="card-title">Dashboard Dosen</h3><br>
                    <a href="./?p=tambah-dosen" class="btn btn-success">Tambah</a>
                    <!--end::Card Title-->
                    <!--begin::Card Toolbar-->
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                      </button>
                      <button
                        type="button"
                        class="btn btn-tool"
                        data-lte-toggle="card-remove"
                        title="Remove"
                      >
                        <i class="bi bi-x-lg"></i>
                      </button>
                    </div>
                    <!--end::Card Toolbar-->
                  </div>
                  <!--end::Card Header-->
                  <!--begin::Card Body-->
                  <div class="card-body">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr><th>No</th><th>NIDN</th><th>Nama</th><th>Gender</th><th>Mata Kuliah</th><th>Opsi</th></tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($data as $d) {
                          $no++;

                          if ($d ['matkul']==1){
                            $matkul = "INF";
                        }elseif ($d ['matkul']==2){
                          $matkul = "ARS";
                        }elseif ($d ['matkul']==3){
                          $matkul = "ILK";
                        }else{
                          $matkul = "Tidak diketahui";
                        }
                        echo"<tr><td>$no</td><td>$d[nidn]</td><td>$d[nama]</td><td>$d[gender]</td><td>$matkul</td>
                        <td>
                        <a href='./?p=detail-dosen&id=$d[id]' class='btn btn-x5 btn-primary'>Detail</a>
                        <a href='./?p=edit-dosen&id=$d[id]' class='btn btn-x5 btn-warning'>Edit</a>
                        <a href='./?p=hapus-dosen&id=$d[id]' class='btn btn-x5 btn-danger'>Delete</a>
                        </td>
                        </tr>";
                      }
                        ?>
                      </tbody>
                    </table>
                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-md-6">
                       
                       
                         
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>