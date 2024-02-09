<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Your Profile</title>
    <link rel="stylesheet" href="assets/css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php

    if(isset($_POST['username'],$_POST['password']) && !empty($_POST)){
        $username=$_POST['username']; $password=$_POST['password'];
        $originalPassword=123456;
        $dbHashedPassword= password_hash($originalPassword,PASSWORD_DEFAULT);
        if($username=="admin" && password_verify($password,$dbHashedPassword)){
            $_SESSION['username']= $username;
            ?>
            <div class="register-wrapper">
                <div class="register-block">
                    <h3 class="register-title">Create Profile:<?= $username ?></h3>
                    <p style="text-align: center">"Creating PHP Profile"</p>
                    <form action="profile.php" method="post" enctype="multipart/form-data">
                        <input type="text" placeholder="Name" name="myName">
                        <input type="file" name="myImage">
                        <textarea style="width: 100%" name="description" ></textarea>
                        <input type="text" placeholder="Your Job Title" name="jobTitle"/>
                        <input type="text" placeholder="Twitter Account" name="twitterAccount"/>
                        <input type="text" placeholder="Facebook Account URL" name="faceBookUrl"/>
                        <input type="submit" value="Show My Profile"/>
                    </form>
                </div>
            </div>
        <?php }else{
            echo 'Username Or Password Is Wrong';
        }
    }else{
        header("Location:index.php");
    }


?>

<?php




?>

</body>
</html>


<?php

//$fruits=['lemon','apple','banana','orange'];
//
//sort($fruits);
//
//foreach ($fruits as $key=>$value ) {
//    echo  $value . "<br>";
//}

//
//$fruits=["d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple"];
//asort($fruits);
//foreach ($fruits as $key=>$value){
//    echo "$key = $value" . "<br>";
//}

//$fruits=['lemon','apple','banana','orange'];
//array_pop($fruits);
//foreach ($fruits as $fruit){
//    echo $fruit ."<br>";
//}

//$fruits=['lemon','apple','banana','orange'];
//array_shift($fruits);
//foreach ($fruits as $fruit){
//    echo $fruit ."<br>";
//}

//$fruits=['lemon','apple','banana','orange'];
//array_unshift($fruits,"carrot");
//foreach ($fruits as $fruit){
//    echo $fruit ."<br>";
//}

//$fruits=['lemon','apple','banana','orange'];
//array_push($fruits,"carrot");
//foreach ($fruits as $fruit){
//    echo $fruit ."<br>";
//}

//$fruits=['lemon','apple','banana','orange'];
//$newFruits= array_reverse($fruits);
//foreach ($newFruits as $fruit) {
//    echo $fruit . "<br>";
//}

