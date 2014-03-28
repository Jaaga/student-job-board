<?php
$categoriespage=True;
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/dbconnection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/offerings.php';
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/categories.php';

if(isset($_POST['search']))
{
	
	$category=$_POST["categoy"];
	$searchNew = new category;
	$data= $searchNew->search_by_category($category);
	if(count($data)<1)
		{
			$noSearchFound=True;
		}
	include 'searchresult.html.php';
	exit();
}

if(isset($_POST['searchq']))
{
	
	$searchquery=$_POST["searchquery"];
	$searchNew = new category;
	$data= $searchNew->search_by_query($searchquery);
	if(count($data)<1)
		{
			$noSearchFound=True;
		}
	include 'searchresult.html.php';
	exit();
}





include 'viewoffers.html.php';
?>