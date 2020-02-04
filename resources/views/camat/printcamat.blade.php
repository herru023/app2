<html>
<head><title>Laporan Agenda Camat</title><link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css"><style>body {font-family: "Roboto";font-size: 7px;}.info{font-size:12px;} .gridtable {width:100%;font-size:11px;padding:30px;color:#333333;border-width: 1px;border-color: #666666;border-collapse: collapse;}.gridtable th {border-width: 1px;padding: 15px;border-style: solid;border-color: #666666;}.gridtable tr {border-width: 1px;padding: 20px;border-style: solid;border-color: #666666;}.gridtable td {border-width: 1px;  padding: 5px;border-style: solid;border-color: #666666;background-color: #ffffff;}table {font-family: "Roboto";font-size: 11px;}table.header {font-size:11px;color:#333333;border-width: 0px;border-color: #666666;border-collapse: collapse;}table.header th {border-width: 0px;padding: 8px;border-style: solid;border-color: #666666;background-color: #dedede;}table.header td {border-width: 0px;padding: 8px;border-style: solid;border-color: #666666;background-color: #ffffff;}page[size="A4"] { background: white;width: 21cm;height: 29.7cm;display: block;margin: 0 auto;padding-left: 25px;padding-right: 25px;padding-top: 25px;margin-bottom: 0.5cm;border:1px solid #dadada}@media print {body, page[size="A4"] {margin: 0;padding-left: 0px;padding-right: 0px;border:0px solid #dadada}}</style></head>
<body>
    <page size="A4">
        <table width="100%">
            <tbody>
            	<tr>
            	<td align="center"><img  src="{{asset('publicadmin/img/logoprint.png')}}" alt="tidak ada gambar" width="70px"></td>
                    <td align="" style="font-size:16px;font-weight:bold; width: 80%">PEMERINTAHAN KOTA BANJARMASIN<br>
                    	<b style="font-size:14px;font-weight:bold;">KECAMATAN BANJARMASIN TENGAH</b><br>
                    <b style="font-size:10px;">Jl. Pulau Laut Rt.5 No.7 Telepon. (0511) 3365880 Fax (0511) 3365881 <b>Kelurahan Antasan Besar Banjarmasin</b><br>E-mail : <u style="color: blue">kec.banteng@gmail.com</u>, Banjarmasin 70114</b>
                </td><br>
         

                </tr>
            </tbody>
        </table>
        <br>
        <hr>
        <br>
        <table width="100%">
            <tbody><tr>
                <td align="center" style="font-size:14px;font-weight:bold;">Laporan Agenda Camat</td>
            </tr>
            <tr>
            	<td>
            		
            	</td>
            </tr>
            
        </tbody>
    	</table>
    	<table id="khs_table" class="table table-bordered gridtable" style="font-size:11px;margin-top:15px" border="1">
	        <thead bgcolor="#fff">
	          <tr>
				<th style="width:3%">No</th>
	            <th style="width:30%;" class="hidden-xs">Hari, Waktu dan Tanggal</th>
	            <th style="width:15%;">Kegiatan</th>
	            <th style="width:15%;">Tempat</th>
	            <th style="width:15%;">bertugas</th>
	          </tr>
	        </thead>
	        <tbody>
				<?php $no = 0;?>
              	@foreach($surat as $row)
              	<?php $no++;?>
              	 <tr>
              	 	<td align="center">{{ $no }}</td>
              	 	<td align="center">{{ $row->hari }}, {{ $row->waktu }}, {{ $row->tglkegiatan }}</td>
              	 	<td>{{ $row->kegiatan }}</td>
              	 	<td>{{ $row->tempat }}</td>
              	 	<td>{{ $row->bertugas }}</td>
              	 </tr>
              	 @endforeach
	        </tbody>
	    </table>
        <br>
        <br>
        <br>
        <br>
        <table width="100%" class="info">
          <tbody>
            <tr>
              <td width="30%"></td>
              <td width="30%"></td>
              <td width="40%">Yang menyatakan,....../....../2020 :<br>Camat<br><br><br><br><br><br></td></tr>
              <tr>
                <td width="30%"></td>
                <td width="2%"></td>    
                <td width="68%">
                  .................................................................<br>
                  Drs. H. Diyanoor, MA <br>NIP. 19690119 199010 1 001
                </td>
              </tr>
              <tr>  
                <td width="30%"></td><td width="2%"></td>    
              </tr>
            </tbody>
          </table>
    </page>
</body>
</html>