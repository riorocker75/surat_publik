<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Lihat Surat Mohon Pindah Penduduk</h1>
  <!-- <a href="<?php echo base_url().'user/arsip_surat/'?>" class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a> -->
  
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
                        <?php foreach($ket_pindah as $kh){?>    
                         <div class="row">
                                <!-- data diri -->
                                <div class="col-lg-6 col-md-12 col-12">
                                    <div class="syarat">
                                        <div class="title-syarat">
                                            Data Diri
                                        </div> 

                                           <?php 
                                           $where_user=array('id' => $kh->penduduk_id);
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
                                                    <label for="">Tempat & tanggal lahir</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dd->tempat_lahir?> / <?php $tgl=date('d-m-Y', strtotime($dd->tgl_lahir)); echo $tgl?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Jenis Kelamin</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $this->m_dah->jenis_kelamin($dd->jenis_kelamin) ?>" disabled>
                                                   
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
                                                        <label for="">Fotocopy KK bagi anggota yang pindah</label><br>
                                                        <?php echo $this->m_dah->preview_file($kh->foto_kopi_kk)?>   
                                                    </div>
                                                    <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            
                                                   
                                                    <div class="form-group">
                                                        <label for="">KK asli bagi kepala keluarga yang pindah</label><br>
                                                        <?php echo $this->m_dah->preview_file($kh->kk_asli)?>   
                                                    </div>
                                                    <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            

                                                        <div class="form-group">
                                                            <label for="">KTP lama</label><br>
                                                            <?php echo $this->m_dah->preview_file($kh->foto_kopi_ktp)?>   
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

                                     <!-- end keterangan  -->
              
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
