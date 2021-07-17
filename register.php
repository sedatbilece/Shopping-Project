<?php  include "header.php" ; ?> 






<div class="container">
  <div class="row">
    <div class="col">
    

    </div>
    <div class="col-6">
     
	<div class="title-bg">
	<div class="title">Kayıt Ol</div>
					</div>

<form action="admin/functions/islem.php" method="post">


<div class="form-group">
						<div class="col-sm-12">
							<input type="text" class="form-control" name="kullanici_ad" placeholder="Ad Soyad">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<input type="email" class="form-control"  name="kullanici_mail"  placeholder="Mail (Mail ile giriş yapılacaktır)">
						</div>
					</div>
					<div class="form-group dob">
						<div class="col-sm-6">
							<input type="password" class="form-control"  name="kullanici_sifre" placeholder="Şifre">
						</div>
						<div class="col-sm-6">
							<input type="password" class="form-control"  name="kullanici_sifre2" placeholder="Şifre Tekrar Giriniz">
						</div>
					</div>

                    <div class="form-group">
						<div class="col-sm-12">
                        <button class="btn btn-success xs"  name="kullanicikaydet" type="submit">Kayıt Ol</button>
						</div>
					</div>
                    



</form>


    </div>
    <div class="col">
    
    </div>
  </div>

</div>


				
					
					
				