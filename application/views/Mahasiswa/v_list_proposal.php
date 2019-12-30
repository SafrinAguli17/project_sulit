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


