<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Permohonan Pembuatan Surat Keterangan Kelahiran</h1>
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
                        <?php echo form_open_multipart('user/act_akte_lahir');?>
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                        <div class="syarat">
                                            <div class="title-syarat">
                                                File Persyaratan 
                                            </div>  
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Surat Keterangan Geuchik F-2-02 (Disediakan oleh Sekdes)</label>
                                                    </div>

                                                    <div class="line2" style="margin-bottom:10px"></div>

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Fotocopy KTP kedua orang tua</label>
                                                            <input class="form-control-file" type="file" name="ktp" id="file_2" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_2"></div>

                                                    <?php echo form_error('ktp', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>
                                                    
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Fotocopy Kartu Keluarga (KK)</label>
                                                            <input class="form-control-file" type="file" name="foto_kopi_kk" id="file_3" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_3"></div>

                                                    <?php echo form_error('foto_kopi_kk', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>
                                                   
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Surat kelahiran dari bidan/dokter (stempel basah)</label>
                                                            <input class="form-control-file" type="file" name="ket_lahir" id="file_4" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_4"></div>

                                                    <?php echo form_error('ket_lahir', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>
                                       

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Fotocopy Buku Nikah orang tua</label>
                                                            <input class="form-control-file" type="file" name="buku_nikah" id="file_5" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_5"></div>

                                                    <?php echo form_error('buku_nikah', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>
                                       
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Fotocopy ijazah (bagi yang sudah memiliki)</label>
                                                            <input class="form-control-file" type="file" name="ijazah" id="file_6">
                                                    </div>
                                                    <div class="file_show" id="file_show_6"></div>

                                                    <?php echo form_error('ijazah', '<div class="form-error">', '</div>'); ?>
                                       
                                                   
                                        </div>
                                        <!-- akhir persyaratan --> 

                                        <!-- data diri penduduk -->

                                        <div class="syarat">
                                            <div class="title-syarat">
                                                Data Diri Orang Tua
                                            </div>
                                            <?php 
                                             foreach($data_diri as $dr){}
                                            ?>
                                            <div class="form-group">
                                            <label for="">Nama / NIK Ayah</label>
                                                <select class="selectpicker form-control form-control-user" name="nik_suami" data-live-search="true" required>
                                                <!-- <option value="<?php echo $dr->id?>"><?php echo $dr->nik?> | <?php echo $dr->nama?></option> -->
                                                <option value="" >Cari Nama / Nik / No.KK, Pastikan anda terdaftar di sekdes</option>
                                                
                                                <?php foreach ($penduduk as $pd){?>

                                                <option value="<?php echo $pd->id?>" data-tokens="<?php echo $pd->nik?> | <?php echo $pd->nama?>"><?php echo $pd->nik?> | <?php echo $pd->nama?></option>

                                                <?php  } ?>
                                                </select>
                                            </div>
                                            <?php echo form_error('nik_suami', '<div class="form-error">', '</div>'); ?>

                                            <div class="form-group">
                                            <label for="">Nama / NIK Ibu</label>
                                                <select class="selectpicker form-control form-control-user" name="nik_istri" data-live-search="true" required>
                                                <option value="" >Cari Nama / Nik / No.KK, Pastikan anda terdaftar di sekdes</option>
                                               
                                                <!-- <option value="<?php echo $dr->id?>"><?php echo $dr->nik?> | <?php echo $dr->nama?></option> -->
                                                <?php foreach ($penduduk as $ps){?>

                                                <option value="<?php echo $ps->id?>" data-tokens="<?php echo $ps->nik?> | <?php echo $ps->nama?>"><?php echo $ps->nik?> | <?php echo $ps->nama?></option>

                                                <?php  } ?>
                                                </select>
                                            </div>
                                            <?php echo form_error('nik_suami', '<div class="form-error">', '</div>'); ?>
       
                                                 
                                        </div>
                                        <!-- end data diri-->
                                
                                </div>
                                <!-- end col kiri -->

                                <!-- start col kanan -->
                                <div class="col-lg-6 col-md-12 col-12">
                                
                                    <div class="syarat">
                                    <div class="title-syarat">
                                        Data Kelahiran
                                    </div>

                                        <div class="form-group">
                                            <label for="">Nama Anak</label>
                                            <input type="text" class="form-control form-control-user"  name="nama_lahir" required>
                                            
                                        </div>
                                        <?php echo form_error('nama_lahir', '<div class="form-error">', '</div>'); ?>


                                        <div class="form-group">
                                            <label for="">Jenis Kelamin</label>
                                            <select class="form-control form-control-user" name="jk">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>

                                        <?php echo form_error('jk', '<div class="form-error">', '</div>'); ?>


                                        <div class="form-group">
                                            <label for="">Anak ke</label>
                                            <input type="number" class="form-control form-control-user"  name="anak_ke" placeholder="isi dengan angka. misal :1" required>
                                            
                                        </div>
                                        <?php echo form_error('anak_ke', '<div class="form-error">', '</div>'); ?>

                                        <div class="form-group">
                                            <label for="">Tanggal Lahir</label>
                                            <input type="date" class="form-control form-control-user" value="<?php echo date('Y-m-d')?>" name="tgl_lahir" required>
                                            
                                        </div>
                                        <?php echo form_error('tgl_lahir', '<div class="form-error">', '</div>'); ?>

                                        <div class="form-group">
                                            <label for="">Jam Kelahiran</label>
                                            <input type="time" class="form-control form-control-user" value="<?php echo date('H:i:s')?>" name="jam_lahir" required>
                                            
                                        </div>
                                        <?php echo form_error('jam_lahir', '<div class="form-error">', '</div>'); ?>


                                        <div class="form-group">
                                            <label for="">Tempat Lahir</label>
                                            <input type="text" class="form-control form-control-user"  name="tempat_lahir" placeholder="Nama Kota/Kabupaten dimana ia lahir" required>
                                            
                                        </div>
                                        <?php echo form_error('tempat_lahir', '<div class="form-error">', '</div>'); ?>


                                        
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
