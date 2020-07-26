<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Surat Baru</h1>
</div>
<?php show_alert(); ?>

		<!-- Content Row -->
	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">Tambah</h6>
				</div>
				<div class="card-body">
				<?php echo form_open_multipart('admin/tambah_surat_update');?>	
			<div class="table-responsive">
				<table class="table">
					<?php foreach($surat as $ds){?>
						<input type="text" name="id" value="<?php echo $ds->id ?>" hidden>
					<tr>
						<th>Nama Surat</th>			
						<td><input type="text" name="nama" class="form-control" value="<?php echo $ds->nama_surat ?>" required></td>
					</tr>
					<tr>
						<th>Kode Surat</th>			
						<td><input type="text" name="kode" class="form-control" value="<?php echo $ds->kode_surat ?>" placeholder="isi sesuai kode surat atau singkatan nama surat" required></td>

					</tr>

					<tr>
						<th>Persyaratan surat</th>			
						<td><textarea id="editor2" name="syarat" class="form-control" ><?php echo $ds->syarat_surat ?></textarea></td>
					</tr>

					<tr>
						<th>Format Cetak Surat</th>			
						<td><textarea id="editor1" name="format" class="form-control" style="min-height:500px" ><?php echo $ds->format_surat ?></textarea></td>
					</tr>
				
					<tr>
						<th>
							<button type="submit" class="btn btn-primary"> Update</button>
						</th>
						<td></td>			
					</tr>

				<?php } ?>	
				</table>
			</div>			
		</form>	
				</div>
			</div>
		</div>

	</div>


		<!-- Content Row -->
		
</div>
