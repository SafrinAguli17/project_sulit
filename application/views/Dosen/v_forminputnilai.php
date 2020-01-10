<div class="right_col" role="main" style="min-height: 1164px;">
    <div class="">
        <div class="page-title">

        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>table mahasiswa</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content"> 
                    <table class="table table-hover table-striped" id="mydata">
    <thead>
      <tr>
        <th>No</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Judul</th>
        <th>nilai</th>
        <th>aksi</th>

      </tr>
    </thead>
    <tbody>
      <?php $i=1; ?>
      <?php 
        foreach($data->result_array() as $row):
           $npm=$row['nim'];
           $nama=$row['nama'];
          $judul=$row['judul_skripsi'];
          $nilai=$row['nilai1'];
      ?>
        
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $npm;?></td>
        <td><?php echo $nama;?></td>
        <td><?php echo $judul;?></td>
        <td><?php echo $nilai; ?></td>
        <td>
            <form>
               <button type="button" name="button" class="btn btn-primary"  data-toggle="modal" data-target="#modal_forminputnilai">Pilih</button>
        </td>
      </tr>
      <?php $i++ ?>
      <?php endforeach;?>
    </tbody>
    </table>
    
    
                   </div>
                </div>
            </div>
        </div>
    </div>


        </div> 
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
         <div id="modal_forminputnilai" class="modal fade bs-example-modal-lg show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <div class="modal-body">
          <?php foreach ($produks as $produk ) :?>

            <form action="<?php base_url('index.php/input_nilaiujian/update') ?>" method="post">
              <input type="hidden" name="nim" value="<?php echo $produk->nim?>" />
              <div class="form-group">
                <label for="nim">NIM</label>
                <input class="form-control <?php echo form_error('nim') ? 'is-invalid':'' ?>"
                 type="text" name="nim" placeholder="NIM" value="<?php echo $produk->nim ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('nim') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="nama">nama</label>
                <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                 type="text" name="nama" min="0" placeholder="nama" value="<?php echo $produk->nama ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('nama') ?>
                </div>
              </div>


              <div class="form-group">
                <label for="name">Judul Skripsi</label>
                <input class="form-control <?php echo form_error('judul_skripsi') ? 'is-invalid':'' ?>"
                 type="text" name="judul_skripsi" value="<?php echo $produk->judul_skripsi ?>"  />
                <div class="invalid-feedback">
                  <?php echo form_error('judul_skripsi') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="efektifitas pada pendahuluan">efektifitas pada pendahuluan *</label>
                <input class="form-control <?php echo form_error('nilai1') ? 'is-invalid':'' ?>"
                 type="number" name="nilai1" min="0" placeholder="nilai 1-100" value="<?php echo $produk->nilai1 ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('nilai1') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="metodologi dan konten teknis">metodologi dan konten teknis *</label>
                <input class="form-control <?php echo form_error('nilai2') ? 'is-invalid':'' ?>"
                 type="number" name="nilai2" min="0" placeholder="nilai 1-100" value="<?php echo $produk->nilai2 ?>"/>
                <div class="invalid-feedback">
                  <?php echo form_error('nilai2') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="sikap saat presentasi">sikap saat presentasi *</label>
                <input class="form-control <?php echo form_error('nilai3') ? 'is-invalid':'' ?>"
                 type="number" name="nilai3" min="0" placeholder="nilai 1-100" value="<?php echo $produk->nilai3 ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('nilai3') ?>
                </div>
              </div>
              
              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>
          <?php endforeach; ?>
          </div>
</div>

