<?php
  $head = 'Edit Koleksi';
  $header = 'Edit Koleksi';
  //require('../layout/header.php');
  //require ('../layout/nav.php');

  try {
    $koneksi = new PDO('mysql:host=localhost;
    dbname=siperpustakaan','root','1998');
  } catch (PDOException $e) {
    die($e->getMessage());
  }

  $id = $_GET['Book_id'];
  
  $query = $koneksi->prepare('SELECT * FROM book WHERE Book_id = :Book_id');
  
  $query->bindParam(':Book_id', $id);

  $query->execute();

  $koleksi = $query->fetch(PDO::FETCH_OBJ);

  // var_dump($koleksi);

?>
<?php session_start() ?>

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

<!-- Modal -->
                                                  
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header" align="center">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h5 class="modal-title" id="exampleModal">Edit Koleksi</h5>
                                                        
                                                      </div>
                                                      <div class="modal-body">
                                                       <?php if (isset($_SESSION['error'])): ?>
    <!-- <div class="alert alert-danger alert-dismissible" role="alert"> -->
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4><strong>Gagal !</strong></h4><?= $_SESSION['error'] ?>
    <!-- </div> -->
  <?php endif; ?>
  <?php unset($_SESSION['error']) ?>
<div id="dom_pesan"></div>
  <form method="post" action="update.php?Book_id=<?= $koleksi->Book_id ?>" enctype="multipart/form-data">

      <div class="row">
      <div class="col-md-3">ID Buku</div>
      <div class="col-md-9">
        <input type="text" name="Book_id" class="form-control" value="<?= $koleksi->Book_id ?>" disabled>
      </div>
      </div>
      <div class="row">
      <div class="col-md-3">Judul Buku</div>
      <div class="col-md-9"><input type="text" name="Title" class="form-control" value="<?= $koleksi->Title ?>"></div>
      </div>
      <div class="row">
      <div class="col-md-3">Pengarang</div>
      <div class="col-md-9"><input type="text" name="Author" class="form-control" value="<?= $koleksi->Author ?>"></div>
      </div>
      <div class="row">
      <div class="col-md-3">Penerbit</div>
      <div class="col-md-9"><input type="text" name="Publisher" class="form-control" value="<?= $koleksi->Publisher ?>"></div>
      </div>
      <div class="row">
      <div class="col-md-3">Tahun Terbit</div>
      <div class="col-md-9"><input type="text" name="Tahun_terbit" class="form-control" value="<?= $koleksi->Tahun_terbit ?>"></div>
      </div>
      <div class="row">
      <div class="col-md-3">Tipe Buku</div>
      <div class="col-md-9">
        <select class="form-control" name="Type" value="" onchange="pilih_lokasi('dom_Location',this.value);">
        <option value="<?= $koleksi->Type ?>" selected><?= $koleksi->Type ?></option>
        <option value="Umum">Umum</option>
        <option value="Filsafat">Filsafat</option>
        <option value="Agama">Agama</option>
        <option value="Sosial">Sosial</option>
        <option value="Bahasa">Bahasa</option>
        <option value="Ilmu Murni">Ilmu Murni</option>
        <option value="Ilmu Terapan">Ilmu Terapan</option>
        <option value="Kesenian">Kesenian</option>
        <option value="Kesusasteraan">Kesusasteraan</option>
        <option value="Ilmu Bumi">Ilmu Bumi</option>
        </select>
      </div>
      </div>
      <div class="row">
      <div class="col-md-3">Total Halaman</div>
      <div class="col-md-9"><input type="text" name="Total_page" class="form-control" value="<?= $koleksi->Total_page ?>"></div>
      </div>
      <div class="row">
      <div class="col-md-3">ISBN</div>
      <div class="col-md-9"><input type="text" name="ISBN" class="form-control" value="<?= $koleksi->ISBN ?>"></div>
      </div>
      <div class="row">
      <div class="col-md-3">Jumlah Buku</div>
      <div class="col-md-9"><input type="text" name="Jumlah_copy" class="form-control" value="<?= $koleksi->Jumlah_copy ?>"></div>
      </div>
      <div class="row">
      <div class="col-md-3">Lokasi Buku</div>
      <div class="col-md-9">
      <select class="form-control" name="Location" value="" id="dom_Location">
      <option selected><?= $koleksi->Location ?></option>
    </select>
      </div>
      </div>
      <div class="row">
        <div class="col-md-3">Status Buku</div>
          <div class="col-md-9">
            <select class="form-control" name="Status" value="<?= $koleksi->Status ?>">
            <option selected><?= $koleksi->Status ?></option>
            <option>Available</option>
            <option>Not Available</option>
            </select>
        </div>
      </div>
      <div class="row">
      <div class="col-md-3">Photo</div>
      <div class="col-md-9">
        <input type="file" name="file" accept="image/*" onchange="tampilkanPreview(this,'preview')">
        <img id="preview" src="../image/<?= $koleksi->Photo ?>" width="30%"> <br>
      </div>
      </div>
      
      
      <div align="right" style="margin-top: 15px">
      
      <div class="modal-footer">
        <button onclick="return konfirmasiUbah()" type="submit" class="btn btn-info" >Update</button>
      </div>
      
          <script type="text/javascript" language="JavaScript">
          function konfirmasiUbah()
          {
          tanya = confirm("Anda Yakin Mengubah Data ?");
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
                                                