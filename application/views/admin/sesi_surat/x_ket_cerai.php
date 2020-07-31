<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Permohonan Surat Keterangan Bercerai</h1>
  <a href="<?php echo base_url().'admin/sesi_surat'; ?>" class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a>
  
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
                        <?php echo form_open_multipart('user/act_surat_ket_cerai');?>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                        <div class="syarat">
                                            <div class="title-syarat">
                                               Persyaratan 
                                            </div>  
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Upload Fotocopy Kartu Keluarga (KK)</label>
                                                            <input class="form-control-file" type="file" name="foto_kk" id="file_1" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_1"></div>

                                                    <?php echo form_error('foto_kk', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>


                                                    <div class="form-group">
                                                        <label style="font-weight:800">Upload Fotocopy KTP (Laki-laki)</label>
                                                            <input class="form-control-file" type="file" name="ktp_suami" id="file_2" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_2"></div>

                                                    <?php echo form_error('ktp_suami', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>
                                       
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Upload Fotocopy KTP (Perempuan)</label>
                                                            <input class="form-control-file" type="file" name="ktp_istri" id="file_3" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_3"></div>

                                                    <?php echo form_error('ktp_istri', '<div class="form-error">', '</div>'); ?>

                                                   
                                        </div>
                                        <!-- akhir persyaratan --> 


                                        <!-- data diri penduduk -->
                                        <div class="syarat">
                                            <div class="title-syarat">
                                                Data Pemohon Bercerai
                                            </div>

                                            <?php foreach($data_diri as $dd ){}?>
                                               
                                            <div class="form-group">
                                            <label style="font-weight:800">Nama / NIK Pihak Pertama</label>
                                                <select class="selectpicker form-control form-control-user" name="pertama" data-live-search="true" required>
                                                <!-- <option value="<?php echo $dr->id?>"><?php echo $dr->nik?> | <?php echo $dr->nama?></option> -->
                                                <option value="">Cari Nama/Nik, Pastikan anda sudah terdaftar di sekdes</option>
                                                <?php foreach ($penduduk as $pd){?>

                                                <option value="<?php echo $pd->id?>" data-tokens="<?php echo $pd->nik?> | <?php echo $pd->nama?>"><?php echo $pd->nik?> | <?php echo $pd->nama?></option>

                                                <?php  } ?>
                                                </select>
                                            </div>
                                            <?php echo form_error('suami', '<div class="form-error">', '</div>'); ?>
                                        
                                            <div class="form-group">
                                            <label style="font-weight:800">Nama / NIK Pihak Kedua</label>
                                                <select class="selectpicker form-control form-control-user" name="kedua" data-live-search="true" required>
                                                <!-- <option value="<?php echo $dr->id?>"><?php echo $dr->nik?> | <?php echo $dr->nama?></option> -->
                                                <option value="">Cari Nama/Nik, Pastikan anda sudah terdaftar di sekdes</option>
                                                <?php foreach ($penduduk as $pd){?>

                                                <option value="<?php echo $pd->id?>" data-tokens="<?php echo $pd->nik?> | <?php echo $pd->nama?>"><?php echo $pd->nik?> | <?php echo $pd->nama?></option>

                                                <?php  } ?>
                                                </select>
                                            </div>
                                            <?php echo form_error('istri', '<div class="form-error">', '</div>'); ?>


                                        </div>
                                        <!-- end data diri-->

                                
                                </div>
                            </div>	
                            
                             <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Ajukan Surat</button>                   
                        </form>
                    </div>
                </div>
		    </div>
		</div>
</div>
