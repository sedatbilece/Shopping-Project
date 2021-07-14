<?php 
include "header.php";




$kullanicisor=$db->prepare("SELECT * FROM kullanici ");

$kullanicisor->execute();




?>



 <!-- page content -->
 <div class="right_col" role="main">
          <div class="">
          

            <div class="clearfix"></div>

              



         


<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      
      <th scope="col">Tarih</th>
      <th scope="col">Ad</th>
      <th scope="col">Mail</th>
      <th scope="col">Yetki</th>
      <th scope="col">Durum</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>

  <tbody>


  <?php while($kulcek= $kullanicisor->fetch(PDO::FETCH_ASSOC) )
  
  { ?>


<tr>
     
      <td> <?php echo $kulcek["kullanici_zaman"];?> </td>
      <td><?php echo $kulcek["kullanici_ad"];?> </td>
      <td><?php echo $kulcek["kullanici_mail"];?> </td>
      <td><?php echo $kulcek["kullanici_yetki"];?> </td>
      <td><?php echo $kulcek["kullanici_durum"];?> </td>
     
      <td><a href="kullanici-düzenle.php?id=<?php echo $kulcek["kullanici_id"];?>"><Button class="btn btn-primary btn-xs">Düzenle</Button></a></td>
      <td><Button class="btn btn-danger btn-xs">Sil</Button></td>
      
    </tr>

  <?php } ?>
 
  
   
  </tbody>
</table>

            
            </div>
          </div>
        </div>
        <!-- /page content -->







<?php include "footer.php"; ?>