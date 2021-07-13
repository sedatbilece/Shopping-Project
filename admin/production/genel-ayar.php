<?php 
include "header.php";
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Genel Ayarlar</h3>
              </div>

            
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small style="color:red";>
                      
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

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Başlığı 
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $ayarcek["ayar_title"]  ?>"   
                           name="ayar_title" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Açıklaması 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  value="<?php  echo $ayarcek["ayar_desc"]  ?>"  name="ayar_desc" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Anahtar Kelimeler 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $ayarcek["ayar_keywords"]  ?>" name="ayar_keywords" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Yazar
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $ayarcek["ayar_author"]  ?>" name="ayar_author" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>


                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        
                          <button name="genelayarkaydet" type="submit" class="btn btn-success">Güncelle</button>
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
       