<?php 
// $conx = mysqli_connect("localhost", "root", "", "samarth_samarth"); 
?>

 <?php

 

  // if(isset($_POST['upload']))

  // {

  //   if($_POST['foldername'] != "")

  //   {

  //     $foldername="../../Products Images/".$_POST['foldername'];

  //     if(!is_dir($foldername)) mkdir($foldername);

  //     foreach($_FILES['files']['name'] as $i => $name)

  //   {

  //         if(strlen($_FILES['files']['name'][$i]) > 1)

  //         {  move_uploaded_file($_FILES['files']['tmp_name'][$i],$foldername."/".$name);

  //         }

  //     }

  //     echo "<script>alert('Folder is successfully uploaded');</script>";

  //   }

  //   else

  //       echo "<script>alert('Upload folder name is empty');</script>";



  // }

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <title>Add Products via csv file</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="icon" type="img/ico" href="../../SAMARTH LOGO.ico">

   

</head>

<body>



<div class="container" style="margin-top:50px; margin-bottom:50px;">

<a href="../products.php"><i class="fa fa-reply" aria-hidden="true"> Back to Products page</i></a>

      <h2>Add products via csv file</h2>



      <br>

    <form action="excel-script.php" method="post" enctype="multipart/form-data">

        

       <div class="row">

           <div class="col-md-4">

            <div class="form-group">

                <label>Select Category : </label>

                 <select class="border x" name="cat"  id="cat" >

                            <option value=" ">Categories</option>

                            <?php

                            // $query3 = "SELECT * FROM category";

                            // $result3 = mysqli_query($conx,$query3);

                            // while($row1 = mysqli_fetch_array($result3)){

                                ?>

                                <option value=<?php 
                                // echo $row1['cat_id']; 
                                ?> 
                                <?php 
                                // echo $row1['cat_name']; 
                                ?>  

                                              </option>

                            <?php 
                          // }
                          ?>

                        </select>

                  </div><hr>

             <?php 
            //  mysqli_close($conx); 
             ?>

          <div class="form-group">



          <label>Brand Name :  </label>

              <input type="text" id="brand" class="" required="true" name="brand" placeholder="Ex.Levis" style="width:180px; border-radius:5px;"><hr>



               </div>

               <div class="form-group">

                   <input type="file" name="excelDoc" id="excelDoc" class="form-control" />

               </div>



         

           <div  class="form-group">

               <input type="submit" name="uploadBtn" id="uploadBtn" value="Upload csv file" class="btn btn-success" />

           </div>

             </div>

       </div>

    </form>

    <hr>

<h2>Upload Image folder</h2>

  <form action="" method="post" enctype="multipart/form-data"> 

    <div class="row">

           <div class="col-md-4">

 <div class="form-group">

  <label>Folder Name:</label>

  <input type="text" name="foldername" title="Folder name should be same as brand name" placeholder="Ex.Levis" style="width:180px; border-radius:5px;"/>

</div>

  <div class="form-group">

  <label>Select Image Folder to Upload: </label>

  <input type="file" name="files[]" id="files" multiple directory="" webkitdirectory="" moxdirectory="" class="form-control"/>

</div>

  <input type="Submit" value="Upload image folder" name="upload" class="btn btn-success"/>

  </div>

</div>

  </form>



</div>

</body>

</html>

