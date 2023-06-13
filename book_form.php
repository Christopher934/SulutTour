
<?php
   $connection = mysqli_connect('localhost','id20907183_suluttour','p=2-$x_Puq=ZFUL#','id20907183_book_db');

   if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving  = $_POST['leaving'];

    $request = "insert into book_form(name, email, phone, address, location, guest, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

    mysqli_query($connection, $request);

    header('localhost:book.php');

   }else{
    echo 'something went wrong please try again';
   }
?>
