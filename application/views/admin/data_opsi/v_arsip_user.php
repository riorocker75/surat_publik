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
                        Di Terima <span class="labil labil-success count"><?php echo $total_terima;?></span>
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
                               
                                    <td><?php echo $sm->surat_mohon_id?></td>
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
                                   
                                    <td><?php echo $st->nomor_surat?></td>
                                    <td><?php echo $st->ket_surat?></td>
                                    <td><?php echo $st->syarat?></td>
                                    <td>
                                        <label class="labil labil-success">

                                            <?php echo  $st->status_surat?>
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
                                  
                                    <td><?php echo $stl->surat_mohon_id?></td>

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
                     <!-- mulai bagian review tabel  -->
                        <div class="table-responsive">
                            <table class="table table-bordered" id="lain-review-tabel" width="100%" cellspacing="0">
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
                                    <a href=""></a>
                                        <!-- <a href="<?php echo base_url().'admin/penduduk_delete/'.$sm->surat_mohon_id?>"> <i class="fas fa-trash-alt    "></i></a> -->
                                        <!-- update role nya di model/m_dah.php -->
                                   
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




		</div>
</div>
