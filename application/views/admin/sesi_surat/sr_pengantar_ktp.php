<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Surat Pengantar KTP</h1>
  <a href="<?php echo base_url().'admin/sesi_surat'?>" class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a>
  
</div>

		<!-- Content Row -->
		<div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Pilihan Surat</h6>
                    </div>
                    <div class="card-body list_surat">
                    <ul style="list-style:none;margin:0;padding-left:0">
                    
                        <li>
                        <a href="<?php echo base_url().'user/mohon_ktp_baru/'?>" class="btn btn-secondary" > <i class="fa fa-plus"></i>&nbsp;&nbsp;1. Buat Baru Kartu Tanda Penduduk (KTP)</a>
                        </li>
                        <li>
                        <a href="<?php echo base_url().'user/mohon_ktp_hilang/'?>" class="btn btn-secondary" > <i class="fa fa-plus"></i>&nbsp;&nbsp;2. Kehilangan Kartu Tanda Penduduk (KTP)</a>
                        </li>
                    </ul> 
                    </div>
                </div>
		    </div>
		</div>
</div>
