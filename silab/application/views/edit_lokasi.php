<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">

    <h3><i class="fas fa-edit"></i>EDIT LOKASI</h3>

    <?php foreach($silab as $silab) : ?>

        <form method="post" action="<?php echo base_url().'masterdata/lokasi/update' ?>">
            <div class="for-group">
                <label>Prodi</label>
                <input type="text" name="id_prodi" class="form-control"
                value="<?php echo $silab->id_prodi ?>">
            </div>

            <div class="for-group">
                <label>Nama Lab</label>
                <input type="hidden" name="id_lokasi" class="form-control"
                value="<?php echo $silab->id_lokasi ?>">
                <input type="text" name="nama_lab" class="form-control"
                value="<?php echo $silab->nama_lab ?>">
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
  