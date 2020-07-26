<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Permohonan Surat Keterangan Pindah Penduduk</h1>
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
                        <?php echo form_open_multipart('user/act_mohon_pindah');?>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                        <div class="syarat">
                                            <div class="title-syarat">
                                                File Persyaratan 
                                            </div>  

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Formulir F-1-08 dari Geuchik (disediakan oleh Sekdes)</label>
                                                    </div>
                                                    <div class="line2" style="margin-bottom:10px"></div>

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Upload Fotocopy KK (bagi anggota keluarga yang pindah)</label>
                                                            <input class="form-control-file" type="file" name="foto_kk" id="file_1">
                                                    </div>
                                                    <div class="file_show" id="file_show_1"></div>

                                                    <?php echo form_error('foto_kk', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Upload Scan KK Asli (bagi kepala keluarga yang pindah)</label>
                                                            <input class="form-control-file" type="file" name="kk_asli" id="file_2">
                                                    </div>
                                                    <div class="file_show" id="file_show_2"></div>

                                                    <?php echo form_error('kk_asli', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>
   

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Upload KTP lama untuk dicabut</label>
                                                            <input class="form-control-file" type="file" name="ktp" id="file_3" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_3"></div>

                                                    <?php echo form_error('ktp', '<div class="form-error">', '</div>'); ?>
                                       
                                                   
                                        </div>
                                        <!-- akhir persyaratan --> 

                                        <!-- data diri penduduk -->
                                        <div class="syarat">
                                            <div class="title-syarat">
                                                Data Diri 
                                            </div>

                                            <?php foreach($data_diri as $dd ){?>
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
                                        </div>
                                        <!-- end data diri-->
                                
                                </div>

                                    <!-- alsan pindah -->
                                     <div class="col-lg-6 col-md-12 col-12">
                                                <div class="syarat">
                                                    <div class="title-syarat">
                                                        Keterangan Pindah
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Desa Dituju</label>
                                                        <input type="text" class="form-control form-control-user" name="desa" >
                                                   
                                                    </div>
                                                    <?php echo form_error('desa', '<div class="form-error">', '</div>'); ?>
                                                    
                                                    <div class="form-group">
                                                        <label for="">Kecamatan Dituju</label>
                                                        <input type="text" class="form-control form-control-user" name="kecamatan" required>
                                                   
                                                    </div>
                                                    <?php echo form_error('kecamatan', '<div class="form-error">', '</div>'); ?>

                                                    <div class="form-group">
                                                        <label for="">Kabupaten Dituju</label>
                                                        <input type="text" class="form-control form-control-user" name="kabupaten" required>
                                                   
                                                    </div>
                                                    <?php echo form_error('kabupaten', '<div class="form-error">', '</div>'); ?>

                                                    <div class="form-group">
                                                        <label for="">Alasan Pindah</label>
                                                        <textarea type="text" class="form-control form-control-user" name="alasan" >
                                                        </textarea>
                                                   
                                                    </div>
                                                    <?php echo form_error('alasan', '<div class="form-error">', '</div>'); ?>
                                                   
                                                    <div class="form-group">
                                                        <label for="">Anggota yang pindah</label>
                                                        <textarea type="text" class="form-control form-control-user" name="anggota" >
                                                        </textarea>
                                                   
                                                    </div>
                                                    <?php echo form_error('anggota', '<div class="form-error">', '</div>'); ?>

                                                </div>
                                     </div>           
                                    <!-- end alasan pindah -->



                            </div>	
                            
                             <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Ajukan Surat</button>                   
                        </form>
                    </div>
                </div>
		    </div>
		</div>
</div>
