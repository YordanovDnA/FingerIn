
  <table>
    <th>Users:</th>
<?php
    include_once('../config.php');
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo '
            <tr class="">
            <td class="">'.$row["Username"].'</td>
            </tr>
            ';
        }
    }
    ?>
</table>  