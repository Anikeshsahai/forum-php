<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coding Forums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <!-- including navbar -->
    
    <?php include './partials/header.php'; ?>
    <?php include './partials/dbconnect.php'; ?>
    
    <!-- crousel starts here -->  
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img style="height:450px;" src="https://media.istockphoto.com/id/1346223165/photo/encryption-your-data-binary-code-and-digital-lock-hacker-attack-and-data-breach-big-data-with.jpg?b=1&s=170667a&w=0&k=20&c=D017cD3Uy1ynHOm7w2i4ugulbXQ5qW7OBxYdkni1tzY=" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img style="height:450px;" src="https://media.istockphoto.com/id/1452604857/photo/businessman-touching-the-brain-working-of-artificial-intelligence-automation-predictive.jpg?b=1&s=170667a&w=0&k=20&c=iJp6e2C-l2lRmyG3ColHMpXe0QYrPnrfQQc2O6PsYC4=" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img style="height:450px;" src="https://media.istockphoto.com/id/1363276581/photo/smart-young-students-studying-in-university-with-diverse-multiethnic-classmates-scholars.jpg?b=1&s=170667a&w=0&k=20&c=xEX-zFw0En_eTQ9EgQCBBdFr-vt-VfNr8wLz45RXf2w=" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- crousel end here -->

    <div class="container my-4">

      <h2 class="text-center">Discuss categories</h2>

      <div class="row my-3">

        <?php
        
        $sql="SELECT * FROM `categories`";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){

          $catid=$row['cat_id'];
          $catname=$row['cat_name'];
          $catdes=$row['cat_description'];
          echo '<div class="col-md-4">
                  <div class="card  mx-auto" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGNvZGV8ZW58MHx8MHx8&w=1000&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><a href="./threadlist.php?catid='.$catid.'">'.$catname.'</a></h5>
                      <p class="card-text">'.substr($catdes,0,90).'...</p>
                      <a href="./threadlist.php?catid='.$catid.'" class="btn btn-primary">Show threads</a>
                    </div>
                  </div>
                </div>';

        } 
        
        ?>

      </div>

    </div>
    
    <?php include './partials/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>