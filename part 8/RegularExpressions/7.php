<?php
$str_1 = "3ali4";
$pattern_1 = "/(\d...\d)/";
echo preg_match($pattern_1, $str_1); // Outputs 1

$str_2 = "3 www.supportPHP.com ";
$pattern_2 = "/(\d.+\d)/"; //على الاقل خانة واحده
echo preg_match($pattern_2, $str_2); // Outputs 0

$str_3 = "23";
$pattern_3 = "/(\d.*\d)/"; // وجود خانات او عدم وجود يعيدي القيمة 1
echo preg_match($pattern_3, $str_3); // Outputs 1

$str_4 = "Adel";
$pattern_4 = "/^[A-Z][a-z]+$/";  //ادخال الاسم الاول بشرط الحرف الاول كبتل
echo preg_match($pattern_4, $str_4); // Outputs 1
echo "<br>";
echo "<br>";
$n1 = "1";
if (preg_match("/^\d{6}+$/", $n1))
{
	echo "the Numbers <b>$n1</b> contains 6 Numbers";
}
else
{
	echo "the Numbers <b> $n1</b> does not contain 6 Numbers";
}
echo "<br>";
echo "<br>";
echo "<hr size=5>";
$n2 = "123";
if (preg_match("/^\d{2,7}+$/", $n2))
{
	echo "the Numbers <b>$n2</b> Between 2 and 7 Numbers";
}
else
{
	echo "the Numbers <b> $n2</b> does not Between 2 and 7 Numbers";
}
echo "<br>";
echo "<br>";
echo "<hr size=5>";
$n3 = "01-123456";
if (preg_match("/^\d{2}-\d{6}+$/", $n3))
{
	echo "the Numbers <b>$n3</b>  Start with 3 Numbers and - than 6 Numbers";
}
else
{
	echo "the Numbers <b> $n3</b> does not Start with 3 Numbers and - than 6 Numbers";
}
echo "<br>";
echo "<br>";
echo "<hr size=5 color=red>";
$s1 = "Adel ";
if (preg_match("/[A-Z][a-z]+$/", $s1))
{
	echo "the Name <b>$s1</b> contains first a Capital letter and after that letters of Smol";
}
else
{
	echo "the Name <b> $s1</b> does not contains first a Capital letter and after that letters of Smol";
}
echo "<br>";
echo "<br>";
echo "<hr size=5 color=red>";
$s2 = "Adel ";
if (preg_match("/[A-Z][a-z]+\s$/", $s2))
{
	echo "the Name <b>$s2</b> contains first a Capital letter and after that letters of Smol and <b>WhiteSpaces</b> ";
}
else
{
	echo "the Name <b> $s2</b> does not contains first a Capital letter and after that letters of Smol and <b>WhiteSpaces</b>";
}
echo "<br>";
echo "<br>";
echo "<hr size=5 color=red>";
$s3 = "Adel Ahmed";
if (preg_match("/[A-Z][a-z]+\s[A-Z][a-z]+$/", $s3))
{
	echo "the Name <b>$s3</b> contains first Name and <b>WhiteSpaces</b> and Last Name";
}
else
{
	echo "the Name <b> $s3</b> does not contains first Name and <b>WhiteSpaces</b> and Last Name";
}
echo "<br>";
echo "<br>";
echo "<hr size=5 color=red>";
$s4 = "Adel Ahmed Alhajj";
if (preg_match("/[A-Z][a-z]+\s[A-Z][a-z]*$/", $s4))
{
	echo "the Name <b>$s4</b> contains first Name and <b>WhiteSpaces</b> and Last Name";
}
else
{
	echo "the Name <b> $s4</b> does not contains first Name and <b>WhiteSpaces</b> and Last Name";
}
?>

