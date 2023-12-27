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

// Fungsi Tambah city
function add_city($data)
{ 
    global $conn; 
    
    // Get form data from HTML script
    $id = htmlspecialchars($data["id"]); 
    $postal_code = htmlspecialchars($data["postal_code"]); 
    $city_name = htmlspecialchars($data["city_name"]);
  
    $query = "INSERT INTO city (id, postal_code, city_name) 
              VALUES ('$id', '$postal_code', '$city_name')";
    
    mysqli_query($conn, $query); 
    return mysqli_affected_rows($conn); 
}

// Fungsi untuk menghapus city
function hapus_city($id)
{ 
    global $conn; 

    mysqli_query($conn, "DELETE FROM city WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// Fungsi untuk mengupdate data city
function update_city($data) 
{ 
    global $conn;

    $id = $data["id"];
    $postal_code = htmlspecialchars($data["postal_code"]);
    $city_name = htmlspecialchars($data["city_name"]);

    $query = "UPDATE city SET 
                  id = '$id', 
                  postal_code = '$postal_code',
                  city_name = '$city_name'
              WHERE id = $id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>

