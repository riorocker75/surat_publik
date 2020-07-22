<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Lihat Surat Mohon Pembuatan Kartu Keluarga Baru</h1>
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
                        <?php foreach($kk_baru as $kh){?>    
                         <div class="row">
                                <!-- data diri -->
                                <div class="col-lg-6 col-md-12 col-12">


                                <div class="syarat">
                                        <div class="title-syarat">
                                            Data Keluarga
                                        </div> 

                                        <div class="form-group">
                                            <label for="">Nama Calon Kepala Keluarga</label>
                                            <?php 
                                            $where_kpl=array('id' => $kh->kepala_keluarga);
                                            $kepala_k =$this->m_dah->edit_data($where_kpl,'penduduk')->result();
                                            foreach ($kepala_k as $kep) {}
                                            ?>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $kep->nama ?>" disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Nomor KK Lama</label>
                                            <input type="text" class="form-control form-control-user" value="<?php echo $kh->no_kk_lama ?>" disabled>
                                        </div>
                                    </div>
                                    <!-- end data orang tua -->
                                    <div class="syarat">
                                        <div class="title-syarat">
                                            Data Keluarga Yang Di KK Baru
                                        </div> 

                                           
                                                <div class="form-group">
                                                    <label for="">Jumlah Anggota Keluarga</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $kh->jlh_anggota ?>" disabled>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Nama & Nik yang ditambahkan</label>
                                                   <textarea class="form-control form-control-user" disabled><?php echo $kh->list_anggota?></textarea>
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
                                                            <label style="font-weight:800">Fotocopy KK Lama</label><br>
                                                            <?php echo $this->m_dah->preview_file($kh->foto_kopi_kk)?>   
                                                        </div>
                                                    <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Fotocopy KTP (Calon Kepala Keluarga)</label><br>
                                                            <?php echo $this->m_dah->preview_file($kh->foto_kopi_ktp)?>   
                                                        </div>
                                                    <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            

                                                     <div class="form-group">
                                                        <label style="font-weight:800">Fotocopy buku nikah (bagi yang sudah menikah)</label><br>
                                                            <?php echo $this->m_dah->preview_file($kh->foto_kopi_nikah)?>   
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
