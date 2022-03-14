<?php
require __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./style_php.css">
    
    <title>Document</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <?php
            
                foreach($database as $singleData){     
                    echo '<div class="box">';        
                        echo "<img src=".$singleData['poster']." />";          
                        echo "<h2>". $singleData['title']."</h2>";    
                        echo "<div>". $singleData['author']."</div>";    
                        echo "<div>". $singleData['genre']."</div>";   
                        echo "<div>". $singleData['year']."</div>"; 
                    echo"</div>";
                }
                
            ?>

        </div>

    </main>
</body>
</html>