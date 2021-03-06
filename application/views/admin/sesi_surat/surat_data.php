<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">List Pengajuan Surat</h1>
  <a href="<?php echo base_url()?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a>
  
</div>
<?php show_alert()?>
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
                        <a href="<?php echo base_url().'admin/aju_surat_pengantar_kk/'?>" class="btn btn-secondary" ><i class="fa fa-plus"></i>&nbsp;&nbsp;1. Surat Pengantar Kartu Keluarga (KK)</a>
                        </li>

                        <li>
                        <a href="<?php echo base_url().'admin/aju_surat_pengantar_ktp'?>" class="btn btn-secondary"><i class="fa fa-plus"></i>&nbsp;&nbsp;2. Surat Pengantar Kartu Tanda Penduduk (KTP) </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url().'user/mohon_akte_lahir'?>" class="btn btn-secondary"><i class="fa fa-plus"></i>&nbsp;&nbsp;3. Surat Pengantar Pembuatan Akte Lahir </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'user/mohon_akte_mati'?>" class="btn btn-secondary"><i class="fa fa-plus"></i>&nbsp;&nbsp;4. Surat Pengantar Pembuatan Akte Kematian </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url().'user/mohon_ket_pindah'?>" class="btn btn-secondary"><i class="fa fa-plus"></i>&nbsp;&nbsp;5. Surat Pengantar Pindah Penduduk </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url().'user/mohon_surat_miskin'?>" class="btn btn-secondary"><i class="fa fa-plus"></i>&nbsp;&nbsp;6. Surat Keterangan Kurang Mampu/Miskin </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url().'user/mohon_surat_ket_nikah'?>" class="btn btn-secondary"><i class="fa fa-plus"></i>&nbsp;&nbsp;7. Surat Keterangan Sudah Menikah </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url().'user/mohon_surat_belum_menikah'?>" class="btn btn-secondary"><i class="fa fa-plus"></i>&nbsp;&nbsp;8. Surat Keterangan Belum Menikah </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url().'user/mohon_surat_ket_cerai'?>" class="btn btn-secondary"><i class="fa fa-plus"></i>&nbsp;&nbsp;9. Surat Keterangan Bercerai</a>
                        </li>
                  
                        <?php $no=10;foreach($surat as $sr){?>
                            <li>
                            <a href="<?php echo base_url().'user/mohon_surat/'.$sr->id ?>" class="btn btn-secondary"><i class="fa fa-plus"></i>
                                <?php echo $no++?>.&nbsp;&nbsp;
                                <?php echo $sr->nama_surat ?>
                            </a>
                        </li>
                        <?php }?>   

                    </ul>

                    
                    </div>
                </div>
		    </div>



		</div>
</div>
