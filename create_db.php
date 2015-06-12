<?php
	$connect=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$createdb="CREATE DATABASE my_intern;";
	$crate1=mysqli_query($connect,$createdb);

	$c="USE my_intern;";
	$c1=mysqli_query($connect,$c);

	$qry1="CREATE TABLE member
	(
  	 mem_id int PRIMARY KEY,
  	 username varchar(30) NOT NULL,
  	 password varchar(30) NOT NULL
	);";

	$result1=mysqli_query($connect,$qry1);

	$qry2="CREATE TABLE Assets
	(
		SNo int NOT NULL AUTO_INCREMENT,
		SeatNo varchar(255),
		EmployeeID varchar(255),
		EmployeeName varchar(255),
		Location varchar(255),
		Floor varchar(255),
		Status varchar(255),
		AssetTagNo varchar(255),
		HostName varchar(255),
		AssetType varchar(255),
		Brand varchar(255),
		Model varchar(255),
		SerialNo varchar(255),
		AssociatedDevices varchar(255),
		AssoDevSNo varchar(255),
		HardDisk varchar(255),
		Memory varchar(255),
		Processor varchar(255),
		OS varchar(255),
		PurchasedOn varchar(255),
		InvoiceDetails varchar(255),
		VendorDetails varchar(255),
		WarrentyExp varchar(255),
		DateofIssue varchar(255),
		ContactNo varchar(255),
		EMailID varchar(255),
		Remarks varchar(255),
		PRIMARY KEY (SNo)
	);";

	$result2=mysqli_query($connect,$qry2);



	$q1="INSERT INTO member VALUES(1,'root','root');";
	$r=mysqli_query($connect,$q1);

	mysqli_close($connect);
?>