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
      $obj = new User();

      $obj1 = new User();

?>    

<h1><?php $obj; ?></h1>

    <h2><?php echo get_class($obj); ?></h2>
    <h3>This is var dump</h3>
    <h2><?php var_dump($obj1); ?></h2>
    <h3>This is print_r</h3>
    <h3><?php print_r($obj);?></h3>
</body>
</html>