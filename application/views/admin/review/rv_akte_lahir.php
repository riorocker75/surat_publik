<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Review Surat Pemohon Surat Keterangan Kelahiran</h1>
  <a href="<?php echo base_url().'admin/permohonan_surat/'?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a>
  
</div>

		<!-- Content Row -->
		<div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <form action="<?php echo base_url().'admin/update_akte_lahir_act'?>" method="post">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pengaju</h6>
                        
                    </div>
                    <div class="card-body">
                        <?php foreach($akte_lahir as $kh){?> 

                        <?php
                            
                            $where=array('id' => $kh->istri_id);
                            $id_suami = array('id'=>$kh->suami_id);

                            $suami=$this->m_dah->edit_data($id_suami,'penduduk')->result();
                            foreach($suami as $su){}
                           
                            $hari=date('D', strtotime($kh->tgl_lahir));
                            $data_diri=$this->m_dah->edit_data($where, 'penduduk')->result();

                        ?>   
                         <div class="row">
                                <!-- data diri -->
                                <div class="col-lg-6 col-md-12 col-12">

                                <!-- start data anak -->
                                <div class="syarat">
                                        <div class="title-syarat">
                                            Data Anak Yang Lahir
                                        </div>

                                        <div class="form-group">
                                            <label for="">Nama</label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $kh->nama_lahir?>" disabled>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jenis Kelamin</label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $kh->kelamin ?>" disabled>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="">Anak ke</label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $kh->nomor_anak?>" disabled>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="">Hari / Tanggal Lahir</label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $this->m_dah->format_hari($hari)?>, <?php echo $this->m_dah->format_tanggal(date('Y-m-d',strtotime($kh->tgl_lahir)))?>" disabled>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="">Jam Lahir</label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo date('H:i', strtotime($kh->tgl_lahir))?>" disabled>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label for="">Tempat Lahir</label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $kh->tmp_lahir?>" disabled>
                                            
                                        </div>
                                        
                                  </div>      
                                <!-- end data anak -->
                                    <div class="syarat">
                                        <div class="title-syarat">
                                            Data Orang Tua (Ibu)
                                        </div> 

                                           <?php 

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
                                                <?php 
                                                    $lahir=new DateTime($dd->tgl_lahir); 
                                                    $today=new DateTime();
                                                    $umur = $today->diff($lahir);
                                                ?>
                                                <div class="form-group">
                                                    <label for="">Umur</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $umur->y?>&nbsp;tahun" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Pekerjaan</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dd->pekerjaan?>" disabled>
                                                   
                                                </div>

                                               
                                            <?php }?>   

                                    </div>  
                                    <!-- end data ibu -->

                                    <!-- data ayah -->

                                    <div class="syarat">
                                        <div class="title-syarat">
                                            Data Orang Tua (Ayah)
                                        </div>

                                        <div class="form-group">
                                                    <label for="">Nama</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $su->nama?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">NIK</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $su->nik?>" disabled>
                                                   
                                                </div>
                                                <?php 
                                                    $lahir=new DateTime($su->tgl_lahir); 
                                                    $today=new DateTime();
                                                    $umur = $today->diff($lahir);
                                                ?>
                                                <div class="form-group">
                                                    <label for="">Umur</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $umur->y?>&nbsp;tahun" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Pekerjaan</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $su->pekerjaan?>" disabled>
                                                   
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

                                           <!--  <div class="form-group">
                                                <label for="">Surat keterangan dari geuchik F-2-02 (Disediakan oleh Sekretais Desa)</label><br>
                                            </div>    
                                            <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>   -->          

                                            <div class="form-group">
                                                <label for="">Fotocopy KTP salah satu kedua orang tua</label><br>
                                                <?php echo $this->m_dah->preview_file($kh->foto_kopi_ktp)?>   
                                            </div>    
                                            <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            
                                 
                                            <div class="form-group">
                                                <label for="">Fotocopy Kartu Keluarga (KK)</label><br>
                                                <?php echo $this->m_dah->preview_file($kh->foto_kopi_kk)?>   
                                            </div>
                                            <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            
                                            
                                            <div class="form-group">
                                                <label for="">Surat kelahiran dari bidan/dokter (stempel basah)</label><br>
                                                <?php echo $this->m_dah->preview_file($kh->surat_lahir)?>   
                                            </div>    
                                            <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            

                                            <div class="form-group">
                                                <label for="">Fotocopy buku nikah orang tua</label><br>
                                                <?php echo $this->m_dah->preview_file($kh->foto_kopi_nikah)?>   
                                            </div>    
                                            <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            

                                             <div class="form-group">
                                                <label for="">Fotocopy ijazah (bagi yang sudah memiliki)</label><br>
                                                <?php echo $this->m_dah->preview_file($kh->foto_kopi_ijazah)?>   
                                            </div>    
                                            <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            
                                    </div>

                                 <input type="hidden" name="surat_id" value="<?php echo $kh->surat_mohon_id?>">  
                                <!-- start komentar -->
                               
                                 <div class="syarat">
                                        <div class="title-syarat">
                                                Keterangan
                                            </div> 
                                            <?php 
                                            $datx=$this->m_dah->last_record_surat('surat_mohon','diterima')->result();
                                            foreach($datx as $xr){}
                                            ?>
                                            <div class="form-group">
                                                <label for="">Nomor Surat </label>
                                                <input type="number" class="form-control form-control-user" name="no_surat"
                                                value="<?php echo $this->m_dah->auto_nomor_surat($xr->nomor_surat)?>" required>
                                                <!-- end input nomor surat -->
                                                <?php echo form_error('no_surat', '<div class="form-error">', '</div>'); ?>

                                            </div>  
                                                <div class="form-group">
                                                    <label for="">Pemberitahuan </label>
                                                    <textarea class="form-control" name="ket_surat" placeholder="di isi apabila menolak atau ada pemberitahuan lanjut ke bersangkutan" rows="3" required=""></textarea>
                                                </div>  
                                                <?php echo form_error('ket_surat', '<div class="form-error">', '</div>'); ?>
                                    </div> 
                                  <!-- end komentar-->

                                  <div class="float-right">
                                        <input class="btn btn-danger" type="submit" name="tolak" value="Tolak" >
                                        <input class="btn btn-success" type="submit" name="setuju" value="Setujui">
                                        <!-- <button type="submit" class="btn btn-success"> Setujui</button> -->
                                    </div>

                                </div> 

                                <!-- end syarat -->
                               

                         </div>  
                         <?php }?>   

                     
                </div>
                
                </form>
		    </div>
		</div>
</div>
