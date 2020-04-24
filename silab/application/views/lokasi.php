<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal"data-target="#tambah_lokasi"><i class="fas fa-plus fa-sm"></i> Tambah Lokasi</button>
    <button><?php echo form_open('masterdata/lokasi/search') ?>
    <input type="text" name="keyword" class="form-control" placeholder="search">
        <button type="submit" class="btn btn-success btn-sm">Cari</button>
        <?php echo form_close() ?></button>
    <table class="table table-bordered">
        <tr class="text-center">
            
            <th>PRODI</th>
            <th>NAMA LAB</th>
            <th colspan="2">AKSI</th>
        </tr>

        <?php 
        
        foreach($silab as $silab) : ?>

            <tr>
                
                <td><?php echo $silab->id_lokasi ?></td>
                <td><?php echo $silab->nama_lab ?></td>
                <td class="text-center"><?php echo anchor('masterdata/lokasi/edit/' .$silab->id_lokasi, 
                '<div class="btn btn-sm btn-primary"><i class="fas fa fa-edit"></i></div>')?></td>
                <td class="text-center" onclick="javascript: return confirm('Anda yakin hapus?')">
                <?php echo anchor('masterdata/lokasi/hapus/' .$silab->id_lokasi, 
                '<div class="btn btn-sm btn-danger"><i class="fas fa fa-trash"></i></div>') ?></td>

                  
                  
            </tr>

        <?php endforeach; ?>

    </table>

</div>

<!-- Modal -->
<div class="modal fade" id="tambah_lokasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT LOKASI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'masterdata/lokasi/tambah_aksi'; ?>"
        method="post" enctype="multipart/form-data" >

        <div class="form-group">
            <label>Prodi</label>
            <input type="text" name="id_prodi" class="form-control">
        </div>

        <div class="form-group">
            <label>Nama Lab</label>
            <input type="text" name="nama_lab" class="form-control">
        </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
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
  
