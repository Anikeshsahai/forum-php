<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coding Forums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- including navbar -->

    <?php include './partials/header.php'; ?>
    <?php include './partials/dbconnect.php'; ?>


    <div class="container my-4">
        

    <?php
    $id=$_GET['catid'];
    $sql="SELECT * FROM `categories` WHERE `cat_id`=$id";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
          $catname=$row['cat_name'];
          $catdes=$row['cat_description'];
        
        
          echo '<div class="jumbotron">
                    <h1 class="display-4">Welcome to '.$catname.' Forum</h1>
                    <p class="lead">'.$catdes.'</p>
                    <hr>
                    <p>This is peer to peer Forum</p>
                    <a href="" class="btn btn-primary" role="button">load more</a>
                </div>';
        }
    
    ?>


    



    </div>

    <div class="container">
        <h1 class="py-2">browse Questions</h1>
        <div class="d-flex my-3">
            <div class="flex-shrink-0">
                <img src="./img/download.jpeg" width="80px" alt="...">
            </div>
            <div class="flex-grow-1 ms-3">
                <h5>Unable to insatll py studio</h5>
                Unable to insatll py studioUnable to insatll py studioUnable to insatll py studioUnable to insatll py studioUnable to insatll py studioUnable to insatll py studioUnable to insatll py studioUnable to insatll py studio
            </div>
        </div>
    </div>

    <?php include './partials/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>