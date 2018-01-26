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
<?php
	$user="root";
	$pass="";
	$host="localhost";
	$db="uyeler";
	$baglan=mysqli_connect($host,$user,$pass);
	mysqli_select_db($baglan,'uyeler');
	mysqli_set_charset($baglan, "utf8");
?>
<div class="menu">
  <form id="form1" name="form1" method="post" action="">
  <table width="1007" height="239" border="4">
  <tr>
    <td width="93" height="58" align="center" valign="middle">Araç Sahibi TC:</td>
    <td width="205" align="center" valign="middle"><label for="textfield"></label>
      <input name="tc" type="text" class="font2" /></td>
      
    <td width="122" align="center" valign="middle">Ad:</td>
    <td width="203" align="center" valign="middle"><label for="textfield2"></label>
      <input name="ad" type="text" class="font2" id="textfield2" /></td>
      
    <td width="124" align="center" valign="middle">Soyad:</td>
    <td width="214" align="center" valign="middle"><label for="textfield3"></label>
      <input name="soyad" type="text" class="font2" id="textfield3" /></td>
  </tr>
  <tr>
    <td align="center" valign="middle">Aracın Adı:</td>
    <td align="center" valign="middle"><input name="aad" type="text" class="font2" id="textfield" value="" /></td>
    
    
    <td align="center" valign="middle">Aracın Modeli</td>
    <td align="center" valign="middle"><input name="amodel" type="text" class="font2" id="textfield4" /></td>
    
    
    <td align="center" valign="middle">Aracın Yılı</td>
    <td align="center" valign="middle"><input name="ayıl" type="text" class="font2" id="textfield5" /></td>
  </tr>
  <tr>
    <td align="center" valign="middle">Araç Plaka</td>
    <td align="center" valign="middle"><input name="aplaka" type="text" class="font2" id="textfield8" /></td>
    
    <td align="center" valign="middle">Araç Sahibi Tel</td>
    <td align="center" valign="middle"><input name="atel" type="text" class="font2" id="textfield6" /></td>
    
    <td align="center" valign="middle">Araç Sahibi E Posta:</td>
    <td align="center" valign="middle"><input name="aposta" type="text" class="font2" id="textfield7" /></td>
  </tr>
  <tr>
    <td colspan="6" align="center" valign="middle"><input name="button" type="submit" id="button" value="Aracı Güncelle" /></td>
    </tr>
  </table>


  </form>
<?php 
        if($_POST){
        
            $tc      =    $_POST["tc"];
            $ad    =    $_POST["ad"];
            $soyad    =    $_POST["soyad"];
			$a_ad=$_POST["aad"];
			$a_model=    $_POST["amodel"];
			$a_yil=$_POST["ayıl"];
			$a_plaka=$_POST["aplaka"];
			$a_tel=$_POST["atel"];
			$a_posta=$_POST["aposta"];
			
			$guncelle = mysqli_query($baglan,"update arackaydı set tc='$tc',ad='$ad',soyad='$soyad',a_ad='$a_ad',a_model='$a_model',a_yil='$a_yil',a_plaka='$a_plaka',a_tel='$a_tel',a_posta='$a_posta'   where tc = '$tc' ");
     		if($guncelle){
       			echo "Güncelleme Başarılı";
     		}
			else{
       			echo 'Bir hata oluştu';
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