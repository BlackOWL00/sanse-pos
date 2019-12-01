<?php
function fn_create_tables(mysqli $conn){
	//Accounts table
    $tbl_accounts = "SELECT * FROM tbl_accounts";
	$check_tbl_accounts = mysqli_query($conn, $tbl_accounts);
	if(!$check_tbl_accounts){
		$create_tbl_accounts = "CREATE TABLE tbl_accounts(
		personal_id INT AUTO_INCREMENT,
		first_name VARCHAR(255) NOT NULL,
		last_name VARCHAR(255) NOT NULL,
		middle_name VARCHAR(255) NOT NULL,
        uname VARCHAR(255) NOT NULL,
        pass VARCHAR(255) NOT NULL,
		PRIMARY KEY(personal_id)
	)";
	mysqli_query($conn, $create_tbl_accounts);
	}
	//RECORDS TABLE
	$tbl_records = "SELECT * FROM tbl_records";
	$check_tbl_records = mysqli_query($conn, $tbl_records);
	if(!$check_tbl_records){
		$create_tbl_records = "CREATE TABLE tbl_records(
		order_id INT AUTO_INCREMENT,
		date_time TIMESTAMP NOT NULL,
		ordered_item VARCHAR(255) NOT NULL,
		order_qty INT NOT NULL,
		transac_code VARCHAR(255) NOT NULL,
		PRIMARY KEY(order_id)
		)";
	mysqli_query($conn, $create_tbl_records);
	}
	//transactions table
	$tbl_transactions = "SELECT * FROM tbl_transactions";
	$check_tbl_transactions = mysqli_query($conn, $tbl_transactions);
	if(!$check_tbl_transactions){
		$create_tbl_transactions = "CREATE TABLE tbl_transactions(
		transac_id INT AUTO_INCREMENT,
		transac_code VARCHAR(255) NOT NULL,
		date_time TIMESTAMP NOT NULL,
		transac_total DECIMAL(6, 2),
		PRIMARY KEY(transac_id)
		)";
	mysqli_query($conn, $create_tbl_transactions);
	}
	//ITEMS
	$tbl_menuitem = "SELECT * FROM tbl_menuitem";
	$check_tbl_menuitem = mysqli_query($conn, $tbl_menuitem);
	if(!$check_tbl_menuitem){
		$create_tbl_menuitem = "CREATE TABLE tbl_menuitem(
		menuitem_id INT AUTO_INCREMENT,
		menuitem_name VARCHAR(255) NOT NULL,
		menuitem_price DECIMAL(3, 2) NOT NULL,
		menuitem_category VARCHAR(255) NOT NULL
		PRIMARY KEY(menuitem_id)
		)";
	mysqli_query($conn, $create_tbl_menuitem);
	}    
}
?>