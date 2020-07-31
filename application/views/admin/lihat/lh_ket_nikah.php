<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Lihat Surat Mohon Keterangan Sudah Menikah</h1>
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
                        <?php foreach($ket_nikah as $kh){?>    
                         <div class="row">
                                <!-- data diri -->
                                <div class="col-lg-6 col-md-12 col-12">

                                    <div class="syarat">
                                        <div class="title-syarat">
                                            Data Diri Suami
                                        </div> 

                                           <?php 
                                           $where_suami=array('id' => $kh->suami_id);
                                           $where_istri=array('id' => $kh->istri_id);

                                            $data_suami=$this->m_dah->edit_data($where_suami, 'penduduk')->result();
                                            $data_istri=$this->m_dah->edit_data($where_istri, 'penduduk')->result();
                                            foreach ($data_istri as $di){}
                                            foreach($data_suami as $dd ){
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
                                                    Data Diri Istri
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

                                                  <!--  <div class="form-group">
                                                    <label for="">Alamat</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $di->alamat?>" disabled>
                                                   
                                                </div>-->

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
                                                            <label style="font-weight: 800">Fotocopy KTP Suami</label><br>
                                                            <?php echo $this->m_dah->preview_file($kh->ktp_suami)?>   
                                                        </div>

                                                         <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            
                                                        <div class="form-group">
                                                            <label style="font-weight: 800">Fotocopy KTP Istri</label><br>
                                                            <?php echo $this->m_dah->preview_file($kh->ktp_istri)?>   
                                                        </div>

                                                        <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            
                                                        <div class="form-group">
                                                            <label style="font-weight: 800">Fotocopy Buku Nikah</label><br>
                                                            <?php echo $this->m_dah->preview_file($kh->buku_nikah)?>   
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
