<?php 
 // koneksi database 
 $conn = mysqli_connect("localhost","root","","repair_shops_employees"); 
  
 // data muncul di web 
 function query($query){
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
  
      // Untuk mendapatkan waktu sekarang
      // Jika Anda menggunakan kolom dengan tipe data timestamp, Anda bisa menggunakan CURRENT_TIMESTAMP langsung di dalam query
      
      // Get form data from HTML script
      $id = htmlspecialchars($data["id"]); 
      $position_name = htmlspecialchars($data["position_name"]); 
  
      $query = "INSERT INTO employee_position (id, position_name) 
                VALUES ('$id', '$position_name')";
    
      mysqli_query($conn, $query); 
      return mysqli_affected_rows($conn); 
  }
function hapus_position($id) 
{ 
    global $conn; 

    mysqli_query($conn, "DELETE FROM employee_position WHERE id = $id"); 

    return mysqli_affected_rows($conn);
}
// Fungsi untuk mengupdate data customer
function update_cust($data) 
{ 
    global $conn;

    $id = $data["id"];
    $position_name = htmlspecialchars($data["position_name"]);

    $query = "UPDATE employee_position SET 
                  id = '$id', 
                  position_name = '$position_name'
              WHERE id = $id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>
 
 