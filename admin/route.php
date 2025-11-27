<?php 

$p=$_GET['p'];

switch($p){
    case 'hapus-mhs':
        require_once 'hapus-mahasiswa.php';
        break;
    case 'edit-mhs':
            require_once 'edit-mahasiswa.php';
            break;
    case 'detail-mhs':
        require_once 'detail-mahasiswa.php';
        break;
    case 'mahasiswa':
        require_once 'mahasiswa.php';
        break;

    case 'dosen':
        require_once 'dosen.php';
        break;
    case 'detail-dosen':
        require_once 'detail-dosen.php';
        break;
    case 'edit-dosen':
        require_once 'edit-dosen.php';
        break;
    case 'hapus-dosen':
        require_once 'hapus-dosen.php';
        break;

    case 'pegawai':
        require_once 'pegawai.php';
        break;
    case 'gantipw':
        require_once 'gantipw.php';
        break;

    case 'tambah-dosen':
        require_once 'tambah-dosen.php';
        break;
    case 'tambah-mahasiswa':
        require_once 'tambah-mahasiswa.php';
        break;


    default:
        require_once 'dashboard.php';
        break;
}
?>