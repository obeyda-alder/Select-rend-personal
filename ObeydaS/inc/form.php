<?php

    include 'inc/conection.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       
        $first = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
        $last  = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

       // Upload Variables
       $imagName = $_FILES['image']['name'];
       $imagSize = $_FILES['image']['size'];
       $imagTmp  = $_FILES['image']['tmp_name'];
       $imagType = $_FILES['image']['type'];

       // List Of Allowed File Typed To Upload
       $ListImagesExtension = array("jpeg", "jpg", "png", "gif");

       // Get Avatar Extension whene Upload
       $Extension = explode('.', $imagName);
       $ImageExtension = strtolower(end($Extension));
        

        $formErrors = array();

        if(empty($first) && empty($last) && empty($email)){

            $formErrors[] = 'All fields must be  <strong>filled out</strong>';
 
        }

        if(! empty($imagName) && !in_array($ImageExtension, $ListImagesExtension)){
                
            $formErrors[] = 'This Extension Is Not <strong>Allowed</strong>';
        }

        if(empty($imagName)){
            
            $formErrors[] = 'Image Is <strong>Required</strong>';
            
        }
        if($imagSize > 4194304){
            
            $formErrors[] = 'Image Can\'t Be Larger Than <strong>4MB</strong>';
            
        }
    
    // Verification
    if(empty($formErrors)){

        $Image = rand(0, 100000000) . '_' . $imagName;

        // the is peltein function for [whene Upload Img insert to img in your folder in Ypu path]
        move_uploaded_file($imagTmp, "uploads\Images\\" . $Image);


                // Insert data with mysql First Method (1)
                // mysql_query( $connection, statement);
        
        // Insert data with PDO Second Method (2)
        $conection = $db->prepare("INSERT INTO form(firstname, lastname, email, image)
                                        VALUES(:iuser, :ilast, :iemail, :image)");

        $conection->execute(array(
                'iuser'     => $first,
                'ilast'     => $last,
                'iemail'    => $email,
                'image'     => $Image
            ));
        $row = $conection->rowCount();

        if($row > 0){

            header('Location:index.php');
        }
    }

    if(isset($formErrors)){
        foreach($formErrors as $for){
            echo '<div class="container">'; 
              echo '<div class="alert alert-danger">' . $for . '</div>';
            echo '</div>';
        }
    }

  
}

?>