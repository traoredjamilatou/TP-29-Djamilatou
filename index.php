<?php include ("fanta.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="http://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
  <!-- icone bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <navbar>
    <?php include ("menu.php") ?>
    <!-- <div class="logo">
            <img src="1.webp" alt="">
         <p>Burkina Faso : Pays des Hommes intègres</p>
         </div>
        <div class="icons">
        <a href="#"><i class="ri-facebook-fill"></i></a>
        <a href="#"><i class="ri-instagram-fill"></i></a>
        <a href="#"><i class="ri-youtube-fill"></i></a>
        <a href="#"><i class="ri-twitter-fill"></i></a>
        <h3>Langues</h3>
        </div>
        </div>
    </navbar>
    <section class="container">
    <div class="img">
    <img class="B" src="2.webp" alt="">
   
    </div>
    <div>
     <p class="A">Office National du Tourisme Burkinabe</p>
     </div>
</section>
<section class="C">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Les cascades de Banfora.php">Les cascades de Banfora</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Partenaires.php">Partenaires</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="Contact.php">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="Recherche" placeholder="Recherche" aria-label="Recherche">
        <button class="btn btn-outline-success" type="submit">Recherche</button>
      </form>
    </div>
  </div>
</nav>
</section> -->


    <div class="row ">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3> Bienvenue au Burkina Faso</h3>
              <h4>Terre d'accueil et de traditions.</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Une destination incontournable</h3>
              <h4>Un peuple chaleureux à decouvrir.</h4>
            </div>
          </div>
          <div class="carousel-item">
            <img src="3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Burkina Faso</h3>
              <h4>Pays des hommes intègres.</h4>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <section class="F">
        <div class="G">
          <h2>Bienvenue sur le site de l'Office National du Tourisme Burkinabè (ONTB).</h2>
        </div>
        <div class="DJ">
          <img src="2.webp" alt="">
        </div>
      </section>

      <section class="D">
        <div class="E">
          <h1>Informations pratiques</h1>
        </div>
        <div class="lmk">
        <?php $reponse=$bdd->query("SELECT * FROM djami");
        while($donnees=$reponse->fetch()){
          ?>
          <div class="LG">
          <img class="s" src="<?php echo $donnees['photo'];?>" alt="">
            <h4><?php echo $donnees['titre'];?></h4>
            <p><?php echo $donnees['texte'];?></p>
            <button>En Savoir +</button>
          </div>
        <?php }?>
       </section>
<!-- section destination -->
<section id="popular-destination">
<h1 class="title">A voir absolument</h1>
<div class="content">
<?php $reponse=$bdd->query("SELECT * FROM djamilatou");
        while($donnees=$reponse->fetch()){
          ?>
           <!---box -->
 <div class="box">
 <img src="<?php echo $donnees['photo'];?>" alt="">
 <div class="content">
      <div>
 <h1><?php echo $donnees['titre'];?></h1>
 <p><?php echo $donnees['texte'];?></p>
 <a href=""><?php echo $donnees['titre'];?><i class="bi bi-power"></i></a>
 </div>
 </div>
    </div>
 <?php }?>
 <section class="omni">
        <section class="footer">

          <div class="Q">
            <img src="2.webp" alt="">
            <p class="T">Burkina Faso</p>
            <p class="T">Pays des Hommes intègres</p>
            <p class="T">Terre d'accueil et de traditions,</p>
            <p class="T">Pays de culture</p>
          </div>
          <div>
            <p class="R">Contact</p>
            <div class="S">
              <i class="bi bi-egg-fill"></i>
              <P>01 B.P. 1311 Ouagadougou <br>01 Burkina Faso</P>
            </div>
            <div class="V">
              <i class="bi bi-telephone-fill"></i>
              <p>+226 31 19 59/60</p>
            </div>
            <div class="W">
              <i class="bi bi-envelope"></i>
              <p>info@ontb.bf</p>
            </div>
            <div class="X">
              <i class="bi bi-facebook"></i>
              <i class="bi bi-instagram i"></i>
              <i class="bi bi-youtube i"></i>
              <i class="bi bi-twitter i"></i>
            </div>
          </div>
          <div>
            <p class="Z">Annuaire officiel</p>
            <div class="a">
              <i class="bi bi-check"></i>
              <p> La présidence</p>
            </div>
            <div class="b">
              <i class="bi bi-check"></i>
              <p> Le gouvernement</p>
            </div>
            <div class="c">
              <i class="bi bi-check"></i>
              <p> Le SIG</p>
            </div>
            <div class="d">
              <i class="bi bi-check"></i>
              <p> Le service public</p>
            </div>
            <div class="e">
              <i class="bi bi-check"></i>
              <p> L'annuaire des institutions</p>
            </div>
          </div>

          <div>
            <p class="f">Liens utiles</p>
            <div class="g">
              <i class="bi bi-check"></i>
              <p> Le Ministère de la Culture</p>
            </div>
            <div class="h">
              <i class="bi bi-check"></i>
              <p> Le Musée national</p>
            </div>
            <div class="j">
              <i class="bi bi-check"></i>
              <p> Investir au Burkina</p>
            </div>
            <div class="k">
              <i class="bi bi-check"></i>
              <p> Burkina24</p>
            </div>
            <div class="l">
              <i class="bi bi-check"></i>
              <p> Documents</p>
            </div>
          </div>
        </section>
        <div class="m">
          <P class="o">Propulsé par. FasoCompute.</P>
          <div class="n">
            <P>ONTB © 2023 Tous droits réservés - Mentions Légales..</P>
          </div>
        </div>
      </section>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
</html>