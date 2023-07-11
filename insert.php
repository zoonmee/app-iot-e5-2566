<?php
$conn = mysqli_connect("localhost", "root", "" ,"iot_66");
if($conn){
    echo "connect ok";
}else{
    echo "connect fail";
}
$rsesult = mysqli_query($conn"SELECT * FROM tb_member");
$row = mysqli_fetch_assoc($rsesult);
echo $row[0];