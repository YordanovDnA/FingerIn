<!--<a href="#" class="dropdown-item">
<i class="fas fa-minus icon-size p-2"></i>
New one
</a> -->
<?php 
    include_once('../config.php');
    $sql = "SELECT * FROM staff" ;
    $result = $conn->query($sql);
    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo '<a href="#" class="dropdown-item"><i class="fas fa-minus icon-size p-2"></i>'.$row['CompanyName'].'</a>';
        }
    }
?>