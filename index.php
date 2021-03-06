<?php 
include ('./data/movies.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="bg-dark text-white" >
        <section class="container">
            <div class="row justify-content-center align-items-center my-height">
                <div class="col-6">
                <div class="row">
                    <div class="col-4">
                        <h5 class="text-uppercase text-warning"> title: </h5>
                    </div>
                    <div class="col-6">
                        <p><?= $theFifthElement -> getTitle() ?></p>
                    </div>
                    <div class="col-4">
                        <h5 class="text-uppercase text-warning"> description: </h5>
                    </div>
                    <div class="col-6">
                        <p><?= $theFifthElement -> getDescription() ?></p>
                    </div>
                    <div class="col-4">
                        <h5 class="text-uppercase text-warning"> genre: </h5>
                    </div>
                    <div class="col-6">
                        <p><?= $theFifthElement -> getGenre() ?></p>
                    </div>
                    <div class="col-4">
                        <h5 class="text-uppercase text-warning"> reviews: </h5>
                    </div>
                    <div class="col-6">
                        <p><?= $theFifthElement -> getReviews() ?></p>
                    </div>
                    <div class="col-4">
                        <h5 class="text-uppercase text-warning"> year: </h5>
                    </div>
                    <div class="col-6">
                        <p><?= $theFifthElement -> getYear() ?></p>
                    </div>
                </div>
                    <!-- <?php foreach($theFifthElement as $key => $info) {?>
                        <div class="row">
                            <div class="col-4">s
                                <h5 class="text-uppercase text-danger"> <?php echo $key ;?> : </h5>
                            </div>
                            <div class="col-6">
                                <p> <?php echo $info;?></p>
                            </div>
                        </div>
                        <?php }?> -->
                    </div>
                    <?php $hulk -> setReview("ridatemi il tempo perso, pero in html");?>
                    <div class="col-6">
                        <div class="row">
                        <div class="col-4">
                            <h5 class="text-uppercase text-warning"> title: </h5>
                        </div>
                        <div class="col-6">
                            <p><?= $hulk -> getTitle() ?></p>
                        </div>
                        <div class="col-4">
                            <h5 class="text-uppercase text-warning"> description: </h5>
                        </div>
                        <div class="col-6">
                            <p><?= $hulk -> getDescription() ?></p>
                        </div>
                        <div class="col-4">
                            <h5 class="text-uppercase text-warning"> genre: </h5>
                        </div>
                        <div class="col-6">
                            <p><?= $hulk -> getGenre() ?></p>
                        </div>
                        <div class="col-4">
                            <h5 class="text-uppercase text-warning"> reviews: </h5>
                        </div>
                        <div class="col-6">
                            <p><?= $hulk -> getReviews() ?></p>
                        </div>
                        <div class="col-4">
                            <h5 class="text-uppercase text-warning"> year: </h5>
                        </div>
                        <div class="col-6">
                            <p><?= $hulk -> getYear() ?></p>
                        </div>
                    </div>
                    
                    <!-- <?php foreach($hulk as $key => $info) {?>
                        <div class="row">
                            <div class="col-4">
                                <h5 class="text-uppercase text-warning"> <?php echo $key ;?> : </h5>
                            </div>
                            <div class="col-6">
                                <p> <?php echo $info;?></p>
                            </div>
                        </div>
                    <?php }?> -->
                </div>
            </div>
        </section>
    </main>    
</body>
</html>