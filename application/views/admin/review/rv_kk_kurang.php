<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Review Surat Pemohon Pengurangan Anggota Kartu Keluarga</h1>
  <a href="<?php echo base_url().'admin/permohonan_surat/'?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a>
  
</div>

		<!-- Content Row -->
		<div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <form action="<?php echo base_url().'admin/update_kk_kurang_act'?>" method="post">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pengaju</h6>
                        
                    </div>
                    <div class="card-body">
                        <?php foreach($kk_kurang as $kh){?>    
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
                                            Data Diri Yang Dikeluarkan KK
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

                                                <div class="form-group">
                                                    <label for="">Alamat</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dd->alamat?>" disabled>
                                                   
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
                                                            <label style="font-weight:800">KK Lama Asli</label><br>
                                                            <?php echo $this->m_dah->preview_file($kh->foto_kopi_kk)?>   
                                                        </div>
                                                    <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Surat keterangan meningal dunia dari Geuchik (jika meninggal)</label><br>
                                                        <?php echo $this->m_dah->preview_file($kh->ket_meninggal)?>   
                                                    </div>

                                                    <div class="line2" style="border:1px solid #c1c2c3;margin-bottom:10px"></div>            
                                                        <div class="form-group">
                                                            <label style="font-weight:800">Surat keterangan pindah dari Geuchik (jika pindah)</label><br>
                                                            <?php echo $this->m_dah->preview_file($kh->ket_pindah)?>   
                                                        </div>
                       

                                    </div>

                                 <input type="hidden" name="surat_id" value="<?php echo $kh->surat_mohon_id?>">  
                               
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
                                                    <textarea class="form-control" name="ket_surat" placeholder="di isi apabila menolak atau ada pemberitahuan lanjut ke bersangkutan" rows="3"></textarea>
                                                </div>  
                                                <?php echo form_error('ket_surat', '<div class="form-error">', '</div>'); ?>

                                    </div>  


                                    <div class="float-right">
                                        <input class="btn btn-danger" type="submit" name="tolak" value="Tolak">
                                        <input class="btn btn-success" type="submit" name="setuju" value="Setujui">
                                        <!-- <button type="submit" class="btn btn-success"> Setujui</button> -->
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
