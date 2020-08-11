<?php
    $sql = "SELECT * FROM users" ;
    $result = $conn->query($sql);
    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo '<li class=""><a href="?companyName=',$row['CompanyName'],'" class="text-dark"><i class="fas fa-minus icon-size p-2 text-dark"></i>'.$row['CompanyName'].'</a></li>';
        }
    }

?>