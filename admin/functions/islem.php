<?php

include "baglan.php";


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


?>