<?php
    //db variables

    $user = 'root';
    $pass = '';
    $user = 'user_info';

    //variables

    $name=$_POST['name'];
    $gmail=$_POST['gmail'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $street=$_POST['street'];
    $area=$_POST['area'];
    $landmark=$_POST['landmark'];
    $pincode=$_POST['pincode'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $date=$_POST['date'];
    $number=$_POST['number'];

    //db connecton

    $user = new mysqli ('localhost', $user, $pass, $user) or die("Failed");
    echo "db connection succesfull!";

    $push_db = $user->prepare("insert into register(
        name, gmail, password, confirmpassword,
        street, area, landmark, pincode, city, state,
        date, number) 
        values(?,?,?,?,?,?,?,?,?,?,?,?)");
    $push_db->bind_param ("sssssssisssi", $name, $gmail, $password, $confirmpassword,
    $street, $area, $landmark, $pincode, $city, $state,
    $date, $number);

    $push_db->close();
    $user->close();

?>