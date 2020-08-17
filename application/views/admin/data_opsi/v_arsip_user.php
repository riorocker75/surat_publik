<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Data Pengajuan Surat</h1>
  <a href="<?php echo base_url()?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i></i> Kembali</a>
  
</div>
        <!-- Content Row -->
        <div class="row">
           

            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Jejak Pengajuan Surat </h6>
                    </div>
                 <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="true">
                            Review <span class="labil labil-order count"><?php echo $total_review;?></span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#diterima" role="tab" aria-controls="diterima" aria-selected="false">
                        Selesai <span class="labil labil-success count"><?php echo $total_terima;?></span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ditolak" role="tab" aria-controls="ditolak" aria-selected="false">
                        Di Tolak <span class="labil labil-danger count"><?php echo $total_tolak;?></span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">

                        <!-- mulai bagian review tabel  -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="review-tabel" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th width="2%">No</th>
                                <th>Nomor Ajuan</th>
                                <th>Jenis Surat</th>
                                <th>Status</th>

                                <th width="3%">Opsi</th>
                                
                                </tr>
                            </thead> 
                            <tbody>
                               <?php $n=1; foreach ($surat_review as $sm ) {?>
                                   <tr>
                                   <td><?php echo $n++;?></td>
                               
                                    <td><?php echo $sm->surat_mohon_id?>
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
                                        <?php echo $this->m_dah->jenis_surat_user($sm->jenis_surat,$sm->surat_mohon_id);?>
                                        <!-- <a href="<?php echo base_url().'admin/penduduk_delete/'.$sm->surat_mohon_id?>"> <i class="fas fa-trash-alt    "></i></a> -->
                                        <!-- update role nya di model/m_dah.php -->
                                   
                                    </td>

                                   </tr>

                              <?php }?> 
                            </tbody> 
                            </table>
                        </div>

                        <!-- end bagian tabel review -->

                    </div>
                    <!-- review tab -->

                  <div class="tab-pane fade" id="diterima" role="tabpanel" aria-labelledby="diterima-tab">
                        <!-- mulai bagian diterima tabel  -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="diterima-tabel" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th width="2%">No</th>
                                <th>Nomor Surat</th>
                                <th>Jenis Surat</th>
                                <th>Keterangan</th>

                                <th>Status</th>

                                <th width="3%">Opsi</th>
                                
                                </tr>
                            </thead> 
                            <tbody>
                               <?php $n=1; foreach ($surat_terima as $st ) {?>
                                   <tr>
                                   <td><?php echo $n++;?></td>
                                   
                                    <td><?php echo $st->nomor_surat?>
                                        <p style="font-size: 11px;opacity: 0.8">
                                          <?php echo date('d.m.Y',strtotime($st->tgl_surat))?>
                                        </p>
                                    </td>
                                    <td><?php echo $st->ket_surat?></td>
                                    <td><?php echo $st->syarat?></td>
                                    <td>
                                        <label class="labil labil-success">
                                            <?php 
                                            if($st->status_surat == "diterima"){
                                              echo "Selesai";
                                            }
                                            ?>
                                           
                                        </label>
                                    </td>

                                    <td>
                                        <?php echo $this->m_dah->jenis_surat_user($st->jenis_surat,$st->surat_mohon_id);?>
                                        <!-- <a href="<?php echo base_url().'admin/penduduk_delete/'.$st->surat_mohon_id?>"> <i class="fas fa-trash-alt    "></i></a> -->
                                        <!-- update role nya di model/m_dah.php -->
                                   
                                    </td>

                                   </tr>

                              <?php }?> 
                            </tbody> 
                            </table>
                        </div>  

                        <!-- end bagian tabel diterima -->
                  </div>
                  <!-- end terima  -->
                    
                    <div class="tab-pane fade" id="ditolak" role="tabpanel" aria-labelledby="ditolak-tab">
                        <!-- mulai bagian ditolak tabel  -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="ditolak-tabel" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th width="2%">No</th>
                                <th>Nomor Ajuan</th>

                                <th>Jenis Surat</th>
                                <th>Keterangan</th>
                                <th>Status</th>

                                <th width="3%">Opsi</th>
                                
                                </tr>
                            </thead> 
                            <tbody>
                               <?php $n=1; foreach ($surat_tolak as $stl ) {?>
                                   <tr>
                                   <td><?php echo $n++;?></td>
                                  
                                    <td><?php echo $stl->surat_mohon_id?>
                                        <p style="font-size: 11px;opacity: 0.8">
                                          <?php echo date('d.m.Y',strtotime($stl->tgl_diajukan))?>
                                        </p>
                                    </td>

                                    <td><?php echo $stl->ket_surat?></td>
                                    <td><?php echo $stl->syarat?></td>

                                    <td>
                                        <label class="labil labil-danger">

                                            <?php echo  $stl->status_surat?>
                                        </label>
                                    </td>

                                 
                                   
                                    <td>
                                        <?php echo $this->m_dah->jenis_surat_user($stl->jenis_surat,$stl->surat_mohon_id);?>
                                        <!-- <a href="<?php echo base_url().'admin/penduduk_delete/'.$stl->surat_mohon_id?>"> <i class="fas fa-trash-alt    "></i></a> -->
                                        <!-- update role nya di model/m_dah.php -->
                                   
                                    </td>

                                   </tr>

                              <?php }?> 
                            </tbody> 
                            </table>
                        </div>

                        <!-- end bagian tabel ditolak -->
                    </div>

                    <!-- end ditolak -->
                </div>

                    
                    </div>
                </div>
            </div>

            <div class="col-lg-12 mb-4">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Jejak Pengajuan Surat Lain </h6>
                    </div>
               
                      <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            
                            <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#lain-review" role="tab" aria-controls="profile" aria-selected="false">
                                 Review <span class="labil labil-order count"><?php echo $total_lain_review;?></span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#lain-diterima" role="tab" aria-controls="profile" aria-selected="false">
                                 Selesai <span class="labil labil-success count"><?php echo $total_lain_terima;?></span>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#lain-ditolak" role="tab" aria-controls="contact" aria-selected="false">
                                Di Tolak <span class="labil labil-danger count"><?php echo $total_lain_tolak;?></span>
                              </a>
                            </li>
                         </ul>

                             <div class="tab-content" id="myTabContent">
                             <!-- mulai bagian surat lain review -->
                                 <div class="tab-pane fade show active" id="lain-review" role="tabpanel" aria-labelledby="contact-tab">
                                      <div class="table-responsive">
                                          <table class="table table-bordered" id="lain-review-tabel" width="100%" cellspacing="0">
                                          <thead>
                                              <tr>
                                              <th width="2%">No</th>
                                              <th>Nomor Ajuan</th>
                                              <th>Jenis Surat</th>
                                              <th>Status</th>

                                              <th width="5%">Opsi</th>
                                              
                                              </tr>
                                          </thead> 
                                          <tbody>
                                             <?php $n=1; foreach ($surat_lain_review as $slr ) {?>
                                           
                                                 <?php 
                                                      $id_lain=array('id' => $slr->surat_id);
                                                      $opsr=$this->m_dah->edit_data($id_lain,'jenis_surat')->result();
                                                      foreach ($opsr as $opr) { }
                                                 ?>
                                                 <tr>
                                                 <td><?php echo $n++;?></td>
                                           
                                                  <td><?php echo $slr->nomor_mohon_surat?>
                                                    <p style="font-size: 11px;opacity: 0.8">
                                                      <?php echo date('d.m.Y',strtotime($slr->tgl_ajukan))?>
                                                    </p>
                                                  </td>
                                                  <td><?php echo $opr->nama_surat?></td>

                                                  <td>
                                                     <?php echo $this->m_dah->status_surat_lain($slr->status)?>
                                                  </td>

                                                  <td>
                                                  
                                                     <a href="<?php echo base_url().'user/lihat_surat_lain/'.$slr->nomor_mohon_surat?>"> <i class="fa fa-eye"></i> </a>
                                                    
                                                     
                                                  </td>

                                                 </tr>

                                            <?php }?> 
                                          </tbody> 
                                          </table>
                                      </div>
                                    </div>
                             <!-- end surat lain review -->

                             <!-- mulai bagian surat lain selesai-->
                                 <div class="tab-pane fade show" id="lain-diterima" role="tabpanel" aria-labelledby="contact-tab">
                                      <div class="table-responsive">
                                          <table class="table table-bordered" id="lain-diterima-tabel" width="100%" cellspacing="0">
                                          <thead>
                                              <tr>
                                              <th width="2%">No</th>
                                              <th>Nomor Surat</th>
                                              <th>Jenis Surat</th>
                                              <th>Keterangan</th>
                                              <th>Status</th>

                                              <th width="5%">Opsi</th>
                                              
                                              </tr>
                                          </thead> 
                                          <tbody>
                                             <?php $n=1; foreach ($surat_lain_terima as $sl ) {?>
                                           
                                                 <?php 
                                                      $id_lain=array('id' => $sl->surat_id);
                                                      $ops=$this->m_dah->edit_data($id_lain,'jenis_surat')->result();
                                                      foreach ($ops as $op) { }
                                                 ?>
                                                 <tr>
                                                 <td><?php echo $n++;?></td>
                                          
                                                  <td><?php echo $sl->nomor_surat?>
                                                    <p style="font-size: 11px;opacity: 0.8">
                                                      <?php echo date('d.m.Y',strtotime($sl->tgl_disahkan))?>
                                                    </p>
                                                  </td>
                                                  <td><?php echo $op->nama_surat?></td>
                                                  <td><?php echo $sl->info?></td>

                                                  <td>
                                                     <?php echo $this->m_dah->status_surat_lain($sl->status)?>
                                                  </td>

                                                  <td>
                                                  
                                                     <a href="<?php echo base_url().'user/lihat_surat_lain/'.$sl->nomor_mohon_surat?>"> <i class="fa fa-eye"></i> </a>
                                                     
                                                    
                                                  </td>

                                                 </tr>

                                            <?php }?> 
                                          </tbody> 
                                          </table>
                                      </div>
                                    </div>
                             <!-- end surat lain terima -->
                             
                             <!-- mulai bagian surat lain tolak -->
                                 <div class="tab-pane fade" id="lain-ditolak" role="tabpanel" aria-labelledby="contact-tab">
                                     <div class="table-responsive">
                                        <table class="table table-bordered" id="lain-ditolak-tabel" width="100%" cellspacing="0">
                                        <thead>
                                          <tr>
                                          <th width="2%">No</th>
                                          <th>Nomor Ajuan</th>
                                          <th>Jenis Surat</th>
                                          <th>Keterangan</th>
                                          <th>Status</th>

                                          <th width="5%">Opsi</th>
                                          
                                          </tr>
                                        </thead> 
                                        <tbody>
                                         <?php $n=1; foreach ($surat_lain_tolak as $slt ) {?>
                                             <?php 
                                                  $id_lain_tolak=array('id' => $slt->surat_id);
                                                  $ops_tolak=$this->m_dah->edit_data($id_lain_tolak,'jenis_surat')->result();
                                                  foreach ($ops_tolak as $opt) { }
                                             ?>
                                             <tr>
                                             <td><?php echo $n++;?></td>
                                        
                                              <td><?php echo $slt->nomor_mohon_surat?>
                                                <p style="font-size: 11px;opacity: 0.8">
                                                  <?php echo date('d.m.Y',strtotime($slt->tgl_ajukan))?>
                                                </p>
                                              </td>
                                              <td><?php echo $opt->nama_surat?></td>
                                              <td><?php echo $slt->info?></td>

                                              <td>
                                                 <?php echo $this->m_dah->status_surat_lain($slt->status)?>
                                              </td>

                                              <td>
                                              <a href="<?php echo base_url().'user/lihat_surat_lain/'.$slt->nomor_mohon_surat?>"> <i class="fa fa-eye"></i> </a>
                                            
                                              </td>

                                             </tr>

                                        <?php }?> 
                                        </tbody> 
                                        </table>
                                    </div>

                                  </div>  
                             <!-- end surat lain tolak -->

                            </div>

                      </div>

                       
                </div> 

             </div>




        </div>
</div>
