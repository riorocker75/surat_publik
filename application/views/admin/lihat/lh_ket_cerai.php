<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Lihat Surat Mohon Keterangan Bercerai</h1>
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
                        <?php foreach($ket_cerai as $kh){?>    
                         <div class="row">
                                <!-- data diri -->
                                <div class="col-lg-6 col-md-12 col-12">

                                    <div class="syarat">
                                        <div class="title-syarat">
                                            Data Diri Pihak Pertama
                                        </div> 

                                           <?php 
                                           $where_pertama=array('id' => $kh->pertama_id);
                                           $where_kedua=array('id' => $kh->kedua_id);

                                            $data_pertama=$this->m_dah->edit_data($where_pertama, 'penduduk')->result();
                                            $data_kedua=$this->m_dah->edit_data($where_kedua, 'penduduk')->result();
                                            foreach ($data_kedua as $di){}
                                            foreach($data_pertama as $dd ){
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

                                              
                                            <?php }?>   

                                            <!-- end data suami -->

                                    </div>  

                                    <div class="syarat">
                                                <div class="title-syarat">
                                                    Data Diri Pihak Kedua
                                                </div> 

                                                <div class="form-group">
                                                    <label for="">Nama</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $di->nama?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">NIK</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $di->nik?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Tempat & tanggal lahir</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $di->tempat_lahir?> / <?php $tgl=date('d-m-Y', strtotime($di->tgl_lahir)); echo $tgl?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Jenis Kelamin</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $di->jenis_kelamin?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Agama</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $di->agama?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Pekerjaan</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $di->pekerjaan?>" disabled>
                                                   
                                                </div>

                                                <!-- <div class="form-group">
                                                    <label for="">Alamat</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $di->alamat?>" disabled> 
                                                   
                                                </div> -->

                                             </div>
                                            <!-- end data istri  -->

   

                                 </div>  
                                <!-- end data diri -->

                                <!-- persyaratan -->
                                <div class="col-lg-6 col-md-12 col-12">
                                <div class="syarat">
                                            <div class="title-syarat">
                                                File Persyaratan 
                                            </div>  
                                                    <div class="form-group">
                                                        <label style="font-weight: 800">Fotocopy Kartu Keluarga</label><br>
                                                        <?php echo $this->m_dah->preview_file($kh->foto_kopi_kk)?>   
                                                    </div>

                                                    <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            
                                                        <div class="form-group">
                                                            <label style="font-weight: 800">Fotocopy KTP Laki-Laki</label><br>
                                                            <?php echo $this->m_dah->preview_file($kh->ktp_suami)?>   
                                                        </div>

                                                         <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            
                                                        <div class="form-group">
                                                            <label style="font-weight: 800">Fotocopy KTP Perempuan</label><br>
                                                            <?php echo $this->m_dah->preview_file($kh->ktp_istri)?>   
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
