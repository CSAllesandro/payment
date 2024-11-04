<?php include('../classes/menu_items.php');  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    
    <div class="container p-2">
        <div class="row">
            <div class="col">
                <div class="row">
                    <?php 
                        $menu = new MenuItems();
                        $menu_items = $menu->viewMenu();
                        foreach ($menu_items as $key => $value) {
                            echo '<div class="col">
                                    <div class="card bg-warning mb-5" style="width: 18rem;">
                                        <img id="menu-images" src="../resources/'. $value['image'] .'.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"> P ' . $value['price'] . ' . 00</h5>
                                            <p class="card-text">'. $value['name'] .'</p>
                                            <a href="#" class="btn btn-primary">Add to cart</a>
                                        </div>
                                    </div>
                                </div>';    
                        }

                        
                    ?>
                </div>                
            </div>
        </div>
    </div>


</body>
</html>