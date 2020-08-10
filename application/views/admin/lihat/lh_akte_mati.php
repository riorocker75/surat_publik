<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Lihat Surat Mohon Keterangan Meninggal Dunia</h1>
  <!-- <a href="<?php echo base_url().'user/arsip_surat/'?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a> -->
  
</div>

		<!-- Content Row -->
		<div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <form>
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pengaju</h6>
                        
                    </div>
                    <div class="card-body">
                        <?php foreach($akte_mati as $kh){?> 

                        <?php
                            
                            $where=array('id' => $kh->penduduk_id);
                            $nama_mati = array('id'=>$kh->nama_mati);

                            $yang_mati=$this->m_dah->edit_data($nama_mati,'penduduk')->result();
                            foreach($yang_mati as $ym){}
                           
                            $hari=date('D', strtotime($kh->tgl_mati));
                            $data_diri=$this->m_dah->edit_data($where, 'penduduk')->result();
                            foreach($data_diri as $dr){}
                        ?>   
                         <div class="row">
                                <!-- data diri -->
                                <div class="col-lg-6 col-md-12 col-12">

                                <!-- start data anak -->
                                <div class="syarat">
                                        <div class="title-syarat">
                                            Data diri yang meninggal dunia
                                        </div>

                                        <div class="form-group">
                                            <label for="">Nama</label>
                             
                                            <input type="text" class="form-control form-control-user" value="<?php echo $ym->nama?>" disabled>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="">NIK </label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $ym->nik?>" disabled>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="">Tempat / Tgl. Lahir</label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $ym->tempat_lahir?> / <?php echo date('d-m-Y', strtotime($ym->tgl_lahir))?>" disabled>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jenis Kelamin</label>
                                            <input type="text" class="form-control form-control-user" value="<?php  echo $this->m_dah->jenis_kelamin($ym->jenis_kelamin)?>" disabled>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="">Agama</label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $ym->agama?>" disabled>
                                            
                                        </div>


                                        <div class="form-group">
                                            <label for="">Hari / Tanggal Meninggal</label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $this->m_dah->format_hari($hari)?>, <?php echo $this->m_dah->format_tanggal(date('Y-m-d',strtotime($kh->tgl_mati)))?>" disabled>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jam Meninggal </label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo date('H:i', strtotime($kh->tgl_mati))?>" disabled>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="">Penyebab Meninggal</label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $kh->sebab_mati?>" disabled>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="">Tempat Meninggal</label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $kh->tempat_mati?>" disabled>
                                            
                                        </div>
                                        
                                  </div>      
                                <!-- end data anak -->
                                  

                                    <!-- data ayah -->

                                    <div class="syarat">
                                        <div class="title-syarat">
                                            Data Pelapor
                                        </div>

                                        <div class="form-group">
                                                    <label for="">Nama</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dr->nama?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">NIK</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dr->nik?>" disabled>
                                                   
                                                </div>
                                               
                                                <div class="form-group">
                                                    <label for="">Hubungan dengan Alm/Almh</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $kh->hub_pelapor?>" disabled>
                                                   
                                                </div>
        
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
                                                <label for="">Surat keterangan dari rumah sakit bagi yang meninggal di Rumah Sakit</label><br>
                                                <?php echo $this->m_dah->preview_file($kh->sk_rs)?>   
                                            </div>    
                                            <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            
   
                                            <div class="form-group">
                                                <label for="">Fotocopy KTP bagi yang sudah memiliki</label><br>
                                                <?php echo $this->m_dah->preview_file($kh->foto_kopi_ktp)?>   
                                            </div>    
                                            <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            
                                 
                                            <div class="form-group">
                                                <label for="">Fotocopy KK</label><br>
                                                <?php echo $this->m_dah->preview_file($kh->foto_kopi_kk)?>   
                                            </div>
                                            
                     
                                              
                                    </div>
                                    
                                          <!-- keterangan start -->
                                 <?php if($kh->status_surat == "review"){?>

                                <?php }else{?>
                                    <div class="syarat">
                                        <div class="title-syarat">
                                           Keterangan
                                        </div>
                                        <?php if($kh->status_surat =="diterima"){?>
                                             <div class="form-group">
                                                <label for="">Nomor Surat</label>
                                                <input type="text" class="form-control form-control-user" value="<?php echo $kh->nomor_surat?>" disabled>
                                            </div>
                                         <?php } ?> 
                                          <?php
                                         $where=array(
                                                'surat_mohon_id' => $kh->surat_mohon_id
                                            );
                                         
                                         $srm=$this->m_dah->edit_data($where,'surat_mohon')->result();
                                         foreach ($srm as $sr) {}
                                         ?>
                                           <div class="form-group">
                                                <label for="">Pemberitahuan</label>
                                                <textarea type="text" class="form-control form-control-user" disabled=""><?php echo $sr->syarat ?></textarea> 
                                            </div>

                                     </div>   
                                 <?php } ?>

                                </div> 

                                <!-- end syarat -->
                               

                         </div>  
                         <?php }?>   

                     
                </div>
                
                </form>
		    </div>
		</div>
</div>
