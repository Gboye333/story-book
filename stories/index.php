<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stories website</title>
  <!--Bootstrap Css Cdn-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--stylesheet-->
  <link rel="stylesheet" href="style.css">

  <!--fontawesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php include './partials/connect.php'; ?>
  <!-- <h1 class="text-center">Hello</h1> -->
  <div class="container-fluid slider">
    <?php include './partials/header.php'; ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/img11.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/img10.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/img3.jpg" alt="Third slide">
        </div>
      </div>
    </div>
  </div>


  <!-- Cards -->
  <div class="container">
    <h1 class="text-center featureTitle mb-5">Featured Stories</h1>
    <div class="row">


      <?php
      $sql = "Select * from `topics`";
      $result = mysqli_query($con, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['topic_id'];
          $topic_image = $row['topic_image'];
          $topic_name = $row['topic_name'];
          $topic_desc = $row['topic_desc'];
          echo '<div class="col-md-4 col-sm-6 mb-5">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src=' . $topic_image . ' alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">' . $topic_name . '</h5>
              <p class="card-text">' . substr($topic_desc, 0, 50) . '.......</p>
              <a href="stories.php?story_id='.$id.'" class="btn btn-primary">Continue Reading</a>
            </div>
          </div>
        </div>';
        }
      }
      ?>


    </div>
  </div>
  <?php include './partials/footer.php'; ?>
</body>

</html>