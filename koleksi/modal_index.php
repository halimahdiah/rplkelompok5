<?php
 $database = 'siperpustakaan'; //nama database
 $user = 'root'; //nama user db
 $pass = '1998'; //pass db
 $host = 'localhost'; //host db, sesuaikan dengan settingan di komputer masing2.

 $conn = mysqli_connect($host,$user,$pass,$database);

 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }

 $id = $_GET['Book_id'];
 $sql = "select * from book where Book_id='".$id."'";
 $result = mysqli_query($conn,$sql); 
 
 while($row=mysqli_fetch_assoc($result)){
  $Photo=$row['Photo'];
  $Title=$row['Title']; 
  $Author=$row['Author'];
  $Publisher=$row['Publisher'];
  $Tahun_terbit=$row['Tahun_terbit'];
  $ISBN=$row['ISBN'];
  $Total_page=$row['Total_page'];
  $Location=$row['Location'];
  $Type=$row['Type'];
  $Jumlah_copy=$row['Jumlah_copy'];
  $Status=$row['Status'];
  
 }
?>


                                                <!-- Modal -->
                                                
                                                  <div class="modal-dialog" role="document">
                                                    <div class="modal-content" align="center">
                                                      <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <h5 class="modal-title" id="exampleModalLabel">Detail Koleksi</h5>
                                                        
                                                      </div>
                                                      <div class="modal-body">
                                                      <img src="../image/<?= $Photo ?>" width="30%"> <br>
                                                      <h3><?= $Title ?></h3>
                                                      <h4><i><?= $Author ?></i></h4>
                                                      <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <tr align="left">
                                                                <td>Penerbit:</td>
                                                                <td><?= $Publisher ?></td>
                                                            </tr>
                                                            <tr align="left">
                                                                <td>Tahun Terbit:</td>
                                                                <td><?= $Tahun_terbit ?></td>
                                                            </tr>
                                                            <tr align="left">
                                                                <td>ISBN:</td>
                                                                <td><?= $ISBN ?></td>
                                                            </tr>
                                                            <tr align="left">
                                                                <td>Total Halaman:</td>
                                                                <td><?= $Total_page ?></td>
                                                            </tr>
                                                            <tr align="left">
                                                                <td>Lokasi:</td>
                                                                <td><?= $Location ?></td>
                                                            </tr>
                                                            <tr align="left">
                                                                <td>Tipe Buku:</td>
                                                                <td><?= $Type ?></td>
                                                            </tr>
                                                            <tr align="left">
                                                                <td>Jumlah:</td>
                                                                <td><?= $Jumlah_copy ?></td>
                                                            </tr>
                                                            <tr align="left">
                                                                <td>Status:</td>
                                                                <td><?= $Status ?></td>
                                                            </tr>
                                                        
                                                        </table>
                                                      </div>
                                                      </div>
                                                      <!-- <div class="modal-footer">
                                                        <button type="button" class="btn btn-info" data-dismiss="modal">Yes</button>
                                                      </div> -->
                                                    </div>
                                                  </div>
                                                </div>
                                                <!-- Modal End -->
