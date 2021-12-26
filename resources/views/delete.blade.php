<?php
$connection = mysqli_connect('localhost' , 'veda_moola' , 'aprilday23' , '13years');

$no = $_GET['id'];
$query = "DELETE FROM posts where No='$no'";

$data = mysqli_query($connection, $query);

if($data) {
    echo "Product Deleted";
    return redirect('admin');
} else {
    echo "Error";
}






?>