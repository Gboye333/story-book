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
<?php include './partials/header.php'; ?>

<!-- php code -->
<?php 
$id=$_GET['story_id'];
$sql="select * from `topics` where topic_id =$id";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    $topic_name=$row['topic_name'];
    $topic_desc=$row['topic_desc'];
    $topic_image=$row['topic_image'];
}
?>

<!-- Jumbotron -->
<div class="container-fluid">
<div class="jumbotron bg-warning rounded">
    <div class="container">
  <h1 class="display-4"><?php echo $topic_name;?></h1>
  <p class="lead"><?php echo $topic_desc ?></p>
  
    <button class="btn btn-dark"><a class="text-light" href="#reading" role="button">Continue Reading</a></button>
  </p>
</div>
</div>
</div>

<div class="container-fluid slider">
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

<!-- Reading -->
<div class="container" id="reading">
<div class="jumbotron jumbotron- bg-warning rounded p-0">
    <div class="container">
  <h1 class="display-4 text-center">Enjoy Reading</h1>
  <img src=<?php echo $topic_image;?> class="img-fluid" alt="">
  <p class="lead pb-3">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.
    Lorem ipsum dolor sit amet consectetur 
    adipisicing elit. 
    Cupiditate ullam neque nobis porro id, 
    non ipsam eius corrupti totam ut.
    Lorem ipsum dolor sit amet consectetur 
    adipisicing elit. 
    Expedita a
    liquid quisquam eveniet itaque quos maiores aperiam eos 
    autem dolorum inventore officiis provident in atque eius similique, 
    commodi ad? Vero numquam reiciendis accusantium beatae dicta, fuga quia modi, 
    recusandae a ex, praesentium totam. Facere optio ducimus consequatur omnis dolor 
    adipisci amet placeat totam atque, officia nulla quod quidem ullam. Laborum, 
    repellendus, quo ipsa, ducimus doloribus provident dolor consectetur nesciunt facere
     aspernatur velit earum optio sapiente culpa minima magnam tempore dolorem! Sequi 
     aperiam natus modi iste, quod, perspiciatis repellendus deleniti perferendis esse 
     quaerat aliquam ipsum incidunt sed eaque at quidem, et quasi voluptatem autem. 
     Distinctio totam repudiandae tenetur? Veritatis unde enim ratione. Excepturi quo 
     nihil rerum optio ullam esse iusto velit eaque ea, amet cupiditate mollitia iure est 
     molestiae sed repellat ab dolorem qui consectetur suscipit cum, fugiat rem ducimus facilis! 
     Soluta officia necessitatibus repellat. Voluptatum unde fugit explicabo nam distinctio ipsam, aut quasi 
     minus delectus alias. 
     Ipsa distinctio quisquam labore libero dolore hic! Tempore, ad dolorem et explicabo error rem voluptate, 
     laudantium rerum veritatis quasi quas recusandae quam laboriosam adipisci atque quidem? Accusantium sed 
     impedit nesciunt totam itaque suscipit perspiciatis et nobis! Fugiat ducimus 
    sapiente repellat atque quidem necessitatibus, asperiores itaque.
  </p>
  
</div>
</div>
</div>


<!-- Thank you txt -->
<div class="container-fluid mb-4">
    <h2 class="text-center display-4">
        Thank you for your time 😁
    </h2>
</div>

<?php include './partials/footer.php'; ?>
</body>

</html>