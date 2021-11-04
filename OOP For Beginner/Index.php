<?php 

    require 'userClass.php';
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

    <h3>User Name : <?php echo $obj->username;?></h3>
    <h3>Email : <?php echo $obj->email;?></h3>

    <h3>Object second</h3>
    
    <h3>User Name : <?php echo $obj1->username;?></h3>
    <h3>Email : <?php echo $obj1->email;?></h3>

    <?php echo $obj->addFriend();?>

    <h2>What variables are avialable inside the class? we use get_class_vars();</h2>

    <h2><?php print_r(get_class_vars('User'));?></h2>

    <h2>What methods are avialable inside the class? we use get_class_methods();</h2>

    <h2><?php print_r(get_class_methods('User'));?></h2>
</body>
</html>