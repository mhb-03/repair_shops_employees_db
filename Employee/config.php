<?php 
// Koneksi Database 
$conn = mysqli_connect("localhost","root","","repair_shops_employees"); 
  
// Data muncul di web 
function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
        

// Fungsi Tambah Employee
function tambah($data) 
{ 
    global $conn; 
      
    // Get form data from HTML script
    $id = htmlspecialchars($data["id"]); 
    $first_name = htmlspecialchars($data["first_name"]); 
    $last_name = htmlspecialchars($data["last_name"]); 
    $employment_start_date = htmlspecialchars($data["employment_start_date"]); 
    $employment_end_date = htmlspecialchars($data["employment_end_date"]); 
    $position_id = htmlspecialchars($data["position_id"]); 
    $city_id = htmlspecialchars($data["city_id"]);
    $is_active = htmlspecialchars($data["is_active"]);  
  
    $query = "INSERT INTO employee (id, first_name, last_name, employment_start_date, employment_end_date, position_id, city_id, is_active   ) 
              VALUES ('$id', '$first_name', '$last_name', '$employment_start_date', '$employment_end_date', '$position_id', ' $city_id', '$is_active')";
    
    mysqli_query($conn, $query); 
    return mysqli_affected_rows($conn); 
}

// Fungsi untuk menghapus data employee
function delete_employee($id) 
{ 
    global $conn; 

    mysqli_query($conn, "DELETE FROM employee WHERE id = $id"); 

    return mysqli_affected_rows($conn);
}

// Fungsi untuk mengupdate data employee
function update_employee($data) 
{ 
    global $conn;

    $id = $data["id"];
    $first_name = htmlspecialchars($data["first_name"]); 
    $last_name = htmlspecialchars($data["last_name"]); 
    $employment_start_date = htmlspecialchars($data["employment_start_date"]); 
    $employment_end_date = htmlspecialchars($data["employment_end_date"]); 
    $position_id = htmlspecialchars($data["position_id"]); 
    $city_id = htmlspecialchars($data["city_id"]);
    $is_active = htmlspecialchars($data["is_active"]);  

    $query = "UPDATE employee SET 
                first_name = '$first_name',
                last_name = '$last_name',
                employment_start_date = '$employment_start_date',
                employment_end_date = '$employment_end_date',
                position_id =  '$position_id',
                city_id = '$city_id',
                is_active = '$is_active'
              WHERE id = $id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>
 
 