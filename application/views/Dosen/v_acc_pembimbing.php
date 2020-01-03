<div class="right_col" role="main" style="min-height: 1164px;">
    <div class="">
        <div class="page-title">



        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>List Proposal Disetujui</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">                    
                    
	<table class="table table-hover table-striped" id="mydata">
		<thead>
			<tr>
				<th>NPM</th>
				<th>Nama</th>
				<th>Tgl Disetujui</th>
				<th>Judul</th>
                <th></th>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($data->result_array() as $i):
					$npm=$i['NPM'];
					$nama=$i['Nama'];
					$tgl=$i['Tgl_Disetujui'];
					$judul=$i['Judul'];
			?>
			<tr>
				<td><?php echo $npm;?></td>
				<td><?php echo $nama;?></td>
				<td><?php echo $tgl;?></td>
				<td><?php echo $judul;?></td>
                <td>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Aksi
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form class="form-horizontal form-label-left" method="post" action="<?= base_url(''); ?>">

<div class="item form-group">
	<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">NIM </label>
	<div class="col-md-6 col-sm-6 ">
		<!-- <input type="text" id="first-name" required="required" class="form-control "> -->
		<input type="text" class="form-control" id="nim" name="nim" placeholder="NIM MAHASISWA">
	</div>
</div>
<div class="item form-group">
	<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NAMA LENGKAP </label>
	<div class="col-md-6 col-sm-6 ">
		<input type="text" id="nama" name="nama" class="form-control">
		<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
	</div>
</div>
<div class="item form-group">
	<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">EMAIL AKTIF</label>
	<div class="col-md-6 col-sm-6 ">
		<input id="email_1" name="email_1" class="form-control" type="email">
		<?= form_error('email_1', '<small class="text-danger pl-3">', '</small>') ?>
	</div>
</div>
<div class="item form-group">
	<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NO HP/TELEPHONE </label>
	<div class="col-md-6 col-sm-6 ">
		<input type="text" id="hp" name="hp" class="form-control">
		<?= form_error('hp', '<small class="text-danger pl-3">', '</small>') ?>
	</div>
</div>
<div class="item form-group">
	<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">JUDUL SKRIPSI </label>
	<div class="col-md-6 col-sm-6 ">
		<!-- <input type="text" id="judul" name="judul" required="required" class="form-control"> -->
		<textarea class="form-control" id="judul" name="judul" rows="3" placeholder="Tulis Judul Skripsi Disini"></textarea>
		<?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
	</div>
</div>
<div class="item form-group">
	<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">DRAFT PROPOSAL SKRIPSI</label>
	<div class="col-md-6 col-sm-6 ">
		<input type="radio" name="pilih" id="1">Setuju
		<input type="radio" name="pilih" id="0">Tidak
	</div>
</div>
<div class="ln_solid"></div>
<div class="item form-group">
	<div class="col-md-6 col-sm-6 offset-md-3">
	<button type="reset" class="btn btn-secondary">Reset</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
	</div>
</div>
</form>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>
                </td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
	
</div>


