<?php

include "baglan.php";

# ADMİN LOGİN İSLEMİ

if(isset($_POST["admingiris"])){

echo $_POST["kullanici_mail"];
echo $_POST["kullanici_password"];






}










     # GENEL AYAR UPDATE İSLEMİ 

if(isset($_POST["genelayarkaydet"])){


    $ayarkaydet= $db -> prepare("UPDATE ayar SET 
    
    ayar_title=:xtit,
    ayar_desc=:xdesc,
    ayar_keywords=:xkey,
    ayar_author=:xaut  
    WHERE ayar_id=1
    
    ");
    
    $update= $ayarkaydet->execute(array(
    
    "xtit"=> $_POST["ayar_title"],
    "xdesc"=> $_POST["ayar_desc"],
    "xkey"=> $_POST["ayar_keywords"],
    "xaut"=> $_POST["ayar_author"], 
    
    ));
    
    if($update){
        header("Location:../production/genel-ayar.php?durum=ok");
    }
    else{
        header("Location:../production/genel-ayar.php?durum=no");
    }
    
    
    }



   # İLETİSİM AYAR UPDATE İSLEMİ 

if(isset($_POST["iletisimayarkaydet"])){


$ayarkaydet= $db -> prepare("UPDATE ayar SET 

ayar_tel=:xtel,
ayar_gsm=:xgsm,
ayar_faks=:xfak,
ayar_mail=:xmai,
ayar_il=:xil,
ayar_ilce=:xilc,
ayar_adres=:xadr,
ayar_mesai=:mes 
WHERE ayar_id=1

");

$update= $ayarkaydet->execute(array(

"xtel"=> $_POST["ayar_tel"],
"xgsm"=> $_POST["ayar_gsm"],
"xfak"=> $_POST["ayar_faks"],
"xmai"=> $_POST["ayar_mail"], 
"xil"=> $_POST["ayar_il"],
"xilc"=> $_POST["ayar_ilce"],
"xadr"=> $_POST["ayar_adres"],
"mes"=> $_POST["ayar_mesai"], 

));

if($update){
    header("Location:../production/iletisim-ayar.php?durum=ok");
}
else{
    header("Location:../production/iletisim-ayar.php?durum=no");
}


}



# APİ UPDATE İSLEMLERİ

if(isset($_POST["apiayarkaydet"])){


    $ayarkaydet= $db -> prepare("UPDATE ayar SET 
    
    ayar_analystic=:xanl,
    ayar_maps=:xmap,
    ayar_zopim=:xzop
     
    WHERE ayar_id=1
    
    ");
    
    $update= $ayarkaydet->execute(array(
    
    "xanl"=> $_POST["ayar_analystic"],
    "xmap"=> $_POST["ayar_maps"],
    "xzop"=> $_POST["ayar_zopim"],
    
    
    ));
    
    if($update){
        header("Location:../production/api-ayar.php?durum=ok");
    }
    else{
        header("Location:../production/api-ayar.php?durum=no");
    }
    
    
    }




      #    HAKKIMIZDA UPDATE İSLEMLERİ

    if(isset($_POST["hakkimizdakaydet"])){
    
    
        $ayarkaydet= $db -> prepare("UPDATE hakkimizda SET 
        
        hakkimizda_baslik=:xbas,
        hakkimizda_icerik=:xice,
        hakkimizda_vizyon=:xviz,
        hakkimizda_misyon=:xmis,
        hakkimizda_video=:xvid
         
        WHERE hakkimizda_id=0
        
        ");
        
        $update= $ayarkaydet->execute(array(
        
        "xbas"=> $_POST["hakkimizda_baslik"],
        "xice"=> $_POST["hakkimizda_icerik"],
        "xviz"=> $_POST["hakkimizda_vizyon"],
        "xmis"=> $_POST["hakkimizda_misyon"],
        "xvid"=> $_POST["hakkimizda_video"]
        
        
        ));
        
        if($update){
            header("Location:../production/hakkimizda.php?durum=ok");
        }
        else{
            header("Location:../production/hakkimizda.php?durum=no");
        }
        
        
        }
    
    



?>