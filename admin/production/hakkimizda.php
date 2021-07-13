<?php 
include "header.php";
?>



<?php
include "../functions/baglan.php";

$ayarsor2=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:xid");

$ayarsor2->execute(array(

  "xid"=>0
));

$hakcek= $ayarsor2->fetch(PDO::FETCH_ASSOC);





?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Hakkimizda Ayarlar</h3>
              </div>

            
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form asd <small style="color:purple";>
                      
                   ..  Güncelleme işlem Durumu : 
                    
                    <?php 
                    

                    if(isset($_GET["durum"])){

                     if($_GET["durum"]=="ok"){
                       echo " BAŞARILI";
                     }
                     if($_GET["durum"]=="no"){
                      echo " BAŞARISIZ";
                    }

                    }
                    
                    
                    ?>
                      


                    </small></h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="../functions/islem.php"   method="POST"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık 
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $hakcek["hakkimizda_baslik"]  ?>"   
                           name="hakkimizda_baslik" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik 
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $hakcek["hakkimizda_icerik"]  ?>"   
                           name="hakkimizda_icerik" type="textarea" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>


                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vizyon 
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $hakcek["hakkimizda_vizyon"]  ?>"   
                           name="hakkimizda_vizyon" type="textarea" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>


                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Misyon 
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $hakcek["hakkimizda_misyon"]  ?>"   
                           name="hakkimizda_misyon" type="textarea" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>

                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Video Link
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $hakcek["hakkimizda_video"]  ?>"   
                           name="hakkimizda_video" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>

                    


                   
                      
                      <div class="ln_solid"></div>


                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        
                          <button name="hakkimizdakaydet" type="submit" class="btn btn-success">Güncelle</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>





        

            

           

          </div>
        </div>
        <!-- /page content -->

       <?php include "footer.php"; ?>
       