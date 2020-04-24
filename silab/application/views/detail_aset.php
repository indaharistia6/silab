<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
    <div class="card">
    <h5 class="card-header">Detail Produk</h5>
    <div class="card-body">

        <?php foreach($silab as $silab): ?>
        <div class="row">
            <div class="col-md-4">
                    <img src="<?php echo base_url().'/assets/foto/'.$silab->foto ?>" class="card-img-top">
                    </div>
            <div class="col-md-8">
                    <table>
                        <tr>
                            <td>Lokasi</td>
                            <td><strong><?php echo $silab->id_lokasi ?></strong></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td>
                            <td><strong><?php echo $silab->nama_barang ?></strong></td>
                        </tr>
                        <tr>
                            <td>Spesifikasi</td>
                            <td><strong><?php echo $silab->spesifikasi ?></strong></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td><strong><?php echo $silab->jumlah ?></strong></td>
                        </tr>
                        <tr>
                            <td>Satuan</td>
                            <td><strong><?php echo $silab->satuan ?></strong></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $silab->keterangan ?></strong></td>
                        </tr>
                    </table>

                    <?php echo anchor('masterdata/aset/index','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
            </div>
        </div>

        <?php endforeach; ?>
       </div>
    </div>
</div>

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
  