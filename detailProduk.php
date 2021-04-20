<?php
require_once 'models/Produk.php';
//tangkap request id di url
$id = $_REQUEST['id'];
$obj = new Produk();
$rs = $obj->getProduk($id);
//print_r($rs); exit();
?>
<div class="card" style="width: 18rem;">
  <?php
  $gambar = (!empty($rs['foto'])) ? $rs['foto'] : "no_image.jpg";
  ?>
  <img src="images/<?= $gambar ?>" width="40%" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title"><?= $rs['nama'] ?></h5>
    <p class="card-text">
        Kode : <?= $rs['kode'] ?>
        <br/>Kondisi : <?= $rs['kondisi'] ?>
        <br/>Harga : RP. <?= number_format($rs['harga'],0,',','.') ?>
        <br/>Stok : <?= $rs['stok'] ?>
        <br/>Kategori : <?= $rs['kategori'] ?>
    </p>
    <a href="index.php?hal=dataProduk" class="btn btn-primary">Go Back</a>
  </div>
</div>