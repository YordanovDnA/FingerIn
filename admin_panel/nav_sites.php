<!--<a href="#" class="dropdown-item">
<i class="fas fa-minus icon-size p-2"></i>
New one
</a> -->
<?php 
    session_start();
    include_once('../functions.php');
    connectToDatabase($_SESSION['Database']);
    $sql = "SELECT * FROM users" ;
    $result = $conn->query($sql);
    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo '<a href="#" class="dropdown-item"><i class="fas fa-minus icon-size p-2"></i>'.$row['CompanyName'].'</a>';
        }
    }
?>