<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mühendislik Projesi</title>
<link href="main.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<body>

<div class="main">

<div class="header"><img src="banner-newcars.png" width="1346" height="235" /></div>
<div class="menu2">
<ul id="MenuBar1" class="MenuBarHorizontal">
    <li>      <a href="ekle.php" class="font"><strong><em>Araç Ekle</em></strong></a>    </li>
    <li><a href="guncelle.php" class="font"><strong><em>Araçı Güncelle</em></strong></a></li>
    <li><a class="font" href="sil.php"><strong><em>Araç Kaldır</em></strong></a>
      <ul class="font">
        <li><a class="MenuBarItemSubmenu" href="#">Öğe 3.1</a>
          <ul>
            <li><a href="#">Öğe 3.1.1</a></li>
            <li><a href="#">Öğe 3.1.2</a></li>
          </ul>
        </li>
        <li><a href="#">Öğe 3.2</a></li>
        <li><a href="#">Öğe 3.3</a></li>
      </ul>
    </li>
    <li><a href="listele.php" class="font"><strong><em>Araç Listele</em></strong></a></li>
  </ul>
</div>



<div class="icerik">
<div class="menu">
  <form id="form1" name="form1" method="post" action="">
    <p> <span class="font3"><em>Silmek İstediğiniz Aracın Plakasını Giriniz :</em></span>
<input name="tc" type="text" class="font2" id="textfield" />
    <input type="submit" name="button" id="button" value="Araç Kaydını Sil" />
    </p>
    <?php 

	$user="root";
	$pass="";
	$host="localhost";
	$db="uyeler";
	$baglan=mysqli_connect($host,$user,$pass);
	mysqli_select_db($baglan,'uyeler');
	mysqli_set_charset($baglan, "utf8");	
        if($_POST){
        
            // Formdan Gelen Kayıtlar
            $tc      =    $_POST["tc"];
			$sil = mysqli_query($baglan,"delete from arackaydı where tc='$tc'");
     		if($sil){
       			echo 'Silme İşleminiz Başarılı Bir Şekilde Gerçekleşmiştir...';
     		}
			else{
       			echo "Bir hata oluştu";
     		}		
		}
		
		

?>

    
    
</div>
<div class="giris"></div>
</div>




<div class="footer"> <br /><br />Bu Site Muhammed Yazıcı Tarafından Yapılmıştır... &copy;2018</div>


</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>