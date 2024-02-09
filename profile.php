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
    <title>My Profile</title>
    <link rel="stylesheet" href="assets/css/profile.css">
</head>
<body>
<?php

if(!empty($_POST)){?>
    <?php
    $imageName=$_FILES['myImage']['name']; // image.jpg
    $strToArr=explode('.',$imageName); // return indexed array[0=>name, 1=>ext]
    $extension=end($strToArr);
    $allowedExt=["jpg","jpeg","png","gif"];
    $tmp=$_FILES['myImage']['tmp_name'];
    $fileSize=$_FILES['myImage']['size'];
    if(!in_array('$extension',$allowedExt)&&$fileSize<=2097152){
        move_uploaded_file($tmp,'assets/img/'.$imageName);?>
        <div class="container">
            <h2>My Profile:<?= $_SESSION['username'] ?> |<span><a href="form.php">Home</a></span></h2>
            <div class="service-details">
                <img src="<?= 'assets/img/'.$imageName ?>" alt="realm">
                <div class="service-hover-text">
                    <h3><?= $_POST['myName']?></h3>
                    <h5><?= $_POST['jobTitle']?></h5>
                    <p><?= $_POST['description']?></p>
                    <ul class="followus">
                        <li><a href="https://www.facebook.com/pages/My-Code-Pen-Web-Design-Css3-HTML5-Jquery-JavaScript/872778909456505" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/S_A_Chughtai" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://fiverr.com/shahjehanali" target="_blank"><i class="fa fa-codepen"></i></a></li>
                    </ul>
                </div>
                <div class="service-white service-text">
                    <p><?= $_POST['myName']?></p>
                    <a href="<?= $_POST['twitterAccount']?>">@<?= $_POST['twitterAccount']?></a>
                </div>
            </div>
            <div style="text-align:center;margin-top:5px;">

                <a href="<?= $_POST['faceBookUrl']?>" class="myblog">Facebook Link</a>
            </div>
        </div>
    <?php }else{?>
        <div class="container">
            <h2 style="color:#fff;">Your File Is Not Image</h2>
        </div>

    <?php header('Refresh:3;URL=form.php');
    }

 }else{
    header("Refresh:3;URL=form.php");?>
    <div class="container">
        <h2 style="color:#fff;">You Must Add Your Data In Home Page</h2>
    </div>
<?php }

?>
</body>
</html>