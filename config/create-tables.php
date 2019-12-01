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
		date_time TIMESTAMP default NOW(),
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
		date_time TIMESTAMP default NOW(),
		transac_total DECIMAL(6, 2),
		PRIMARY KEY(transac_id)
		)";
	mysqli_query($conn, $create_tbl_transactions);
	}
	//ITEMS
	$tbl_items = "SELECT * FROM tbl_items";
	$check_tbl_items = mysqli_query($conn, $tbl_items);
	if(!$check_tbl_items){
		$create_tbl_items = "CREATE TABLE tbl_items(
		items_id INT AUTO_INCREMENT,
		items_name VARCHAR(255) NOT NULL,
		items_price DECIMAL(3, 2),
		items_category VARCHAR(255) NOT NULL
		PRIMARY KEY(items_id)
		)";
	mysqli_query($conn, $create_tbl_items);
	}

}
?>