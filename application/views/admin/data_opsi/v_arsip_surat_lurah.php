<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Arsip Surat</h1>
  <a href="<?php echo base_url()?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a>
  
</div>

<a href="" onclick="return confirm('Anda yakin mau menghapus item ini ?')"></a>

		<!-- Content Row -->
		<div class="row">
         

 <!-- start arsip surat  -->
      <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Arsip Surat</h6>
                    </div>
                 <div class="card-body">   
                    <!-- mulai tab -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                       <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#direview" role="tab" aria-controls="profile" aria-selected="false">
                             Tahap Pengajuan <span class="labil labil-order count"><?php echo $total_review;?></span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#diterima" role="tab" aria-controls="profile" aria-selected="false">
                             Di Terima <span class="labil labil-success count"><?php echo $total_terima;?></span>
                          </a>
                        </li>

                        <li class="nav-item">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ditolak" role="tab" aria-controls="contact" aria-selected="false">
                            Di Tolak <span class="labil labil-danger count"><?php echo $total_tolak;?></span>
                          </a>
                        </li>
                    </ul>
                     <!-- end tab -->


                  <div class="tab-content" id="myTabContent">
                      <!-- start direview -->
                      <div class="tab-pane fade show active" id="direview" role="tabpanel" >
                          
                              <div class="table-responsive">
                                <table class="table table-bordered" id="review-tabel" width="100%" cellspacing="0">
                                  <thead>
                                    <tr>
                                      <th width="2%">No</th>
                                      <th>Pengaju Surat</th>
                                      <th>Nomor surat ajuan</th>
                                      <th>Jenis Surat</th>
                                      <th>Status</th>

                                      <th width="9%">Opsi</th>
                                
                                     </tr>
                                  </thead>

                                                        <tbody>
                               <?php $n=1; foreach ($surat_mohon as $sdm) {?>
                                   <tr>
                                   <td><?php echo $n++;?></td>
                                    <td>
                                        <?php
                                            $px=array(
                                                'id' => $sdm->penduduk_id
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
                                      <?php echo $sdm->surat_mohon_id?>
                                        <p style="font-size: 11px;opacity: 0.8">
                                          <?php echo date('d.m.Y',strtotime($sdm->tgl_surat))?>
                                        </p>
                                      </td>
                                    <td><?php echo $sdm->ket_surat?></td>
                                    <td>
                                        <label class="labil labil-order">

                                            <?php echo  $sdm->status_surat?>
                                        </label>
                                    </td>

                                 
                                   
                                    <td>
                                    
                                        &nbsp;&nbsp;
                                     <?php echo $this->m_dah->jenis_surat_user($sdm->jenis_surat,$sdm->surat_mohon_id);?>
                                        
                                        <!-- untuk delete surat -->
                                     <!-- <?php echo $this->m_dah->delete_surat_admin($sdm->jenis_surat,$sdm->surat_mohon_id);?> -->
                                    
                                    </td>

                                
                                   </tr>

                              <?php }?> 
                            </tbody>

                              </table>
                          </div>
                      </div>


                      <!-- end direview -->


                      <!-- start diterima -->
                      <div class="tab-pane fade " id="diterima" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="diterima-tabel" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th width="2%">No</th>
                                <th>Pengaju Surat</th>
                                <th>Nomor surat</th>
                                <th>Jenis Surat</th>
                                <th>Status</th>

                                <th width="9%">Opsi</th>
                                
                                </tr>
                            </thead> 
                            <tbody>
                               <?php $n=1; foreach ($surat_diterima as $sdtr) {?>
                                   <tr>
                                   <td><?php echo $n++;?></td>
                                    <td>
                                        <?php
                                            $px=array(
                                                'id' => $sdtr->penduduk_id
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
                                      <?php echo $sdtr->nomor_surat?>
                                        <p style="font-size: 11px;opacity: 0.8">
                                          <?php echo date('d.m.Y',strtotime($sdtr->tgl_surat))?>
                                        </p>
                                      </td>
                                    <td><?php echo $sdtr->ket_surat?></td>
                                    <td>
                                        <label class="labil labil-order">

                                            <?php echo  $sdtr->status_surat?>
                                        </label>
                                    </td>

                                 
                                   
                                    <td>
                                     <!-- <?php echo $this->m_dah->print_surat($sdtr->jenis_surat,$sdtr->surat_mohon_id);?> -->
                                     <!-- <?php echo $this->m_dah->jenis_surat_user($sdtr->jenis_surat,$sdtr->surat_mohon_id);?> -->
                                        <!-- update role nya di model/m_dah.php -->
                                        &nbsp;&nbsp;
                                     <?php echo $this->m_dah->jenis_surat_user($sdtr->jenis_surat,$sdtr->surat_mohon_id);?>
                                        
                                        <!-- untuk delete surat -->
                                     <!-- <?php echo $this->m_dah->delete_surat_admin($sdtr->jenis_surat,$sdtr->surat_mohon_id);?> -->
                                    
                                    </td>

                                
                                   </tr>

                              <?php }?> 
                            </tbody> 
                            </table>
                        </div>
                      </div>
                      <!-- end tabd diterima -->

                        <!-- start tab ditolak -->
                        <div class="tab-pane fade" id="ditolak" role="tabpanel" aria-labelledby="contact-tab">
                                      <div class="table-responsive">
                            <table class="table table-bordered" id="ditolak-tabel" width="100%" cellspacing="0">
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
                               <?php $n=1; foreach ($surat_ditolak as $sdtl) {?>
                                   <tr>
                                   <td><?php echo $n++;?></td>
                                    <td>
                                        <?php
                                            $px=array(
                                                'id' => $sdtl->penduduk_id
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
                                      <?php echo $sdtl->surat_mohon_id?>
                                        <p style="font-size: 11px;opacity: 0.8">
                                          <?php echo date('d.m.Y',strtotime($sdtl->tgl_diajukan))?>
                                        </p>
                                      </td>
                                    <td><?php echo $sdtl->ket_surat?></td>
                                    <td>
                                        <label class="labil labil-danger">

                                            <?php echo  $sdtl->status_surat?>
                                        </label>
                                    </td>

                                 
                                   
                                    <td>
                                     <?php echo $this->m_dah->jenis_surat_user($sdtl->jenis_surat,$sdtl->surat_mohon_id);?>
                                        <!-- update role nya di model/m_dah.php -->
                                        &nbsp;&nbsp;
                                        <!-- untuk delete surat -->
                                     <!-- <?php echo $this->m_dah->delete_surat_admin($sdtl->jenis_surat,$sdtl->surat_mohon_id);?> -->
                                    
                                    </td>

                                
                                   </tr>

                              <?php }?> 
                            </tbody> 
                            </table>
                        </div>

                        </div>
                        <!-- end tab ditolak -->
                  </div>


                </div>
                <!-- end card body -->
                 </div>
       </div>

 <!-- end arsip surat -->

<!-- end row -->
		</div>

</div>
