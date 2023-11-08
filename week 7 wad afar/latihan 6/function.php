<?php
$conn = mysqli_connect("localhost","root","","tugas wad");

function query($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;
}

function tambah($data){
    global $conn;
    $id = $_POST ["id"];
    $nama = $_POST ["nama"];
    $harga = $_POST ["harga"];
    $stok = $_POST ["stok"];

    $query = "INSERT INTO warungjus VALUES ('$id','$nama','$harga','$stok')";

    mysqli_query($conn,$query); 
    return mysqli_affected_rows($conn); 
 }

 function hapus($plt){
    global $conn;
    $id = $_POST["id"];
    $nama = $_POST ["nama"];
    $harga = $_POST ["harga"];
    $stok = $_POST ["stock"];
    
    $query = "UPDATE warungjus SET
                
                nama = '$nama',
                harga = '$harga',
                stok = '$stok'
            WHERE id = '$id'
    ";

    mysqli_query($conn,$query) or die (mysqli_error($conn));
    return var_dump($_POST);
    
}

?>