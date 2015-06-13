<?php
include ("include/db_connect.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang-"en" lang="en">

<head>
       <meta http-equiv="content-type" content="text/html; charset=utf-8" />

       <link href="css/reset.css" rel="stylesheet" type="text/css"/>
       <link href="css/style.css" rel="stylesheet" type="text/css"/>
       <script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script> 
       <script type="text/javascript" src="/js/jcarousellite_1.0.1.js"></script> 
       <script type="text/javascript" src="/js/shop-script.js"></script> 
       <title>Интернет-Магазин Цифровой Техники</title>
	<style>
	li{
	    list-style-type: none;
}
	</style>
</head>
<body>

<div id="block-body">
<?php
	include("include/block-header.php");
?>
<div id="block-right">
<?php
	include("include/block-category.php");
	include("include/block-parameter.php");
	include("include/block-news.php");
?> 
</div>
<div id="block-content">
<div id="block-sorting">
<p id="nav-breadcrumbs"><a href="index.php" >Главная страница</a> \ <span>Все товары</span>
<ul id="options-list">
<li>Вид: </li>
<li><img id="style-grid" src="/images/icon-grid.png" /><li>
<li><img id="style-list" src="/images/icon-list.png" /><li>
<li>Сортировать:</li>
<li><a id="select-sort">Без сортировки</a>
<ul id="sorting-list">
<li><a href="" >От дешовых к дорогим</a> </li>
<li><a href="" >О дорогих к дешовым</a> </li>
<li><a href="" >Популярное</a> </li>
<li><a href="" >Новинки</a> </li>
<li><a href="" >От А до Я</a> </li>
</ul>
</li>
</ul>
</div>
<?php
	$result = mysql_query("SELECT * FROM db_shop",$link);
if (mysql_num_rows($result) > 0);
{
	$row = mysql_fetch_array($result);
do
{
	echo '
	<p>'.$row["title"].'</p>

';

}
	while ($row = mysql_fetch_array($result));
}
?>

</div>

<?php
	include("include/block-footpr.php");
?>

</div>
</body>
</html>	
