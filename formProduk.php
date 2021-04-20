<?php
require_once 'models/Produk.php';
$ar_kondisi = ['Baru','Second'];
$obj = new Produk();
$rs = $obj->dataJenis();
?>

<h3>Form Produk</h3>
<form method="POST" action="controllers/produkController.php">
  <div class="form-group row">
    <label for="kode" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="kode" name="kode" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Kondisi</label> 
    <div class="col-8">
    <?php
    $no = 0;
    foreach($ar_kondisi as $kondisi){
    ?>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="kondisi" id="kondisi_<?= $no ?>" type="radio" class="custom-control-input" value="<?= $kondisi?>" required="required"> 
        <label for="kondisi_<?= $no ?>" class="custom-control-label"><?= $kondisi?></label>
      </div>
    <?php 
    $no++;
    } ?>
    </div>
  </div>
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <input id="harga" name="harga" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="stok" name="stok" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="jenis" name="jenis" class="custom-select" required="required">
        <option value="">-- Pilih Jenis --</option>
        <?php
        foreach($rs as $j){
        ?>
            <option value="<?= $j['id'] ?>"> <?= $j['nama'] ?> </option>
        <?php } ?>    
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="foto" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="foto" name="foto" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" value="simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>