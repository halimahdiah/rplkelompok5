
<?php
  $head = 'Tambah Anggota';
  $header = 'Tambah Anggota';
  // require('../layout/header.php');
  //require ('../layout/nav.php');



?>

<script>
            function tampilkanPreview(gambar,idpreview){
//                membuat objek gambar
                var gb = gambar.files;
                
//                loop untuk merender gambar
                for (var i = 0; i < gb.length; i++){
//                    bikin variabel
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview=document.getElementById(idpreview);            
                    var reader = new FileReader();
                    
                    if (gbPreview.type.match(imageType)) {
//                        jika tipe data sesuai
                        preview.file = gbPreview;
                        reader.onload = (function(element) { 
                            return function(e) { 
                                element.src = e.target.result; 
                            }; 
                        })(preview);

    //                    membaca data URL gambar
                        reader.readAsDataURL(gbPreview);
                    }else{
//                        jika tipe data tidak sesuai
                        alert("Type file tidak sesuai. Khusus image.");
                    }
                   
                }    
            }
        </script>
<script type="text/javascript">
    function pilih_lokasi(dom,Location) {
    document.getElementById(dom).innerHTML="Loading ...";
    var xmlhttp=GetXmlHttpObject();
    if (xmlhttp==null) {
        alert ("Your browser does not support AJAX!");
        return;
    }
    // var date=new Date();
    // var timestamp=date.getTime();
    //alamat url script pemroses, sesuaikan dengan alamat url yang ada pada komputer anda
    var url="http://localhost/rplkelompok5/koleksi/option_lokasi.php";



    //menyusun variabel yang akan dikirimkan dengan AJAX
    var param="Location="+Location;
    
    //tidak perlu dirubah
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 || xmlhttp.readyState=="complete") {
            var res=xmlhttp.responseText;
            document.getElementById(dom).innerHTML=res;
        }
    }
    xmlhttp.open("POST",url,true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.setRequestHeader("Content-length", param.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(param);
    //tidak perlu dirubah
}


function GetXmlHttpObject() {
    var xmlhttp=null;
    try {
        // Firefox, Opera 8.0+, Safari
        xmlhttp=new XMLHttpRequest();
    }
    catch (e) {
        // Internet Explorer
        try {
            xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e) {
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlhttp;
}
    </script>

<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header" align="center">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h5 class="modal-title" id="exampleModal">Tambah Anggota</h5>
        </div>
        <div class="modal-body">
        <div id="dom_pesan"></div>
        <form method="post" action="simpan.php" enctype="multipart/form-data">

      <div class="row">
      <div class="col-md-3">ID Anggota</div>
      <div class="col-md-9"><input type="text" name="username" class="form-control"></div>
      </div>
      <div class="row">
      <div class="col-md-3">Nama</div>
      <div class="col-md-9"><input type="text" name="nama" class="form-control" value=""></div>
      </div>
      <div class="row">
      <div class="col-md-3">Jenis Kelamin</div>
      <div class="col-md-9"><input type="text" name="jk" class="form-control" value=""></div>
      </div>
      <div class="row">
      <div class="col-md-3">Tempat/Tanggal Lahir</div>
      <div class="col-md-4"><input type="text" name="tempat_lahir" class="form-control" value=""></div>
      <div class="col-md-5"><input type="date" name="tanggal_lahir" class="form-control" value=""></div>
      </div>
      <div class="row">
      <div class="col-md-3">Alamat</div>
      <div class="col-md-9"><input type="text" name="alamat" class="form-control" value=""></div>
      </div>
      <div class="row">
      <div class="col-md-3">Nomor Telepon</div>
      <div class="col-md-9"><input type="text" name="telepon" class="form-control" value=""></div>
      </div>
      <div class="row">
      <div class="col-md-3">Pekerjaan</div>
      <div class="col-md-9"><input type="text" name="pekerjaan" class="form-control" value=""></div>
      </div>
      <div class="row">
      <div class="col-md-3">Email</div>
      <div class="col-md-9"><input type="email" name="email" class="form-control" value=""></div>
      </div>

      <div align="right" style="margin-top: 15px">
      
      <div class="modal-footer">
        <button onclick="return konfirmasiTambah()" type="submit" class="btn btn-info" >Tambah</button>
      </div>
      
          <script type="text/javascript" language="JavaScript">
          function konfirmasiTambah()
          {
          tanya = confirm("Anda Yakin Sudah Memasukkan Data yang Benar ?");
          if (tanya == true) return true;
          else return false;
          }
          </script>
      <!-- <a onclick="return konfirmasi()" href="delete.php?Book_id=<?= $koleksi->Book_id ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a> -->
      </div>
  
</form>
</div>


                                                    </div>
                                                  </div>