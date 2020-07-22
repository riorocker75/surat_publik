<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Surat Pengantar Kartu Keluarga (KK)</h1>
  <a href="<?php echo base_url().'admin/sesi_surat/'?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a>
  
</div>

		<!-- Content Row -->
		<div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Pilih Pengajuan Surat</h6>
                    </div>
                    <div class="card-body list_surat">
                    <ul style="list-style:none;margin:0;padding-left:0">
                    
                        <li>
                        <a href="<?php echo base_url().'user/mohon_kk_baru/'?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Buat Baru Kartu Keluarga (KK)</a>
                        </li>

                        <li>
                        <a href="<?php echo base_url().'user/mohon_kk_tambah/'?>" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp;Penambahan Anggota Keluarga Pada Kartu Keluarga (KK)</a>
                        </li>

                        <li>
                        <a href="<?php echo base_url().'user/mohon_kk_kurang/'?>" class="btn btn-danger"><i class="fa fa-plus"></i>&nbsp;&nbsp;Pengurangan Anggota Keluarga Pada Kartu Keluarga (KK)</a>
                        </li>
                    </ul> 
                    </div>
                </div>
		    </div>
		</div>
</div>
