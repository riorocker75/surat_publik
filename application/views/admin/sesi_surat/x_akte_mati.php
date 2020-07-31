<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Permohonan Surat Keterangan Meninggal Dunia</h1>
  <a href="<?php echo base_url().'admin/sesi_surat'?>" class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a>
  
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
                        <?php echo form_open_multipart('user/act_akte_mati');?>
                        <?php foreach($data_diri as $dr){}?>

                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                        <div class="syarat">
                                            <div class="title-syarat">
                                                Persyaratan 
                                            </div>  
                                                    
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Upload Surat Keterangan dari Rumah Sakit bagi yang meninggal di Rumah Sakit</label>
                                                            <input class="form-control-file" type="file" name="ket_mati" id="file_2">
                                                    </div>
                                                    <div class="file_show" id="file_show_2"></div>

                                                    <?php echo form_error('ket_mati', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>
                         
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Upload Fotocopy KTP (Bagi yang sudah memiliki)</label>
                                                            <input class="form-control-file" type="file" name="ktp" id="file_3">
                                                    </div>
                                                    <div class="file_show" id="file_show_3"></div>

                                                    <?php echo form_error('ktp', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>
                                                    
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Upload Fotocopy Kartu Keluarga (KK)</label>
                                                            <input class="form-control-file" type="file" name="foto_kk" id="file_4" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_4"></div>

                                                    <?php echo form_error('foto_kk', '<div class="form-error">', '</div>'); ?>
                                                   
                                                   
                                                   
                                        </div>
                                        <!-- akhir persyaratan --> 

                                        <!-- data diri penduduk -->
                                        <div class="syarat">
                                            <div class="title-syarat">
                                                Data Yang Melapor
                                            </div>

                                            <div class="form-group">
                                            <label for="">Nama / NIK Yang Melapor</label>
                                                <select class="selectpicker form-control form-control-user" name="nama_pelapor" data-live-search="true" required>
                                                <option value="" >Cari Nama / Nik / No.KK, Pastikan anda terdaftar di sekdes</option>
                                                <?php foreach ($penduduk as $pdl){?>

                                                <option value="<?php echo $pdl->id?>" data-tokens="<?php echo $pdl->nik?> | <?php echo $pdl->nama?> | <?php echo $pdl->nomor_kk?>"><?php echo $pdl->nik?> | <?php echo $pdl->nama?></option>

                                                <?php  } ?>
                                                </select>
                                            </div>
                                            <?php echo form_error('nama_pelapor', '<div class="form-error">', '</div>'); ?>

                                              <div class="form-group">
                                                <label for="">Hubungan Dengan Yang Meninggal </label>
                                                <input type="text" class="form-control form-control-user"  name="hub_pelapor" placeholder="Contoh: Ibu" required>
                                                
                                            </div>
                                            <?php echo form_error('hub_pelapor', '<div class="form-error">', '</div>'); ?>
      
                                        </div>    
                                       
                                
                                </div>
                                <!-- end col kiri -->

                                <!-- start col kanan -->
                                <div class="col-lg-6 col-md-12 col-12">
                                
                                    <div class="syarat">
                                    <div class="title-syarat">
                                        Data Yang Meninggal
                                    </div>
                                       
                                            <div class="form-group">
                                            <label for="">Nama / NIK Yang Meninggal</label>
                                                <select class="selectpicker form-control form-control-user" name="nama_mati" data-live-search="true" required>
                                                <option value="" >Cari Nama / Nik / No.KK, Pastikan terdaftar di sekdes</option>
                                                <?php foreach ($penduduk as $pd){?>

                                                <option value="<?php echo $pd->id?>" data-tokens="<?php echo $pd->nik?> | <?php echo $pd->nama?> | <?php echo $pd->nomor_kk?>"><?php echo $pd->nik?> | <?php echo $pd->nama?></option>

                                                <?php  } ?>
                                                </select>
                                            </div>
                                            <?php echo form_error('nama_mati', '<div class="form-error">', '</div>'); ?>

                                       

                                        

                                        <div class="form-group">
                                            <label for="">Tanggal Meninggal Dunia</label>
                                            <input type="date" class="form-control form-control-user" value="<?php echo date('Y-m-d')?>" name="tgl_mati" required>
                                            
                                        </div>
                                        <?php echo form_error('tgl_mati', '<div class="form-error">', '</div>'); ?>

                                        <div class="form-group">
                                            <label for="">Jam Meninggal Dunia</label>
                                            <input type="time" class="form-control form-control-user" value="<?php echo date('H:i')?>" name="jam_mati" required>
                                            
                                        </div>
                                        <?php echo form_error('jam_mati', '<div class="form-error">', '</div>'); ?>

                                        <div class="form-group">
                                            <label for="">Penyebab Meninggal Dunia</label>
                                            <input type="text" class="form-control form-control-user"  name="sebab_mati" placeholder="Contoh: Kecelakaan" required>
                                            
                                        </div>
                                        <?php echo form_error('sebab_mati', '<div class="form-error">', '</div>'); ?> 

                                        <div class="form-group">
                                            <label for="">Tempat Meninggal Dunia</label>
                                            <input type="text" class="form-control form-control-user"  name="tempat_mati" placeholder="Nama Kota/Kabupaten Meninggal" required>
                                            
                                        </div>
                                        <?php echo form_error('tempat_mati', '<div class="form-error">', '</div>'); ?>


                                        
                                    </div>

                                    <!-- end data kelahiran    -->
                                
                                </div>

                            </div>	
                            
                             <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Ajukan Surat</button>                   
                        </form>
                    </div>
                </div>
		    </div>
		</div>
</div>
