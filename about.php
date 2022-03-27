<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Ankit thalwal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<section class="my-5" >
    
<div class="my-5 py-5 text-center ">
    <h1>About us</h1>
</div>

    <div class="container-fluid ">
        <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                  <img src="4.webp" class="aboutimg">
                </div>
              <div class="col-lg-6 col-md-6 py-3 col-12" >
                  <h2 class="display-4">I am Ankit Thalwal</h2>
                  <p class="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, voluptates dolor?<br> Facilis, earum. Nesciunt voluptate tenetur praesentium sequi sed beatae<br> nulla iste? Harum voluptate iusto alias temporibus placeat eos at!</p>
             <a href="about.php" class="btn btn-success"> search more</a>
                </div>
</div>  
 </div>
 </section>
<?php include 'footer.php';?>  

</body>
</html>