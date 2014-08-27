<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<!-- test -->
<?php

 session_start(); 
  $data_array = @file('cn.txt');
  $server=rtrim($data_array[0]);
  $DB=rtrim($data_array[1]);
  $loginDB=rtrim($data_array[2]);
  $passwordDB=rtrim($data_array[3]);

    if (!mysql_connect($server, $loginDB, $passwordDB)) {
	echo "Could not connect to DB";
	exit;
	}	
    mysql_select_DB($DB) or exit("Could not select DB");


echo '<title>'.$GLOBALS["seoTitle"].'</title>';  
echo '<meta name="keywords" content="'.$GLOBALS["seoKeywords"].'"/>';
echo '<meta name="description" content="'.$GLOBALS["seoDescription"].'"/>';
?>
  <META http-equiv=Content-Type content="text/html; charset=windows-1251">
  <meta name='yandex-verification' content='5902a294fe8b0de1' />
   <link rel="icon" href="favicon.ico" type="image/x-icon">
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
  <LINK type="text/css" rel="StyleSheet" href="style.css">
</head>

<body topmargin="3" leftmargin="2" rightmargin="2" background="image/background.jpg">



<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" >

<TR> <td width="100%" colspan="3" align="left" height="25" background="image/green_yellow.jpg" style="font-size:12px">
<?php
echo $GLOBALS["seoHeaderText"];
?>
</td> 
</TR>

<TR> 
<td width="240" valign="top" align="left" height="200"> <a href="/"><img border="0" src="image/logo.jpg" alt="Пиломатериалы: доска, брус, брусок" title="Главная"></a> </td> 

<td width="100%" valign="top" align="center" height="200"  >
<table valign="top" height="200" width="100%" border="0" cellpadding="0" cellspacing="0" background="image/top200.jpg">
<tr>
<td width="50%" valign="top" align="left" height="200" > <img valign="top" height="200" src="image/top200.jpg"></td>
<td width="580" valign="top" align="center" height="200" > <img valign="top" align="center" width="580" height="255" title="Деревянные окна и двери, доска, брус" alt="Деревянные окна и двери, доска, брус" src="image/drevstroy.jpg"></td>
<td  width="50%" valign="top" align="right" height="200" > <img valign="top" height="200" src="image/top200.jpg"></td>
</tr>
</table>
</td>	

<td width="180" valign="top" align="right"  height="200"> <img width="180" height="200" src="image/center_4.jpg" ></td> 	

</TR>
</TABLE>

<TABLE width="100%" border="0" cellpadding="0" cellspacing="0">
<TR><td align="center" colspan="3" align="left"  height="25" background="image/green_yellow.jpg"><strong>Лучший дом себе построй - приезжайте к нам в Древострой! </strong></td></TR>

<TR>
	<td align="left" width="240" valign="top">
	
          <br>
           <table border="1" width="240" bordercolor="#996633">
             	<tr>
               	   <td width="100%">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%" background="image/green_yellow.jpg" >
                         <tr>
                           <td class="menuheader" >Меню</td>
			  </tr>
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
                   </td>
                </tr>
               

             </table>
	<br>

	  
	</td>

	
	
	<td valign="top" align="center" height="900">
	<br>
