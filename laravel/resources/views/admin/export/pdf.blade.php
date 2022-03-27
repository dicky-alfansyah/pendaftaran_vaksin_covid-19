<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
 
 <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
 
<style class="text/css">
.gambar{
    width:200px;
}

.table-condensed {
    font-size: 11px;
  }
html {
			    background-color: #fff;
			    height: 100%;
			    position: relative;
			    z-index: 0;
			}
			body {
			    background-color: #fff;
			    font-family: Arial, Helvetica, sans-serif;
			    font-size: 12px;
			}
			@font-face {
			    font-family: 'GillSansMT-Light';
			    src: url('../fonts/GillSansMT-Light.eot?#iefix') format('embedded-opentype'),
			    url('../fonts/GillSansMT-Light.woff') format('woff'),
			    url('../fonts/GillSansMT-Light.ttf')  format('truetype'),
			    url('../fonts/GillSansMT-Light.svg#GillSansMT-Light') format('svg');
			    font-weight: normal;
			    font-style: normal;
			}

			.element-invisible {
			    position: absolute;
			    left: -99999px;
			}
			a {
			    color: #377ea5;
			}
			a:hover, a:focus, a:active {
			    color: #0d587a;
			    outline: thin dotted #0d587a;
			}
			.published, .dates, .createdby, .category-name {
			    font-style: italic;
			}

			/* Page */

			.page {
			    background-color: #fff;
			    padding: 0 20px 20px;
			    margin-bottom: 15px;
			    font-size: 12px;
			    line-height: 18px;
			    /*overflow: hidden;*/
			    overflow: visible;
			    display: inline-block;
			    width: 100%;
			}
			.page h2 {
			    font-size: 20px;
			    font-weight: bold;
			    color: #0d587a;
			    margin: 0;
			}
			.page h3 {
			    font-size: 16px;
			    font-weight: bold;
			    margin: 20px 0 10px;
			}
			.page .well.border {
			    background-color: transparent;
			    border: 2px solid #cdd6da;
			}
			.page h4:not(.media-heading) {
			    font-size: 14px;
			    font-weight: bold;
			    color: #0d587a;
			    margin: 20px 0 10px;
			}
			.page .well h3, .page .well h4 {
			    margin: 0 0 10px;
			}

			/*** File intro ***/

			.file-intro {
			    overflow: hidden;
			    margin-bottom: 20px;
			    background-color: #377ea5;
			}
			.file-intro,
			.file-intro a,
			.file-intro a:hover {
			    color: #fff;
			}
			.file-intro .file-desc-wrapper {
			    float: left;
			    width: 60%;
			}
			.file-intro .file-image {
			    float: right;
			    width: 40%;
			}
			.file-desc {
			    padding: 30px;
			}

			/** Component OPERATING SHEET **/
			.img-responsive {
			    height: auto !important;
			    width: auto !important;
			}

			/** PAGE BLOCS PROPOSED SHEET **/

			.cs_sheet {
			    position: relative;
			}
			#watermark {
				display: block;
				position: fixed;
				top: -10%;
				left: 105px;
				transform: rotate(-45deg);
				transform-origin: 50% 50%;
				opacity: .3;
				font-size: 80px;
				color: #eee;
				width: 480px;
				text-align: center;
			}

			.article-info dd {
				margin-left: 0;
			}

			.table-pdf {
				display: table;
			}
			.file-intro, .table-pdf-row {
				opacity: 1;
				display: table-row;
			}
			.file-intro .file-desc-wrapper {
				display: table-cell;
				color: #fff;
				background-color: #377ea5;
			}
			.file-intro .file-image, .table-pdf-cell {
				display: table-cell;
			}
			.img-responsive {
				display: inline-block;
			}

			ul.image-gallery {
				margin-top: 20px;
			    margin: 0;
			    padding: 0;
			    list-style-type: none;
			}
			ul.image-gallery li {
				display: inline;
			}
			ul.image-gallery li img {
				margin-bottom: 10px;
				z-index: 1;
				position: relative;
			    text-align: center;
			}
			.image-gallery a {
			    margin-bottom: 20px;
			    display: inline-block;
			}

</style>

</head>
<body class="container">
    <center>
        <img src="{{asset('img/logo.png')}}" class="gambar"><br>
        <h5>Layanan Vaksin Covid-19</h5>
        <h6 class=" text-success"><b>RSUD Wilayah X</b></h6>
    </center>
    <div id="watermark">
    AyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksin<br/>
       AyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksin<br/>
          AyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksin<br/>
             AyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksin<br/>
                AyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksin<br/>
                   AyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksin<br/>
                      AyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksin<br/>
                         AyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksin<br/>
                            AyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksin<br/>
AyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksinAyoVaksin<br/>
	</div>
    
            <div class="card border-success mb-3">
                <div class="card-header bg-success border-success border-2"><b></b></div>
                <div class="card-body text-success">
                    <table class="table table-condensed table-bordered table-hover">
                         @foreach ($data_pendaftaran_vaksin as $jv)
                        <thead>
                             <tr>
                                <th>Nomor Registrasi</th>
                                <td>NR-AV-00{{$jv->id}}</td>
                            </tr>
                            <tr>
                                <th>Nik</th>
                                <td>{{$jv->nik}}</td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>{{$jv->nama_lengkap}}</td>
                            </tr>
                            <tr>
                                <th>No Hp Penerima Sertifikat Vaksin</th>
                                <td>{{$jv->no_hp}}</td>
                            </tr>
                            <tr>
                                <th>Dosis Vaksin</th>
                                <td>{{$jv->dosis_vaksin}}</td>
                            </tr>
                            <tr>
                                <th>Jenis Vaksin</th>
                                <td>{{$jv->jenis_vaksin}}</td>
                            </tr>
                            <tr>
                                <th>Jadwal Vaksin Anda</th>
                                <td> {{Carbon\Carbon::parse($jv->jadwal_vaksin)->translatedFormat('l, d F Y') }}</td>
                               
                            </tr>
                        </thead>
                        @endforeach
                    </table>
                </div>
            </div>
       
</body>
</html>