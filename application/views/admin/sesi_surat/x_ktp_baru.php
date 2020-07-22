<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Permohonan Surat Keterangan Kartu Tanda Penduduk Baru</h1>
  <a href="<?php echo base_url().'admin/aju_surat_pengantar_ktp'?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a>
  
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
                        <?php echo form_open_multipart('user/act_ktp_baru');?>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                        <div class="syarat">
                                            <div class="title-syarat">
                                                File Persyaratan 
                                            </div>  

                                               <div class="form-group">
                                                        <label style="font-weight:800">Umur mencapai 17 tahun/sudah kawin/pernah kawin</label>
                                                    </div>
                                                    <div class="line2" style="margin-bottom:10px"></div>

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Formulir F-1-07 dari Gechik (disediakan oleh Sekdes)</label>
                                                            <!-- <input class="form-control-file" type="file" name="ket_gk" required> -->
                                                    </div>
                                                    <div class="line2" style="margin-bottom:10px"></div>

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Fotocopy Kartu Keluarga (KK)</label>
                                                            <input class="form-control-file" type="file" name="foto_kk" id="file_1" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_1"></div>

                                                    <?php echo form_error('foto_kk', '<div class="form-error">', '</div>'); ?>

                                                    <div class="line2" style="margin-bottom:10px"></div>

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Fotocopy surat nikah bagi yang belum umur 17 tahun sudah kawin atau pernah kawin (memperlihatkan yang asli)</label>
                                                            <input class="form-control-file" type="file" name="surat_nikah" id="file_2">
                                                    </div>
                                                    <div class="file_show" id="file_show_2"></div>

                                                    <?php echo form_error('surat_nikah', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>
                                       

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Fotocopy Akta kelahiran/ijazah</label>
                                                            <input class="form-control-file" type="file" name="akte_lahir" id="file_3" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_3"></div>

                                                    <?php echo form_error('akte_lahir', '<div class="form-error">', '</div>'); ?>
                                       
                                                   
                                        </div>
                                        <!-- akhir persyaratan --> 

                                        <!-- data diri orang tua -->

                                           <div class="syarat">
                                                <div class="title-syarat">
                                                    Data Orang Tua 
                                                </div>

                                                 <div class="form-group">
                                                    <label for="">Nama Ayah</label>
                                                    <input type="text" class="form-control form-control-user" name="ayah" required>
                                                    <?php echo form_error('ayah', '<div class="form-error">', '</div>'); ?>
                                                   
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Nama Ibu</label>
                                                    <input type="text" class="form-control form-control-user" name="ibu" required>
                                                    <?php echo form_error('ibu', '<div class="form-error">', '</div>'); ?>
                                                </div>
                                        </div>
                                        <!-- end data orang tua -->

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
                                                    <label for="">No.KK</label>
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
                                                    <label for="">Alamat</label>
                                                    <input type="text" class="form-control form-control-user" value="<?php echo $dd->alamat?>" disabled>
                                                   
                                                </div>
                                            <?php }?>       
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
