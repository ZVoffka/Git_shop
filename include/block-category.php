<div id="block-category">
<p class="header-title">Категории товаров</p> 
	<ul>
<li><a><img src="/images/mobile-icon.gif" id="mobile-images" />Мобильные телефоны</a>
<ul class="category-section">
	<li><a href=""><strong>Все модели</strong></a></li>
<?php
 $result = mysql_query("SELECT * FROM category WHERE type='mobile'",$link);
 If (mysql_num_rows($result) > 0)
 {
	 $row = mysql_fetch_array($result);
do
{
	echo '
    <li><a href="view_cat.php?cat='.strtolower($row["brand"]).'&type='.$row["type"].'">'.$row["brand"].'</a></li>
    ';
}
while ($row = mysql_fetch_arrey($result));
 }
?>
</ul>
</li>
<li><a><img src="/images/book-icon.gif" id="book-images" />Ноутбуки</a>
<ul class="category-section">
	<li><a href=""><strong>Все модели</strong></a></li>
	<li><a href="">Подразде 1</a></li>
	<li><a href="">Подразде 1</a></li>
	<li><a href="">Подразде 2</a></li> 
</ul>
</li>
<li><a><img src="/images/table-icon.gif" id="table-imeges" />Планшеты</a>
<ul class="category-section">
	<li><a href=""><strong>Все модели</strong></a></li>
	<li><a href="">Подразде 1</a></li>
	<li><a href="">Подразде 2</a></li> 
	<li><a href="">Подразде 1</a></li>
	<li><a href="">Подразде 1</a></li>
	<li><a href="">Подразде 1</a></li>
</ul>
</li>

	</ul>
</div>
