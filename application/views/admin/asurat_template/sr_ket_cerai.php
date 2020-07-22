 <?php foreach ($data_surat as $ds) { ?>
     <div class="ket_surat">
         <b>
             <p style="text-decoration:underline;"> SURAT KETERANGAN BERCERAI</p>
         </b>
         <span>Nomor : <?php echo $ds->nomor_surat ?>/12/UC/SKB/<?php echo date(Y) ?></span>
     </div>

     <div class="isi_surat">
         <p>
             Geuchik Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara, dengan ini menerangkan bahwa :
         </p>

         <table class="data_surat">
             <?php
                $where_pertama = array('id' => $ds->pertama_id);
                $where_kedua = array('id' => $ds->kedua_id);

                $data_pertama = $this->m_dah->edit_data($where_pertama, 'penduduk')->result();
                $data_kedua = $this->m_dah->edit_data($where_kedua, 'penduduk')->result();
                foreach ($data_kedua as $di) {
                }
                foreach ($data_pertama as $dr) {
                }
                ?>
             <tbody>
                 <tr>
                     <td>1.&nbsp;&nbsp;Nama </td>
                     <td>:&nbsp;<?php echo $dr->nama ?></td>
                 </tr>

                 <tr>
                     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIK</td>
                     <td>:&nbsp;<?php echo $dr->nik ?></td>
                 </tr>

                 <tr>
                     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat / Tgl. lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                     <td>:&nbsp;<?php echo $dr->tempat_lahir ?>,&nbsp;<?php echo date("d-m-Y", strtotime($dr->tgl_lahir)) ?></td>
                 </tr>

                 <tr>
                     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin</td>
                     <td>:&nbsp;<?php
                                if ($dr->jenis_kelamin == "pria") {
                                    echo "Laki-laki";
                                } else {
                                    echo "Perempuan";
                                } ?>
                     </td>
                 </tr>

                 <tr>
                     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agama</td>
                     <td>:&nbsp;<?php echo $dr->agama ?></td>

                 </tr>

                 <tr>
                     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
                     <td>:&nbsp;<?php echo $dr->pekerjaan ?></td>
                 </tr>
                 <tr>

                     <td></td>

                 </tr>
             </tbody>
         </table>
         <p style="margin-top:-2px;padding-left: 1.14cm;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Selanjutnya disebut sebagai <b>PIHAK PERTAMA</b></p>


         <table class="data_surat">
             <tbody>
                 <tr>
                     <td>2.&nbsp;&nbsp;Nama </td>
                     <td>:&nbsp;<?php echo $di->nama ?></td>
                 </tr>

                 <tr>
                     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIK</td>
                     <td>:&nbsp;<?php echo $di->nik ?></td>
                 </tr>

                 <tr>
                     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempat / Tgl. lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                     <td>:&nbsp;<?php echo $di->tempat_lahir ?>,&nbsp;<?php echo date("d-m-Y", strtotime($di->tgl_lahir)) ?></td>
                 </tr>

                 <tr>
                     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jenis Kelamin</td>
                     <td>:&nbsp;<?php
                                if ($di->jenis_kelamin == "pria") {
                                    echo "Laki-laki";
                                } else {
                                    echo "Perempuan";
                                } ?>
                     </td>
                 </tr>

                 <tr>
                     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agama</td>
                     <td>:&nbsp;<?php echo $di->agama ?></td>

                 </tr>

                 <tr>
                     <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pekerjaan</td>
                     <td>:&nbsp;<?php echo $di->pekerjaan ?></td>
                 </tr>

                 <tr>

                     <td></td>

                 </tr>


             </tbody>
         </table>
         <p style="margin-top:-2px;padding-left: 1.14cm;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Selanjutnya disebut sebagai <b>PIHAK KEDUA</b></p>

         <p style="margin-top:25px">
             Benar yang tersebut namanya diatas adalah Penduduk Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara, bahwa dengan ini kedua belah pihak baik PIHAK PERTAMA maupun PIHAK KEDUA telah sepakat untuk <b>BERCERAI</b> dengan tanpa adanya paksaan dari siapapun. Oleh sebab itu, kedua belah pihak tidak ada lagi memiliki hubungan pernikahan dalam bentuk apapun, kecuali hubungan anak kandung.
         </p>
         <p style="margin-top:25px">
             Demikian surat keterangan ini kami perbuat dengan sebenarnya agar dapat dipergunakan seperlunya.
         </p>

         <div class="tanda_tangan" style="margin-top:30px">
             <p style="text-align:center;">
                 Gampong Ulee Ceubrek, <?php echo $this->m_dah->format_tanggal(date('Y-m-d', strtotime($ds->tgl_disahkan))) ?>
             </p>
             <p style="text-align:center;margin-top:-15px;">
                 Geuchik Gampong Ulee Ceubrek
             </p>

             <p style="text-align:center;margin-top:75px;text-decoration:underline">
                 <b>NASRUL FADHIL, ST</b>
             </p>

         </div>
     </div>

 <?php } ?>