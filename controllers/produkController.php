<?php
require_once '../koneksi.php';
require_once '../models/Produk.php';
//1.tangkap request element form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$kondisi = $_POST['kondisi'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$idjenis = $_POST['jenis'];
$foto = $_POST['foto'];
$tombol = $_POST['proses'];
//2.menyimpan data2 di atas sebuah array
$data = [
    $kode, //? 1
    $nama, //? 2
    $kondisi, //? 3
    $harga, //? 4
    $stok, //? 5
    $idjenis, //?6
    $foto //? 7
];
//3.proses
$obj = new Produk();
switch ($tombol) {
    case 'simpan':
        $obj->simpan($data);
    break;
    case 'ubah':
        $data[] = $_POST['idx'];//tangkap hidden field u/ ? ke-8
        $obj->ubah($data);
    break;
    case 'hapus':
        $id[] = $_POST['idx'];//tangkap hidden field u/ ? ke-1
        $obj->hapus($id);
    break;
    default://tombol batal
        header('Location:http://localhost:8080/appku/index.php?hal=dataProduk');
        break;
}

//4.landing page
header('Location:http://localhost:8080/appku/index.php?hal=dataProduk');