
  <?php foreach($data_surat as $ds){?>  
<div class="ket_surat">
    <b> <p style="text-decoration:underline;"> SURAT KETERANGAN PENGURANGAN ANGGOTA KARTU KELUARGA</p> </b>
    <span>Nomor : <?php echo $ds->nomor_surat?>/12/UC/SKPgAKK/<?php echo date(Y)?></span>                           
</div>

<div class="isi_surat">
<p>
Geuchik Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara , dengan ini menerangkan bahwa :
</p>

<p style="margin-top:20px;margin-bottom:-15px">
I. DATA KELUARGA
</p>

<table class="data_surat">
    <tbody>
        <tr>
            <td>Nama Kepala Keluarga &nbsp;&nbsp;</td>
            <td>:&nbsp;<?php echo $ds->kpl_keluarga?></td>
        </tr>

        <tr>
            <td>No. KK</td>
            <td>:&nbsp;<?php echo $ds->no_kk?></td>
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
<p style="margin-top:2px;margin-bottom:-15px">
II. DATA INDIVIDU PENGURANGAN

</p>
<table class="data_surat">
    <?php
        $where=array(
            'id' => $ds->penduduk_id
        );
        $data_diri = $this->m_dah->edit_data($where,'penduduk')->result();
        foreach ($data_diri as $dr){
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
            <td>Tempat / Tgl. lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
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
            <td>Pekerjaan</td>
            <td>:&nbsp;<?php echo $dr->pekerjaan?></td>
        </tr>

        <tr>
            <td>Status Perkawinan</td>
            <td>:&nbsp;<?php echo $this->m_dah->cek_nikah($dr->status_nikah)?></td>
        </tr>

        <tr>
            <td>Status Hub.Keluarga</td>
            <td>:&nbsp;<?php echo $this->m_dah->status_keluarga($dr->status_hub_keluarga)?></td>
        </tr>



     
        <?php }?> 
    </tbody>
</table>
<p style="margin-top:25px">
Benar yang tersebut namanya diatas penduduk Gampong Ulee Ceubrek Kecamatan Meurah Mulia Kabupaten Aceh Utara, dan benar ianya ingin melakukan <b>pengurangan</b> anggota dari Kartu Keluarga (KK).
</p>

<p style="margin-top:25px">
Demikian surat keterangan ini kami perbuat dengan sebenarnya agar dapat dipergunakan seperlunya. 
</p>

<div class="tanda_tangan" style="margin-top:20px">
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