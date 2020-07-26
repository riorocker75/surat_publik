<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Pengajuan Surat</h1>
  <a href="<?php echo base_url()?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a>
  
</div>

<a href="" onclick="return confirm('Anda yakin mau menghapus item ini ?')"></a>

		<!-- Content Row -->
		<div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pengaju Surat</h6>
                    </div>
                    <div class="card-body">
                    <?php show_alert(); ?>
                    <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th width="2%">No</th>
                                <th>Pengaju Surat</th>
                                <th>Nomor Ajuan</th>
                                <th>Jenis Surat</th>
                                <th>Status</th>

                                <th width="9%">Opsi</th>
                                
                                </tr>
                            </thead> 
                            <tbody>
                               <?php $n=1; foreach ($surat_mohon as $sm ) {?>
                                   <tr>
                                   <td><?php echo $n++;?></td>
                                    <td>
                                        <?php
                                            $px=array(
                                                'id' => $sm->penduduk_id
                                            );
                                           $penduduk= $this->m_dah->edit_data($px,'penduduk')->result();
                                           foreach($penduduk as $pd){ 
                                        ?>
                                        <span style="line-height:1"> 
                                           <?php echo $pd->nama ?>     
                                        </span>
                                        <p style="font-size:14px;font-weight:700;top:-20px!important;line-height:1">
                                          NIK: <?php echo $pd->nik ?>     
                                        </p>
                                
                                           <?php }?>
                                    </td>
                                    <td>
                                      <?php echo $sm->surat_mohon_id?>
                                        <p style="font-size: 11px;opacity: 0.8">
                                          <?php echo date('d.m.Y',strtotime($sm->tgl_diajukan))?>
                                        </p>
                                      </td>
                                    <td><?php echo $sm->ket_surat?></td>
                                    <td>
                                        <label class="labil labil-order">

                                            <?php echo  $sm->status_surat?>
                                        </label>
                                    </td>

                                 
                                   
                                    <td>
                                     <?php echo $this->m_dah->jenis_surat_admin($sm->jenis_surat,$sm->surat_mohon_id);?>
                                        <!-- update role nya di model/m_dah.php -->
                                        &nbsp;&nbsp;
                                        <!-- untuk delete surat -->
                                     <?php echo $this->m_dah->delete_surat_admin($sm->jenis_surat,$sm->surat_mohon_id);?>
                                    
                                    </td>

                                
                                   </tr>

                              <?php }?> 
                            </tbody> 
                            </table>
                        </div>
                    </div>
                </div>
		    </div>
<!-- end pengajuan surat -->

 <!-- end arsip surat -->

   <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pengaju Surat Lain </h6>
                    </div>
               
                  <div class="card-body">
                     <!-- mulai bagian review tabel  -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="lain-review-tabel" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th width="2%">No</th>
                                <th width="12%">Nomor Ajuan</th>
                                <th>Jenis Surat</th>
                                <th width="8%">Status</th>

                                <th width="10%">Opsi</th>
                                
                                </tr>
                            </thead> 
                            <tbody>
                               <?php $n=1; foreach ($surat_lain as $sl ) {?>
                                   <?php 
                                        $id_lain=array('id' => $sl->surat_id);
                                        $ops=$this->m_dah->edit_data($id_lain,'jenis_surat')->result();
                                        foreach ($ops as $op) { }
                                   ?>
                                   <tr>
                                   <td><?php echo $n++;?></td>
                               
                                    <td><?php echo $sl->nomor_mohon_surat?></td>
                                    <td><?php echo $op->nama_surat?></td>
                                    <td>
                                       <?php echo $this->m_dah->status_surat_lain($sl->status)?>
                                    </td>

                                 
                                   
                                    <td>
                                    <a href="<?php echo base_url().'admin/update_surat_lain/'.$sl->nomor_mohon_surat?>"> <i class="fa fa-eye"></i> </a>
                                     &nbsp;&nbsp;
                                    <a href="<?php echo base_url().'admin/delete_surat_lain/'.$sl->nomor_mohon_surat?>" 
                                      onclick="return confirm('Anda yakin mau menghapus item ini ?')"> 
                                      <i class="fa fa-trash"></i>
                                     </a>

                                   
                                    </td>

                                   </tr>

                              <?php }?> 
                            </tbody> 
                            </table>
                        </div>
                        </div>

                        <!-- end bagian tabel review -->
                   </div> 

             </div>


<!-- end row -->
		</div>

</div>
