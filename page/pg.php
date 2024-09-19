<!-- ส่วนของโค้ตใช้กำหนดการแบ่งหน้า -->
<?php

	//pagination

	$Num_Rows = mysqli_num_rows($obj);

	$Per_Page = 3;   // Per Page

	$Page = isset($_GET["Page"]) ? $_GET['Page'] : '';
	if($Page == ''){ $Page=1; }

	$Prev_Page = $Page-1;
	$Next_Page = $Page+1;

	$Page_Start = (($Per_Page*$Page)-$Per_Page);
	if($Num_Rows<=$Per_Page)
	{ 
		$Num_Pages =1;
	}
	else if(($Num_Rows % $Per_Page)==0)
	{
		$Num_Pages =($Num_Rows/$Per_Page) ;
	}
	else
	{
		$Num_Pages =($Num_Rows/$Per_Page)+1;
		$Num_Pages = (int)$Num_Pages;
	}


	$str .=" order by 1 ASC LIMIT $Page_Start , $Per_Page";
	$obj  = mysqli_query($conn,$str);


?>