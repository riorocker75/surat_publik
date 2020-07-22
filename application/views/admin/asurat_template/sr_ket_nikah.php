
  <?php foreach($data_surat as $ds){?>  
<div class="ket_surat">
    <b> <p style="text-decoration:underline;"> SURAT KETERANGAN SUDAH MENIKAH</p> </b>
    <span>Nomor : <?php echo $ds->nomor_surat?>/12/UC/SKSM/<?php echo date(Y)?></span>                           
</div>

<div class="isi_surat">
<p>
Geuchik Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara, dengan ini menerangkan bahwa :
</p>

<table class="data_surat">
    <?php
        $where_suami=array('id' => $ds->suami_id);
        $where_istri=array('id' => $ds->istri_id);

        $data_suami = $this->m_dah->edit_data($where_suami,'penduduk')->result();
        $data_istri = $this->m_dah->edit_data($where_istri,'penduduk')->result();
        foreach ($data_istri as $di) {}
        foreach ($data_suami as $dr){}
    ?>
    <tbody>
        <tr>
            <td>Nama </td>
            <td>:&nbsp;<?php echo $dr->nama?></td>
        </tr>

        <tr>
            <td>NIK</td>
            <td>:&nbsp;<?php echo $dr->nik?></td>
        </tr>

        <tr>
            <td>Tempat / Tgl. lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>:&nbsp;<?php echo $dr->tempat_lahir?>,&nbsp;<?php echo date("d-m-Y", strtotime($dr->tgl_lahir))?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:&nbsp;<?php 
            if($dr->jenis_kelamin == "pria"){
                echo "Laki-laki";
            }else{
                echo "Perempuan";
            }?>
            </td>
        </tr>

        <tr>
            <td>Agama</td>
            <td>:&nbsp;<?php echo $dr->agama?></td>

        </tr>

        <tr>
            <td>Pekerjaan</td>
            <td>:&nbsp;<?php echo $dr->pekerjaan?></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:&nbsp;Gampong Ulee Ceubrek</td>
        </tr>
        <tr>
            <td></td>
            <td>&nbsp;&nbsp;Kecamatan Meurah Mulia. Kabupaten Aceh Utara<td>
        </tr>
       
    </tbody>
</table>
<p style="margin-top:25px">
Benar yang tersebut namanya diatas adalah Penduduk Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara, dan sepengetahuan kami yang bersangkutan benar adalah termasuk seorang yang berstatus <b>Sudah Menikah</b> dengan :
</p>

<table class="data_surat">
    <tbody>
        <tr>
            <td>Nama </td>
            <td>:&nbsp;<?php echo $di->nama?></td>
        </tr>

        <tr>
            <td>NIK</td>
            <td>:&nbsp;<?php echo $di->nik?></td>
        </tr>

        <tr>
            <td>Tempat / Tgl. lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td>:&nbsp;<?php echo $di->tempat_lahir?>,&nbsp;<?php echo date("d-m-Y", strtotime($di->tgl_lahir))?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>:&nbsp;<?php 
            if($di->jenis_kelamin == "pria"){
                echo "Laki-laki";
            }else{
                echo "Perempuan";
            }?>
            </td>
        </tr>

        <tr>
            <td>Agama</td>
            <td>:&nbsp;<?php echo $di->agama?></td>

        </tr>

        <tr>
            <td>Pekerjaan</td>
            <td>:&nbsp;<?php echo $di->pekerjaan?></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>:&nbsp;Gampong Ulee Ceubrek</td>
            
            <!-- <td>:&nbsp;<?php echo $di->alamat ?></td> -->
        </tr>
        <tr>
            <td></td>
            <td>&nbsp;&nbsp;Kecamatan Meurah Mulia. Kabupaten Aceh Utara<td>

            <!-- <td>&nbsp;&nbsp;Kecamatan <?php echo $di->kecamatan ?>. Kabupaten <?php echo $di->kabupaten ?><td> -->
        </tr>
       
    </tbody>     
</table>



<p style="margin-top:25px">
Demikian surat keterangan ini kami perbuat dengan sebenarnya agar dapat dipergunakan seperlunya. 
</p>

<div class="tanda_tangan" style="margin-top:30px">
    <p style="text-align:center;">
    Gampong Ulee Ceubrek, <?php echo $this->m_dah->format_tanggal(date('Y-m-d',strtotime($ds->tgl_disahkan)))?>
    </p>
    <p style="text-align:center;margin-top:-15px;">
    Geuchik Gampong Ulee Ceubrek
    </p>

    <p style="text-align:center;margin-top:75px;text-decoration:underline">
    <b>NASRUL FADHIL, ST</b> 
    </p>

</div>
</div>

  <?php }?>