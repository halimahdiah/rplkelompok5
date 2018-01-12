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

<!-- Modal -->
                                                  
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h5 class="modal-title" id="exampleModal">Edit Koleksi</h5>
                                                        
                                                      </div>
                                                      <div class="modal-body">


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
      <div class="col-md-9"><input type="text" name="Type" class="form-control" value="<?= $koleksi->Type ?>"></div>
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
      <div class="col-md-9"><input type="text" name="Location" class="form-control" value="<?= $koleksi->Location ?>"></div>
      </div>
      <div class="row">
      <div class="col-md-3">Status Buku</div>
      <div class="col-md-9"><input type="text" name="Status" class="form-control" value="<?= $koleksi->Status ?>"></div>
      </div>
      <div class="row">
      <div class="col-md-3">Photo</div>
      <div class="col-md-9"><input type="file" name="file" accept="image/*" onchange="tampilkanPreview(this,'preview')" value="<?= $koleksi->Photo ?>"></div>
      </div>
      <div align="right" style="margin-top: 15px">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      <button onclick="return konfirmasiUbah()" type="submit" class="btn btn-info" >Update</button>
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
                                                