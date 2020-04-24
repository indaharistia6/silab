<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">

    <h3><i class="fas fa-edit"></i>EDIT ASET</h3>

    <?php foreach($silab as $silab) : ?>

        <form method="post" action="<?php echo base_url().'masterdata/aset/update' ?>">
            <div class="for-group">
                <label>Lokasi</label>
                <input type="text" name="id_lokasi" class="form-control"
                value="<?php echo $silab->id_lokasi ?>">
            </div>

            <div class="for-group">
                <label>Nama Barang</label>
                <input type="hidden" name="kode_aset" class="form-control"
                value="<?php echo $silab->kode_aset ?>">
                <input type="text" name="nama_barang" class="form-control"
                value="<?php echo $silab->nama_barang ?>">
            </div>

            <div class="for-group">
                <label>Spesifikasi</label>
                <input type="text" name="spesifikasi" class="form-control"
                value="<?php echo $silab->spesifikasi ?>">
            </div>   

            <div class="for-group">
                <label>Jumlah</label>
                <input type="text" name="jumlah" class="form-control"
                value="<?php echo $silab->jumlah ?>">
            </div>    

            <div class="for-group">
                <label>Satuan</label>
                <input type="text" name="satuan" class="form-control"
                value="<?php echo $silab->satuan ?>">
            </div>    

            <div class="for-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control"
                value="<?php echo $silab->keterangan ?>">
            </div>   

            <div class="for-group">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control"
                value="<?php echo $silab->foto ?>">
            </div>    

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>  
        </form>

    <?php endforeach; ?>

</div>
<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <!-- /.content -->
  </div>  
  <!-- /.content-wrapper -->
  