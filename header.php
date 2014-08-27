<?php
 session_start(); 
  $data_array = @file('cn.txt');
  $server=rtrim($data_array[0]);
  $DB=rtrim($data_array[1]);
  $loginDB=rtrim($data_array[2]);
  $passwordDB=rtrim($data_array[3]);

  if (!mysql_connect($server, $loginDB, $passwordDB)) {
    die("Could not connect to DB");
	}	
  mysql_select_DB($DB) or exit("Could not select DB");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

<?php
  echo '<title>'.$GLOBALS["seoTitle"].'</title>';  
  echo '<meta name="keywords" content="'.$GLOBALS["seoKeywords"].'"/>';
  echo '<meta name="description" content="'.$GLOBALS["seoDescription"].'"/>';
?>
  <meta http-equiv=Content-Type content="text/html; charset=windows-1251">
  <meta name='yandex-verification' content='5902a294fe8b0de1' />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
  <LINK type="text/css" rel="StyleSheet" href="style.css">
  <link type="text/css"  rel="stylesheet" href="smslider/smslider.css" />
  <script type="text/javascript" src="http://yandex.st/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="smslider/jquery.smslider.min.js"></script>
  <script>
  $(document).ready(function(){
      $('#slider').smSlider({
        transition : 'animate',
        autoPlay : true,
        subMenu : true,
        subMenuClass : 'sm_submenu-item',
        pagination : false

      });
  });
  </script>
</head>

<body>

<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="top">
  <TR>
    <td width="100%" colspan="3" align="left" height="25" background="image/green_yellow.jpg" style="font-size:12px">
    <?php echo $GLOBALS["seoHeaderText"];?>
    </td>
  </TR>
</table>

<div class="header">
  <div class="logo">
    <a href="./"><img src="image/logo.png" title="" alt=""></a>
  </div>
  <div class="span1">
    <div class="name">База строительных материалов</div>
  </div>
  <div class="span1 phones">
    Звоните сейчас<br><strong style="color:#F00530">8 (473) 229-67-40</strong><br>8 (920) 211- 67- 40
  </div>
  <div class="span1 address">
    Адрес: <strong>г. Воронеж,<br>ул. Тихий Дон, 57<br><a href="./contact.php#map">карта проезда</a></strong>
  </div>
</div>

<div class="pl-slider">
  <div id="slider">
    <ul>
      <li><img src="image/drevstroy.jpg"></li>
      <li><img src="image/slide-2.jpg"></li>
      <li><img src="image/slide-3.jpg"></li>
      <li><img src="image/slide-1.jpg"></li>
    </ul>
  </div>
  <div class="slidermenu">
    <ul>
      <li><a class="sm_submenu-item" href="#" data-index="0">Пиломатериалы</a></li>
      <li><a class="sm_submenu-item" href="#" data-index="1">Крепёж</a></li>
      <li><a class="sm_submenu-item" href="#" data-index="2">Утеплители</a></li>
      <li><a class="sm_submenu-item" href="#" data-index="3">Доставка</a></li>
    </ul>
  </div>
</div>

<TABLE width="100%" border="0" cellpadding="0" cellspacing="0">
<TR>
<td align="left" width="240" valign="top">
<table border="1" width="240" bordercolor="#996633">
<tr>
  <td width="100%">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" background="image/green_yellow.jpg" >
      <tr><td class="menuheader" >Меню</td></tr>
    </table>                 
  </td>
</tr> 

<tr>
<td width="100%">
<table border="0" bordercolor="#47734C" width="100%"  bordercolordark="#47734C">
  <tr>
    <td width="100%" >
    <table border="0" cellpadding="2" cellspacing="3" width="100%">
      <tr><td class="menuitems" background="image/menuitem.jpg"> <a href="/">Главная</a></td></tr>       
      <tr><td class="menuitems" background="image/menuitem.jpg"> <a href="doski_v_Voronezhe.php">Доска обрезная</a></td></tr>  
      <tr><td class="menuitems" background="image/menuitem.jpg"> <a href="brus_v_Voronezhe.php">Брус</a></td></tr>    
      <tr><td class="menuitems" background="image/menuitem.jpg"> <a href="sushka_drevesiny.php">Сушка древесины</a></td></tr> 
      <tr><td class="menuitems" background="image/menuitem.jpg"> <a href="price_v_Voronezhe.php">Цены на пиломатериалы</a></td></tr>
      <tr><td class="menuitems" background="image/menuitem.jpg"> <a href="photo.php">Фотогалерея</a></td></tr>  
      <tr><td class="menuitems" background="image/menuitem.jpg"> <a href="contact.php">Контакты</a></td></tr>                      
    </table>
    </td>
  </tr>
  </table> 
  </td>
  </tr>	
  <tr>
  <td>

  <img src="./image/banner.gif">
  </img>

  </td>					
  </tr>
</table>
</td>
<td valign="top" align="center" height="900">
