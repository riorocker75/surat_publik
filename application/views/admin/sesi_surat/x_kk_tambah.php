<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Permohonan Surat Keterangan Penambahan Anggota Kartu Keluarga</h1>
  <a href="<?php echo base_url().'admin/aju_surat_pengantar_kk/'?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a>
  
</div>

		<!-- Content Row -->
		<div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Ajukan Permohonan</h6>
                    </div>
                    <div class="card-body">
                        <?php show_alert(); ?>
                        <?php echo form_open_multipart('user/act_kk_tambah');?>
                        <?php foreach($data_diri as $dr){}?>

                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                        <div class="syarat">
                                            <div class="title-syarat">
                                                File Persyaratan 
                                            </div>  
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Formulir F-1-03 dari Geuchik (disediakan oleh Sekdes)</label>
                                                    </div>
                                                    <div class="line2" style="margin-bottom:10px"></div>

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Fotokopi KK Lama</label>
                                                        <input class="form-control-file" type="file" name="foto_kk" id="file_1" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_1"></div>

                                                    <?php echo form_error('foto_kk', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>

                                                   
                         
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Fotocopy akta kelahiran (khusus anggota yang ditambah)</label>
                                                            <input class="form-control-file" type="file" name="akte_lahir" id="file_2" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_2"></div>

                                                    <?php echo form_error('akte_lahir', '<div class="form-error">', '</div>'); ?>
                                                    
                                                   
                                        </div>
                                        <!-- akhir persyaratan --> 

                                        <!-- data diri penduduk -->
                                        <div class="syarat">
                                            <div class="title-syarat">
                                                Data Keluarga
                                            </div>

                                            <div class="form-group">
                                                <label for="">Nama Kepala Keluarga</label>
                                                <input type="text" class="form-control form-control-user" name="kepala_keluarga" required>
                                            </div>
                                             <?php echo form_error('kepala_keluarga', '<div class="form-error">', '</div>'); ?>

                                              <div class="form-group">
                                                <label for="">Nomor KK</label>
                                                <input type="text" class="form-control form-control-user"  name="no_kk" required>
                                                
                                            </div>
                                            <?php echo form_error('no_kk', '<div class="form-error">', '</div>'); ?>
      
                                        </div>   

                                          <div class="syarat">
                                                <div class="title-syarat">
                                                    Data Individu Penambahan KK
                                                </div> 

                                                <div class="form-group">
                                                     <label for="">Nama </label>
                                                     <input type="text" class="form-control form-control-user" name="nama" required>
                                                </div>
                                                <?php echo form_error('nama', '<div class="form-error">', '</div>'); ?>
                                       
                                                 <div class="form-group">
                                                        <label for="">NIK</label>
                                                        <input type="text" class="form-control form-control-user" name="nik" >
                                                </div>
                                                <?php echo form_error('nik', '<div class="form-error">', '</div>'); ?>

                                             <div class="form-group">
                                                    <label for="">Jenis Kelamin</label>
                                                         <select class="form-control form-control-user" name="jk">
                                                         <option value="pria">Laki-Laki</option>
                                                         <option value="wanita">Perempuan</option>
                                                         </select>
                                             </div>

                                             <div class="form-group">
                                             <label for="">Tempat Lahir</label>
                                                <input type="text" class="form-control form-control-user" name="tmp_lhr" placeholder="Nama Kota/Kabupaten dilahirkan" required>
                                            </div>
                                          <div class="form-group">
                                             <label for="">Tanggal Lahir</label>
                                                <input type="date" class="form-control form-control-user" name="tgl_lhr" value="<?php echo date("Y-m-d");?>" required>
                                            </div>

                                            <div class="form-group">
                                             <label for="">Agama</label>
                                             <select class="form-control form-control-user" name="agama" required="">
                                    
                                                <?php foreach ($agama as $ag) {?>
                                                     <option value="<?php echo $ag->agama?>"><?php echo $ag->agama?></option>
                                                    <?php }?>
                                             </select>
                                             </div>

                                            <div class="form-group">
                                                 <label for="">Pendidikan Terakhir</label>
                                                <select class="form-control form-control-user" name="pendidikan">
                                                    <option value="">Pilih atau kosongkan jika baru lahir</option>
                                                    <?php foreach($pendidikan as $pd){?> 
                                                    <option value="<?php echo $pd->pendidikan?>"><?php echo $pd->pendidikan?></option>
                                                    <?php }?>
                                                </select>
                                            </div>

                                             <div class="form-group">
                                                    <label for="">Pekerjaan</label>
                                                    <select class="form-control form-control-user" name="pekerjaan">
                                                    <option value="">Pilih atau kosongkan jika baru lahir</option>

                                                    <?php foreach($pekerjaan as $pk){?> 
                                                        <option value="<?php echo $pk->pekerjaan?>"><?php echo $pk->pekerjaan?></option>
                                                    <?php }?>
                                                    </select>
                                            </div>

                                              <div class="form-group">
                                                <label for="">Status Perkawinan</label>
                                                <select class="form-control form-control-user" name="status_nikah">
                                                    <option value="menikah">Menikah</option>
                                                    <option value="belum_menikah">Belum Menikah</option>
                                                </select>
                                             </div>

                                             <div class="form-group">
                                                <label for="">Status Dalam Keluarga</label>
                                                <input class="form-control form-control-user" name="hub_kel" placeholder="misal : Anak">
                                            </div>


                                            </div>   
                                
                                </div>
                                <!-- end col kiri -->

                                <!-- start col kanan -->
                              
                            </div>	
                            
                             <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Ajukan Surat</button>                   
                        </form>
                    </div>
                </div>
		    </div>
		</div>
</div>
