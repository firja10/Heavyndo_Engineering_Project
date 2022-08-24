<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Validasi {{$jenis_projek->nama_projek}}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        #tabel_surat th, #tabel_surat td{

            padding-top:2px;
            padding-right:10px;
            padding-left:10px;
            padding-bottom:3px;
        }

        body {
  padding: .5in;
}

</style>
</head>
<body>

    <table align="center" id = "tabel_surat">
        <tr>
            <td>
                <img src = "{{public_path('logo_pt.jpeg')}}" width = "70">
            </td>
            <td>
                <center>
                    <font size = "5"> <b> SISTEM INFORMASI <br>
                        PT. PERKASA
                        HEAVYNDO 
                        ENGINEERING </b></font>
                </center>
            </td>
            {{-- <td>
                <font size = "4">
                    No.__/PPC/PHE/VII/20__
                </font>
                </td> --}}
        </tr>
        <tr>
            <td colspan = "3"> <hr></td>
        </tr>
    </table>

   

    <table align = "center" id = "tabel_surat_2">
        <tr>
            <td>Nomor</td>
            <td width = "400"> : No.{{$jenis_projek->id}}/PPC/PHE/VII/2022</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td width = "400"> : Laporan Proyek</td>
        </tr>

        <tr>
            <td>Lampiran</td>
            <td width = "400"> : 2 Berkas</td>
        </tr>

        <tr></tr>

        <tr >
            <td style = "padding-top:20px; padding-bottom:20px;">Kepada Yth,</td>
            <td width = "400" style = "padding-top:20px; padding-bottom:20px;"></td>
        </tr>


    </table>


    <table align ="center" id = "tabel_surat_3">

        <tr>
            <td width = "450"> <b>Pimpinan PT. Perkasa Heavyndo Engineering</b> </td>
            {{-- <td width = "340"></td> --}}
        </tr>

        {{-- <tr>
            <td width = "450"> <b>PT. Perkasa Heavyndo Engineering</b> </td>
        </tr> --}}

        <tr>
            <td width = "450"> <b>di Tempat</b></td>
            {{-- <td width = "340"></td> --}}
        </tr>
{{-- 
        <tr>
            <td width = "450"> <b>Bandung</b></td>

        </tr> --}}

    </table>

    <br>
    <table align = "left" id = "tabel_surat_4">
       
        <tr>
            <td width = "450">Dengan Hormat,</td>
            {{-- <td width = "475"></td> --}}
        </tr>

    </table>

    <br>

    <table align = "left" id = "tabel_surat_5">

        <tr>
            <td width= "450" style = "text-align: justify">Diberitahukan informasi bahwa client dengan nama projek <b>{{$jenis_projek->nama_projek}}</b>. Adapun deskripsi projek sebagai berikut : </td>
        </tr>

    </table>

    <br>

    <table align = "left" id = "tabel_surat_6">

        <tr>
            <td width = "100" >Nama Projek</td>
            <td width = "350"> :  {{$jenis_projek->nama_projek}}</td>
        </tr>

        <tr>
            <td width = "100">Deskripsi Projek</td>
            <td width = "350"> :  {{$jenis_projek->deskripsi_projek}}</td>
        </tr>

        {{-- <tr>
            <td width = "100">Aktivitas Projek</td>
            <td width = "350"> :</td>
        </tr> --}}

        <?php
        
        $anggaran_total = DB::table('anggarans')->where('projek_id', $jenis_projek->id)->sum('anggarans.rab');

        ?>

        <tr>
            <td width = "100">Anggaran Projek</td>
            <td width = "350"> : <?php 
            
            $format_rupiah = 'Rp .' . number_format($anggaran_total,2,',','.');

            echo $format_rupiah;
             ?></td>
        </tr>

        <tr>
            <td width = "100">Durasi Projek</td>
            <td width = "350"> :  {{$jenis_projek->durasi_projek}}</td>
        </tr>




    </table>

    <br>

    <table align = "left" id = "tabel_surat_6">

        <tr>
            <td width= "450" style = "text-align: justify">Adapun hal-hal yang berkaitan dengan proyek tersebut, bisa ditinjau secara langsung dilapangan.</td>
        </tr>

    </table>

    <br>

    {{-- <table align = "center" id = "tabel_surat_7">

        <tr>
            <td width= "590" style = "text-align: justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</td>
        </tr>

    </table> --}}

    <br>


    <table align = "center" id = "tabel_surat_8">

        <tr>
            <td width= "270px" style = "text-align: center;">
            Supervisor Perusahaan
            </td>
            <td width= "270px" style = "text-align: center">
            Manajer Perusahaan</td>
        </tr>

    <tr>
            <td width= "270px" style = "text-align: center;">
            
                <img src="{{public_path('ttd_fairuz.jpg')}}" alt="" width="100">


            </td>

            <td width= "270px" style = "text-align: center" height="50px">

                <img src="{{public_path('TTD_LENGKAP.png')}}" alt="" width="150">

            </td>
    </tr>




        <tr>
            <td width= "270px" style = "text-align: center;">
                PT. PERKASA HEAVYNDO ENGINEERING 
            </td>
            
            <td width= "270px" style = "text-align: center">
                PT. PERKASA HEAVYNDO ENGINEERING 
            </td>
        </tr>


    </table>






    <br><br> <br>








    <table align = "center" id = "tabel_surat_9" >

        <tr>
            <td width= "350px" style = "text-align: center;">
            RINCIAN ANGGARAN BELANJA
            </td>
        </tr>

    </table>






    
    <table align = "center" id = "tabel_surat_10" border ="1" style = "margin-top:20px;page-break-after: always" class = "table table-bordered">

        <tr>
            <td style = "text-align: center;">
                <b>Nama Anggaran</b>            
            </td>
            
            <td style = "text-align: center">
            <b>Anggaran</b>
            </td>
        </tr>


             



        
        @foreach ($anggaran as $item_anggaran)

        <tr>
            <td style = "text-align: center;">
           {{$item_anggaran->detail_nama}}
            </td>
            
            <td style = "text-align: center">
                <?php 
                    
                    $anggaran_akhir = number_format($item_anggaran->rab,2,',','.');

                    echo 'Rp. ' . $anggaran_akhir;

                    ?>
            {{-- {{$item_anggaran->rab}} --}}
        </td>
            
        </tr>


        @endforeach




 
    </table>
































    

    <br>



    <table align = "center" id = "tabel_surat_9" >

        <tr>
            <td style = "text-align: center;">
            AKTIVITAS PROJEK
            </td>
        </tr>

    </table>






    
    <table align = "center" id = "tabel_surat_10" border ="1" style = "margin-top:20px" class = "table table-bordered">

        <tr>
            <td style = "text-align: center;">
                <b>Nama Aktivitas</b>            
            </td>
            
            <td style = "text-align: center">
            Penanggung Jawab</td>
            
            <td style = "text-align:center">
                Persentase Progress
            </td>

            <td style = "text-align:center">
                Tanggal Awal Aktivitas
            </td>

            <td style = "text-align:center">
                Tanggal Akhir Aktivitas
            </td>
        

        </tr>


             



        
        @foreach ($aktivitas as $item_aktivitas)

        <?php 
        
        $bulan = array(	1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember');

        $tanggal_awal_aktiv = explode('-',$item_aktivitas->tanggal_awal);

        $tanggal_akhir_aktiv = explode('-', $item_aktivitas->tanggal_akhir);


        $last_date = $tanggal_akhir_aktiv[2] . ' ' . $bulan[(int)$tanggal_akhir_aktiv[1]] . ' ' . $tanggal_akhir_aktiv[0];

        $first_date = $tanggal_awal_aktiv[2] . ' ' . $bulan[(int)$tanggal_awal_aktiv[1]] . ' ' . $tanggal_awal_aktiv[0];


        ?>






        <tr>
            <td style = "text-align: center;">
           {{$item_aktivitas->nama_aktivitas}}
            </td>
            
            <td style = "text-align: center">
            {{$item_aktivitas->penanggung_jawab}}
        </td>

        <td style = "text-align: center">
        {{$item_aktivitas->persentase_progress}}
        </td>

        <td>
            <?php echo $first_date; ?>
        </td>

        <td>
            <?php echo $last_date; ?>
        </td>



        </tr>


        @endforeach




 
    </table>



















    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





    
</body>
</html>