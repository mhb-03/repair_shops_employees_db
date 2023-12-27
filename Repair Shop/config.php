<?php 
// koneksi database 
$conn = mysqli_connect("localhost","root","","repair_shops_employees"); 
  
// data muncul di web 
function query($query)
{
    global $conn;  

    $result = mysqli_query($conn,$query); 
    $rows =[]; 
    while( $row=mysqli_fetch_assoc($result)){ 
        $rows[] = $row; 

    } 
    return $rows;   
}

// Fungsi Tambah customers 
function tambah($data) 
{ 
    global $conn; 

    // Get form data from HTML script
    $id = htmlspecialchars($data["id"]); 
    $shop_name = htmlspecialchars($data["shop_name"]); 
    $address = htmlspecialchars($data["address"]); 
    $details = htmlspecialchars($data["details"]); 
    $city_id = htmlspecialchars($data["city_id"]); 
  
    $query = "INSERT INTO repair_shop (id, shop_name, address, details, city_id) 
              VALUES ('$id', '$shop_name', '$address', '$details', '$city_id')";
    
    mysqli_query($conn, $query); 
    return mysqli_affected_rows($conn); 
}

// Fungsi untuk menghapus data repair shop
function hapus_repair($id) 
{ 
    global $conn; 

    mysqli_query($conn, "DELETE FROM repair_shop WHERE id = $id"); 

    return mysqli_affected_rows($conn);
}

// Fungsi untuk mengupdate data repair_shop
function update_repair($data) 
{ 
    global $conn;

    $id = $data["id"];
    $shop_name = htmlspecialchars($data["shop_name"]);
    $address = htmlspecialchars($data["address"]);
    $details = htmlspecialchars($data["details"]);
    $city_id = htmlspecialchars($data["city_id"]);

    $query = "UPDATE repair_shop SET 
                  shop_name = '$shop_name',
                  address = '$address',
                  details = '$details',
                  city_id = '$city_id'
              WHERE id = $id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>
 
 
