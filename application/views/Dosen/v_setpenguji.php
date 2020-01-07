<div class="right_col" role="main" style="min-height: 1164px;">
    <div class="">
        <div class="page-title">



        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Set Penguji</h2>

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
                <th>aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1; ?>
			<?php 
				foreach($data->result_array() as $row):
					 $npm=$row['NPM'];
					 $nama=$row['Nama_mahasiswa'];
					$judul=$row['judul_skripsi'];
			?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $npm;?></td>
				<td><?php echo $nama;?></td>
				<td><?php echo $judul;?></td>
                <td>
                	<form>
                	 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Pilih</button>
                	
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

<div class="container">
	
</div>
				<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg">
			<!-- konten modal-->
						<div class="modal-content">
				<!-- heading modal -->
					<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Form set penguji</h4>
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
					

				</div>
				<!-- body modal -->
				<div class="modal-body">
					<?php 
				foreach($pilih->result_array() as $data):
					 $npm=$row['NPM'];
					 $nama=$row['Nama_mahasiswa'];
					$judul=$row['judul_skripsi'];
			?>
								<?php endforeach;?>	
					<form>
						<div class="form-group">
							<label for="NPM"><h2>NPM : <?= $row["NPM"];?></h2></label>			
						</div>
						<div class="form-group">
							<label for="NPM"><h2>Nama : <?= $row["Nama_mahasiswa"];?></h2></label>
						</div>
						<div class="form-group">
							<label for="NPM"><h2>Judul : <?= $row["judul_skripsi"];?></h2></label>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="Penguji 1"><h2>Penguji 1</h2> </label>		<input  type="text" class="input btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="id">
                    			</input>
                    <div class="dropdown-menu">
                      <option class="dropdown-item" id="1"><?php echo $data['nama_dosen']; ?></option>
                      <option class="dropdown-item" id="2"><?php echo $data['nama_dosen']; ?></option>
                      <option class="dropdown-item" id=3><?php echo $data['nama_dosen']; ?></option>

                     
                    </div>
                  </div>
				</div>
					   
					 		<div class="form-group">
							<label class="control-label col-sm-2" for="Penguji 1"><h2>Penguji 2</h2> </label>
								<div class="input-group-inline">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      Default
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
				</div>
							<div class="form-group">
							<label class="control-label col-sm-2" for="Penguji 1"><h2>Penguji 3</h2> </label>
								<div class="input-group-inline">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      Default
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
				</div>
					</form>
						<div class="form-group">
							<label class="control-label col-sm-2" for="Tanggal">Tanggal </label>
								<input type="date" class="form-control">						
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="nama">Jam</label>
								<input type="time" class="form-control">						
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="nama">Tempat </label>
								<input type="text" class="form-control">						
						</div>
					</form>	
			
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	



