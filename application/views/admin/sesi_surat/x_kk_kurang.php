<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Permohonan Surat Keterangan Pengurangan Anggota Kartu Keluarga</h1>
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
                        <?php echo form_open_multipart('user/act_kk_kurang');?>
                        <?php foreach($data_diri as $dr){}?>

                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-12">
                                        <div class="syarat">
                                            <div class="title-syarat">
                                               Persyaratan 
                                            </div>  
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Upload KK Lama Asli</label>
                                                        <input class="form-control-file" type="file" name="foto_kk" id="file_1" required>
                                                    </div>
                                                    <div class="file_show" id="file_show_1"></div>

                                                    <?php echo form_error('foto_kk', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>

                                                    <div class="form-group">
                                                        <label style="font-weight:800">Upload Surat keterangan meningal dunia dari Geuchik (jika meninggal)</label>
                                                            <input class="form-control-file" type="file" name="ket_mati" id="file_2">
                                                    </div>
                                                    <div class="file_show" id="file_show_2"></div>

                                                    <?php echo form_error('ket_mati', '<div class="form-error">', '</div>'); ?>
                                                    <div class="line2" style="margin-bottom:10px"></div>
                         
                                                    <div class="form-group">
                                                        <label style="font-weight:800">Upload Surat keterangan pindah dari Geuchik (jika pindah)</label>
                                                            <input class="form-control-file" type="file" name="ket_pindah" id="file_3">
                                                    </div>
                                                    <div class="file_show" id="file_show_3"></div>

                                                    <?php echo form_error('ket_pindah', '<div class="form-error">', '</div>'); ?>
                                                    
                                                   
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
                                                <input class="form-control form-control-user"  name="no_kk" type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="16" maxlength="16" required>
                                            <?php echo form_error('no_kk', '<div class="form-error">', '</div>'); ?>
                                                
                                            </div>
      
                                        </div>   

                                          <div class="syarat">
                                                <div class="title-syarat">
                                                    Data Individu Pengurangan KK
                                                </div> 

                                                <div class="form-group">
                                                 <label for="">Nama / NIK yang keluar KK</label>
                                                <select class="selectpicker form-control form-control-user" name="nama_keluar" data-live-search="true" required>
                                                <option value="" >Cari Berdasarkan Nama / Nik / Nomor KK</option>
                                                <?php foreach ($penduduk as $pd){?>

                                                <option value="<?php echo $pd->id?>" data-tokens="<?php echo $pd->nik?> | <?php echo $pd->nama?> | <?php echo $pd->nomor_kk?>"><?php echo $pd->nik?> | <?php echo $pd->nama?></option>

                                                <?php  } ?>
                                                </select>
                                            </div>
                                            <?php echo form_error('nama_keluar', '<div class="form-error">', '</div>'); ?>
                                       
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
