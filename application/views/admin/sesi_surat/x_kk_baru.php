<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Permohonan Surat Keterangan Pembuatan Kartu Keluarga Baru</h1>
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
                        <?php echo form_open_multipart('user/act_kk_baru');?>
                        <?php foreach($data_diri as $dr){}?>

                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                        <div class="syarat">
                                            <div class="title-syarat">
                                                File Persyaratan 
                                            </div>  
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Formulir F-1-06 dari Geuchik (disediakan oleh Sekdes)</label>
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
                                                        <label style="font-weight:800">Fotocopy KTP (Calon Kepala Keluarga)</label>
                                                        <input class="form-control-file" type="file" name="ktp" id="file_2" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_2"></div>

                                                    <?php echo form_error('ktp', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>

                                                     <div class="form-group">
                                                        <label style="font-weight:800">Fotocopy buku nikah (bagi yang sudah menikah)</label>
                                                        <input class="form-control-file" type="file" name="buku_nikah" id="file_3" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_3"></div>

                                                    <?php echo form_error('buku_nikah', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>

                         
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Fotocopy akta kelahiran anggota keluarga</label>
                                                            <input class="form-control-file" type="file" name="akte_lahir" id="file_4" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_4"></div>
                                                    <div class="note">catatan: semua file akta kelahiran keluarga digabungkan jadi satu di pdf</div>

                                                    <?php echo form_error('akte_lahir', '<div class="form-error">', '</div>'); ?>
                                                    
                                                   
                                        </div>
                                        <!-- akhir persyaratan --> 

                                        <!-- data diri penduduk -->
                               

                                           <div class="syarat">
                                                <div class="title-syarat">
                                                    Data Kepala Keluarga
                                                </div> 

                                                <div class="form-group">
                                                 <label for="">Nama / NIK Calon Kepala Keluarga</label>
                                                <select class="selectpicker form-control form-control-user" name="kepala_keluarga" data-live-search="true" required>
                                                <option value="" >Cari Nama / Nik / No.KK, Pastikan anda terdaftar di sekdes</option>
                                                <?php foreach ($penduduk as $pd){?>

                                                <option value="<?php echo $pd->id?>" data-tokens="<?php echo $pd->nik?> | <?php echo $pd->nama?> | <?php echo $pd->nomor_kk?>"><?php echo $pd->nik?> | <?php echo $pd->nama?></option>

                                                <?php  } ?>
                                                </select>
                                            </div>
                                            <?php echo form_error('kepala_keluarga', '<div class="form-error">', '</div>'); ?>
                                       

                                             <div class="form-group">
                                                <label for="">Nomor KK Lama</label>
                                                <input type="text" class="form-control form-control-user"  name="no_kk" required>
                                                
                                            </div>
                                            <?php echo form_error('no_kk', '<div class="form-error">', '</div>'); ?>
      
                                            </div> 



                                           <div class="syarat">
                                                <div class="title-syarat">
                                                    Data Keluarga yang ditambahkan
                                                </div> 
                                       
                                             <div class="form-group">
                                                <label for="">Jumlah Anggota Keluarga</label>
                                                <input type="text" class="form-control form-control-user"  name="jumlah_anggota" required>
                                                
                                            </div>
                                            <?php echo form_error('jumlah_anggota', '<div class="form-error">', '</div>'); ?>
                                            
                                              <div class="form-group">
                                                <label for="">Nama dan Nik </label>
                                                <textarea class="form-control form-control-user" name="nama_nik" placeholder="misal: budi 1203849, fulan 120293837, fahmi 301928837"></textarea>
                                                    
                                                
                                            </div>
                                            <?php echo form_error('nama_nik', '<div class="form-error">', '</div>'); ?>
      
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
