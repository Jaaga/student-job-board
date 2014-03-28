<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/dbconnection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/offerings.php';
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/categories.php';

if(isset($_POST['search']))
{
	$search=$_POST['searchquery'];
	$category=$_POST["categoy"];
	$searchNew = new category;
	$data= $searchNew->search_by_category($category);
	include 'searchresult.html.php';
	exit();
}





include 'viewoffers.html.php';
?>