<?php
require_once "../config.php";
$keyword=$_POST['keyword'];
$category=$_POST['category'];
$cari=$_POST['cari'];

if($_POST['cari']){
  if($category=="prodi"){
    if($keyword=="INF"){
      $keyword=1;
    }elseif($keyword=="ARS"){
      $keyword=2;
    }elseif($keyword=="ILK"){
      $keyword=3;
    }
    $sql="select * from mhs where $category like '%$prodi%'";
  }else{
    $sql="select * from mhs where $category like '%$keyword%'";
  }
}else{
  $sql="select * from mhs";
}
$data=$db->query($sql);
?>
<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-sm-6"><h3 class="mb-0">Dashboard mahasiswa</h3></div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard Mahasiswa</li>
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
                    <h3 class="card-title">Dashboard Admin</h3>
              
                      
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
<table>
  <tr><td>
    <a href="?p=tambah-mahasiswa" class="btn btn-success" style="width: 150px;">Tambah Data</a>
  </td><td width="50"></td><td>
  <form method="post" action="#">
    <input type='text' name='keyword' placeholder='masukkan kata kunci' value='<?= $keyword?>'>
    <select name="category">
      <option value="nim" <?php if($category=="nim") echo"selected";?>>NIM</option>
      <option value="nama" <?php if($category=="nama") echo"selected";?>>Nama</option>
      <option value="gender" <?php if($category=="gender") echo"selected";?>>Jenis Kelamin</option>
      <option value="prodi" <?php if($category=="prodi") echo"selected";?>>Prodi</option>
    </select>
    <input type='submit' name='cari' value='Search' class='btn btn-default'>
  </form>
  </td></tr>
</table>

<?php if($cari): ?>
                <?php if($jumlah > 0): ?>
                  <p style="margin-top:10px; color:green;">
                    <i>Ditemukan <b><?=$jumlah?></b> data dengan kata kunci <b><?=$keyword?></b> pada kategori <b><?=$category?></b>.</i>
                  </p>
                <?php else: ?>
                  <p style="margin-top:10px; color:red;">
                    <i>Tidak ditemukan data dengan kata kunci <b><?=$keyword?></b> pada kategori <b><?=$category?></b>.</i>
                  </p>
                <?php endif; ?>
              <?php endif; ?>

                    <table class="table table-striped table-hover">
                      <thead>
                        <tr><th>No</th><th>NIM</th><th>Nama</th><th>Gender</th><th>Prodi</th><th>Opsi</th></tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($data as $d) {
                          $no++;

                          if ($d ['prodi']==1){
                            $prodi = "INF";
                        }elseif ($d ['prodi']==2){
                          $prodi = "ARS";
                        }elseif ($d ['prodi']==3){
                          $prodi = "ILK";
                        }else{
                          $prodi = "Tidak diketahui";
                        }
                        echo"<tr><td>$no</td><td>$d[nim]</td><td>$d[nama]</td><td>$d[gender]</td><td>$prodi</td>
                        <td>
                        <a href='./?p=detail-mhs&id=$d[id]' class='btn btn-x5 btn-primary'>Detail</a>
                        <a href='./?p=edit-mhs&id=$d[id]' class='btn btn-x5 btn-warning'>Edit</a>
                        <a href='./?p=hapus-mhs&id=$d[id]' class='btn btn-x5 btn-danger'>Delete</a>
                        </td>
                        </tr>";
                      }
                        ?>
                      </tbody>
                    </table>
                    <!--begin::Row-->
                    <div class="row">
                      <!--begin::Col-->
                      <div class="col-md-3">
                       
                        <h1>WELCOME</h1>
                         
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>