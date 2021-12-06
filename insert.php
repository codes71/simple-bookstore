<?php

include('db_connect.php');
$sql = "insert into books(category,title,author_name,description,qty,price,created_at) values ('education','Begin again','Someone','This is a test description', 3 ,2000.00, '" . date("Y-m-d H:i:s") . "') , ('programming','Begin again','Someone','This is a test description', 2 ,1500.00, '" . date("Y-m-d H:i:s") . "') ,('education','Begin again','Someone','This is a test description', 3 ,2000.00, '" . date("Y-m-d H:i:s") . "') ,
('cooking','Begin again','Someone','This is a test description', 5 ,2500.00, '" . date("Y-m-d H:i:s") . "')";
// var_dump($sql);

// die();

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
