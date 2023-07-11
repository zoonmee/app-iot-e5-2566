<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "","iot_66");
if(!$conn){
  echo "connect fail";
}
$result = mysqli_query($conn,"SELECT * FROM tb_member");
?>

<div class="container mt-3">
  <h2>รายชื่อสมาชิก</h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>USERNAME</th>
        <th>FIRSTNAME</th>
        <th>TEL</th>
      </tr>
    </thead>
    <tbody>
<?php 
while($row = mysqli_fetch_assoc($result)){
  ?>
      <tr>
        <td><?php echo $row ["m_user"]; ?></td>
        <td><?php echo $row ["m_name"]; ?></td>
        <td><?php echo $row ["m_phone"]; ?></td>
      </tr>
<?php
}
?>

    </tbody>
  </table>
</div>

</body>
</html>