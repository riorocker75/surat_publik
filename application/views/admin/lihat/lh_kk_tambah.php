<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Lihat Surat Mohon Penambahan Anggota Kartu Keluarga</h1>
  <a href="<?php echo base_url().'user/arsip_surat/'?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a>
  
</div>

		<!-- Content Row -->
		<div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <form >
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pengaju</h6>
                        
                    </div>
                    <div class="card-body">
                        <?php foreach($kk_tambah as $kh){?>    
                         <div class="row">
                                <!-- data diri -->
                                <div class="col-lg-6 col-md-12 col-12">


                                    <div class="syarat">
                                        <div class="title-syarat">
                                            Data Keluarga
                                        </div> 

                                        <div class="form-group">
                                            <label for="">Nama Kepala Keluarga</label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $kh->kpl_keluarga ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Nomor KK</label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $kh->no_kk ?>" disabled>
                                        </div>
                                    </div>
                                    <!-- end data orang tua -->
                                    <div class="syarat">
                                        <div class="title-syarat">
                                            Data Diri Yang Ditambahkan ke KK
                                        </div> 

                                           <?php 
                                           $where_user=array('id' => $kh->anggota_id);
                                            $data_diri=$this->m_dah->edit_data($where_user, 'penduduk')->result();
                                            foreach($data_diri as $dd ){
                                            ?>
                                                <div class="form-group">
                                                    <label for="">Nama</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dd->nama?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">NIK</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dd->nik?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Nomor KK</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dd->nomor_kk?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Tempat & tanggal lahir</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dd->tempat_lahir?> / <?php $tgl=date('d-m-Y', strtotime($dd->tgl_lahir)); echo $tgl?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Jenis Kelamin</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dd->jenis_kelamin?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Agama</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dd->agama?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Pekerjaan</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dd->pekerjaan?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Status Perkawinan</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dd->status_nikah?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Status Hub. Keluarga</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dd->status_hub_keluarga?>" disabled>
                                                   
                                                </div>

                                              
                                            <?php }?>   

                                    </div>  

   

                                 </div>  
                                <!-- end data diri -->

                                <!-- persyaratan -->
                                <div class="col-lg-6 col-md-12 col-12">
                                <div class="syarat">
                                            <div class="title-syarat">
                                                File Persyaratan 
                                            </div>  
                         
                                                     <div class="form-group">
                                                            <label style="font-weight:800">KK Lama Aslis</label><br>
                                                            <?php echo $this->m_dah->preview_file($kh->foto_kopi_kk)?>   
                                                        </div>
                                                    <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Fotocopy akta kelahiran (khusus anggota yang ditambah)</label><br>
                                                        <?php echo $this->m_dah->preview_file($kh->foto_kopi_lahir)?>   
                                                    </div>

                                    </div>

                                </div> 

                                <!-- end syarat -->
                                <!-- start komentar -->
                                <div class="col-lg-6 col-md-12 col-12">
                                                 
                                </div>
                                  <!-- end komentar-->

                         </div>  
                         <?php }?>   

                     
                </div>
                
                </form>
		    </div>
		</div>
</div>
