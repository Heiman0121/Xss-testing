<form method="get">
 <input type="text" name="search">
 <input type="submit" value="Search">
 </form>

<?php
if ($_GET)
{
echo $_GET["search"];
}
?>