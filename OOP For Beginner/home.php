<?php 

    require 'userClass.php';

    require 'staticClass.php';
    // require 'inheritance.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beginner Guide to OOP in PHP</title>
</head>
<body>
<?php 

    //instansciating 
      $obj = new User('sajjad', 'sajjadcodes@gmail.com');

      $obj1 = new User('admin', 'admin@gmail.com');

?>    

<h1><?php $obj; ?></h1>

    <h2><?php  echo get_class($obj); ?></h2>
    <h3>This is var dump</h3>
    <h2><?php var_dump($obj1); ?></h2>
    <h3>This is print_r</h3>
    <h3><?php print_r($obj);?></h3>

    <h3>User Name : <?php echo $obj->getUser();?></h3>
    <h3>Email : <?php echo $obj->getEmail();?></h3>

    <h3>Object second</h3>
    
    <h3>User Name : <?php echo $obj1->getUser();?></h3>
    <h3>Email : <?php echo $obj1->getEmail();?></h3>

    <?php echo $obj->addFriend();?>

    <h2>What variables are avialable inside the class? we use get_class_vars();</h2>

    <h2><?php print_r(get_class_vars('User'));?></h2>

    <h2>What methods are avialable inside the class? we use get_class_methods();</h2>

    <h2><?php print_r(get_class_methods('User'));?></h2>

    <h1>Getters</h1>
    <?php

    $obj1->setEmail('test@gmail.com');  

    ?>
    <h3><?php echo $obj1->getUser();?></h3>
    <h3><?php echo $obj1->getEmail();?></h3>

    <?php 
    
    $admin = new AdminUser('SuperAdmin', 'SuperAdmin@gmail.com','Super');

    var_dump($admin);
    ?>

    <?php print_r(get_class_methods('AdminUser'));?>


    <h1>This is Admin name: <?php echo $admin->getUser();?></h1>
    <h1>This is Admin email: <?php echo $admin->getEmail();?></h1>
    <h1>This is Admin level: <?php echo $admin->level;?></h1>
    <h1>Message using Obj: <?php echo $obj->message;?></h1>
    <h1>Message using Obj1: <?php echo $obj1->message;?></h1>
    <h1>Message using Admin: <?php echo $admin->message;?></h1>

    <h2>This is how to use static class and properties</h2>


    <?php 
    // we do not need to initiate static class. We can access it directly

    echo "<h3>";
    
    print_r( Weather::$tempConditions);


    echo "</h3>";

    echo Weather::celsiusToFarenhiet(34);


    echo "<h3>";
    
    print_r( Weather::determineTempCondition(45));


    echo "</h3>";
    ?>

    
</body>
</html>