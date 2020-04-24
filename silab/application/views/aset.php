<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
          <div class="navbar-right">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal"
    data-target="#tambah_aset"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>
    <button><?php echo form_open('masterdata/aset/search') ?>
    <input type="text" name="keyword" class="form-control" placeholder="search">
        <button type="submit" class="btn btn-success btn-sm">Cari</button>
        <?php echo form_close() ?></button></div>

    <table class="table table-bordered">
        <tr class="text-center">
            <th>LOKASI</th>
            <th>NAMA BARANG</th>
            <th>SPESIFIKASI</th>
            <th>JUMLAH</th>
            <th>SATUAN</th>
            <th>KETERANGAN</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php 
        
        foreach($silab as $slb) : ?>

            <tr>
                
                <td><?php echo $slb->id_lokasi ?></td>
                <td><?php echo $slb->nama_barang ?></td>
                <td><?php echo $slb->spesifikasi ?></td>
                <td><?php echo $slb->jumlah ?></td>   
                <td><?php echo $slb->satuan ?></td>
                <td><?php echo $slb->keterangan ?></td>
                <td class="text-center"><?php echo anchor('masterdata/aset/detail/' .$slb->kode_aset, 
                '<div class="btn btn-sm btn-success"><i class="fas fa fa-search-plus"></i></div>')?></td>
                <td class="text-center"><?php echo anchor('masterdata/aset/edit/' .$slb->kode_aset, 
                '<div class="btn btn-sm btn-primary"><i class="fas fa fa-edit"></i></div>')?></td>
                <td class="text-center" onclick="javascript: return confirm('Anda yakin hapus?')">
                <?php echo anchor('masterdata/aset/hapus/' .$slb->kode_aset, '<div class="btn btn-sm btn-danger">
                <i class="fas fa fa-trash"></i></div>') ?></td>

                  
            </tr>

        <?php endforeach; ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_aset" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT ASET</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <?php echo form_open_multipart('masterdata/aset/tambah_aksi'); ?>

        <div class="form-group">
            <label>Lokasi</label>
            <input type="text" name="id_lokasi" class="form-control">
        </div>

        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control">
        </div>

        <div class="form-group">
            <label>Spesifikasi</label>
            <input type="text" name="spesifikasi" class="form-control">
        </div>

        <div class="form-group">
            <label>Jumlah</label>
            <input type="text" name="jumlah" class="form-control">
        </div>

        <div class="form-group">
            <label>Satuan</label>
            <input type="text" name="satuan" class="form-control">
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <select class="form-control" name="keterangan">
              <option>Baik</option>
              <option>Buruk</option>
            </select>
        </div>

        <div class="form-group">
            <label>Foto</label><br>
            <input type="file" name="foto" class="form-control">
        </div> 
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      <?php echo form_close(); ?>
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
  
