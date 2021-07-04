<?php  

include './inc/conection.php';
include './inc/form.php';

$sql = $db->prepare("SELECT * FROM form ORDER BY RAND() LIMIT 1");
$sql->execute();
$data = $sql->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>ProFile</title>
</head>
<body>
    <div class="sprin">
        <div class="main">
        <div class="preloader">
            <div class="preloader__square"></div>
            <div class="preloader__square"></div>
            <div class="preloader__square"></div>
            <div class="preloader__square"></div>
        </div>
            <div class="status">Loading<span class="status__dot">.</span><span class="status__dot">.</span><span class="status__dot">.</span></div>
        </div>
    </div>

    <div class="color">
    <div class="container">
        <div class="sty">
        <?php  foreach($data as $ad): ?>
            <div class="col-md-4">
                <img class="img-thumbnail images" src="./uploads/Images/<?php echo $ad['image']; ?>" alt="">
                <h2><?php echo htmlspecialchars($ad['firstname']) . ' ' . $ad['lastname'];; ?></h2>
                <p><?php echo $ad['email']; ?></p>
            </div>
            <?php endforeach; ?> 
        </div>
    </div>
    </div>

    <div class="back-color">
        <div class="container pb-5 pt-5 w-50">
        <div class="styles">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3 w-50 m-auto">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" name="firstname" value="<?php if(isset($first)){echo $first;}?>" class="form-control" id="firstname" required>
                </div>
                <div class="mb-3 w-50 m-auto">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" name="lastname" value="<?php if(isset($last)){echo $last;}?>" class="form-control" id="lastname" required>
                </div>
                <div class="mb-3 w-50 m-auto">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="<?php if(isset($email)){echo $email;}?>" class="form-control" id="email" required>
                </div>
                <div class="mb-3 w-50 m-auto">
                    <label for="image" class="form-label">select photo For You Profile</label>
                    <input type="file" name="image" class="form-control" id="image" required>
                </div>
                <input type="submit" value="Send" class="btn btn-primary margin">
            </form>
        </div>
    </div> 
    </div>

    


    <!-- <div class="header">
        <div class="container pt-4 pb-4">
            <div class="row">
            <?php  foreach($data as $ad): ?>
                    <div class="col-md-4">
                        <div class="information">
                            <h2>-><?php echo htmlspecialchars($ad['firstname']) . ' ' . $ad['lastname'];; ?><-</h2>
                            <span><?php echo $ad['email']; ?></span>
                            <img class="img-thumbnail images" src="./uploads/Images/<?php echo $ad['image']; ?>" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>  
             </div>
        </div>
    </div> -->

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>

