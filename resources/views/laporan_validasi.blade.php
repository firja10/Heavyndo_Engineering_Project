<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Validasi {{$jenis_projek->nama_projek}}</title>

    <style>
        #tabel_surat th, #tabel_surat td{

            padding-top:10px;
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
            <td width = "400"> : No.__/PPC/PHE/VII/20__</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td width = "400"> : Laporan Proyek</td>
        </tr>

        <tr>
            <td>Lampiran</td>
            <td width = "400"> : TIdak Ada</td>
        </tr>

        <tr></tr>

        <tr >
            <td style = "padding-top:20px; padding-bottom:20px;">Kepada Yth,</td>
            <td width = "400" style = "padding-top:20px; padding-bottom:20px;"></td>
        </tr>


    </table>


    <table align ="center" id = "tabel_surat_3">

        <tr>
            <td width = "450"> <b>Pimpinan</b> </td>
            {{-- <td width = "340"></td> --}}
        </tr>

        <tr>
            <td width = "450"> <b>PT. Perkasa Heavyndo Engineering</b> </td>
            {{-- <td width = "20"></td> --}}
        </tr>
        <tr>
            <td width = "450"> <b>Di</b></td>
            {{-- <td width = "340"></td> --}}
        </tr>

        <tr>
            <td width = "450"> <b>Bandung</b></td>
            {{-- <td width = "250"></td> --}}
        </tr>

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
            <td width= "450" style = "text-align: justify">{{$jenis_projek->nama_projek}} - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td>
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
            <td width = "100">RAB Projek</td>
            <td width = "350"> : <?php 
            
            $format_rupiah = 'Rp .' . number_format($anggaran_total,2,',','.');

            echo $format_rupiah;
             ?></td>
        </tr>

    </table>

    <br>

    <table align = "left" id = "tabel_surat_6">

        <tr>
            <td width= "450" style = "text-align: justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</td>
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
            Hallo
            
            </td>
            <td width= "270px" style = "text-align: center">
            Ollah</td>
        </tr>

    <tr>
            <td width= "270px" style = "text-align: center;">
            </td>

            <td width= "270px" style = "text-align: center" height="50px">
            </td>
    </tr>




        <tr>
            <td width= "270px" style = "text-align: center;">
                Fairuz Firjatullah    
            </td>
            
            <td width= "270px" style = "text-align: center">
                Andre Jibral
            </td>
        </tr>


    </table>






    <br><br>





    
</body>
</html>