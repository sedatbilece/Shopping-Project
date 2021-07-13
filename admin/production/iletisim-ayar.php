<?php 
include "header.php";
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>İletişim Ayarlar</h3>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon numarası
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $ayarcek["ayar_tel"]  ?>"   
                           name="ayar_tel" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon numarası GSM
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $ayarcek["ayar_gsm"]  ?>"   
                           name="ayar_gsm" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">faks numarası 
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $ayarcek["ayar_faks"]  ?>"   
                           name="ayar_faks" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $ayarcek["ayar_mail"]  ?>"   
                           name="ayar_mail" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İl
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $ayarcek["ayar_il"]  ?>"   
                           name="ayar_il" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İlçe
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $ayarcek["ayar_ilce"]  ?>"   
                           name="ayar_ilce" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Adres
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $ayarcek["ayar_adres"]  ?>"   
                           name="ayar_adres" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mesai
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input value="<?php  echo $ayarcek["ayar_mesai"]  ?>"   
                           name="ayar_mesai" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                     
                      
                      <div class="ln_solid"></div>


                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        
                          <button name="iletisimayarkaydet" type="submit" class="btn btn-success">Güncelle</button>
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
       