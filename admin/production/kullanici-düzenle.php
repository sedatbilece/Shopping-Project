<?php 
include "header.php";



$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:xid ");

$kullanicisor->execute(array(
"xid"=> $_GET["id"]




));

$kulcek= $kullanicisor->fetch(PDO::FETCH_ASSOC);



?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Kullanıcı Güncelle</h3>
              </div>

            
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small style="color:purple";>
                      
                    Güncelleme işlem Durumu : 
                    
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

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad 
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $kulcek["kullanici_ad"]  ?>"   
                           name="kullanici_ad" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>

                       <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail 
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $kulcek["kullanici_mail"]  ?>"   
                           name="kullanici_mail" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>

                       <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yetki 
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $kulcek["kullanici_yetki"]  ?>"   
                           name="kullanici_yetki" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>


                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Durum 
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $kulcek["kullanici_durum"]  ?>"   
                           name="kullanici_durum" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>

                      <input value="<?php  echo $kulcek["kullanici_id"]  ?>"   
                           name="kullanici_id" type="hidden"  >

                    



                     
                      
                      <div class="ln_solid"></div>


                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        
                          <button name="kullanici-düzenle" type="submit" class="btn btn-success">Güncelle</button>
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
       