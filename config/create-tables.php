<?php
function fn_create_tables(mysqli $conn){
    $tbl_personal = "SELECT * FROM tbl_accounts";
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
	mysqli_query($conn, $create_tbl_personal);
    }
}
?>