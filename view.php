<?php
    require 'connection.php';
    $result = mysqli_query($conn,"SELECT *FROM student_info");
?>
<!DOCTYPE html>
<html>
<head>
    <title> Retrive data</title>
    <link rel="stylesheet" href="style.css" />
</head>
    <body>
      <table align = "center" border="2px" style="width:700px; line-height:40px;">
        <tr>
          <th colspan="4"><h2>Students Record</h2></th>
        </tr>
        <t>
           <th>ID</th>
           <th>Full Name</th>
           <th>E-mail</th>
           <th>Action</th>
         </t>
        <?php
                while($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><input type="submit" name="sub" value="Profile"> </td>
            </tr>
            <?php
                }
            ?>
        </table>

     </body>
</html>
