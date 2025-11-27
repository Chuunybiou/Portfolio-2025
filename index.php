<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo-entreprise.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Playwrite+DE+Grund+Guides&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Anthony Bouillon</title>
</head>
<body>
    <nav class="container-fluid navbar navbar-expand-lg px-5 bg-color fixed-top">
        <div class="container ">

            <img src="img/logo-entreprise.png" alt="Logo" class="img-fluid" width="70" height="70">
       
            <div class="d-flex justify-content-end">
                <ul class="navbar-nav fw-bold">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link text-white" href="#homelink" id="home">ACCUEIL</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link text-white" href="#avislink" id="avis">AVIS</a>
                    </li>
                       <li class="nav-item d-none d-lg-block">
                        <a class="nav-link text-white" href="#servicelink" id="service">SERVICE</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link text-white" href="#projectlink" id="project">PROJET</a>
                    </li>
                 
                    
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link text-white" href="#contactlink" id="contact">CONTACT</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link " href="https://www.bonusparrainage.com/" id="promo">Bon plan</a>
                    </li>
                    <li class="nav-item mx-3 translate-icon" style="cursor: pointer;" onclick="Mylang()" >
                     
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                        <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z"/>
                        <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31"/>
                        </svg>
                        <span style="font-size: 10px;">FR-VN-EN</span>
                           <button type="button" class="btn btn-primary" id="button-lang">FR</button>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    
    <section class="section-home  " style="padding-top: 160px;" id="homelink">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 order-md-2" >
                    <div class="about-image">
                        <img src="img/profil2.jpg" alt="Profil" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 my-5 text-center text-sm-start order-md-1">
                    <span class="text-white fs-5 mb-5">Bonjour, je suis Anthony</span>
                    <h1 class="mb-3 mt-4 text-white fs-2">
                        Technicien en informatique à distance
                        <br>
                        <span>Développeur Web</span>
                        <br>
                        <span>Retoucheur d'image</span>
                        <br>
                        <span>Monteur vidéo</span>
                    </h1>
                    <p class="d-none d-sm-block text-white mt-5">
                        Donnez-moi 50% de votre confiance, je vous donnerai 100% de satisfaction.
                        <br>
                        J’accompagne les entreprises, indépendants et particuliers dans la création de site web, le montage vidéo, les retouches photo et le dépannage informatique à distance.

                    </p>
                    <a href="img/CV.pdf" class="btn bg-color my-2 px-5 text-white fw-bold text-uppercase swing-element">Télécharger le CV</a>
                </div>
            </div>
        </div>
    </section>


    <section class="p-5 text-center section-review bg-light" id="avislink">
        <div class="row">

            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-body m-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/charlandrine.jpg"
                                class="rounded-circle img-fluid " alt="woman avatar" width="200" height="200" />
                            </div>
                            <div class="col-lg-8">
                                <p class="text-color mb-4" style="min-height: 200px;" id="comment-1">
                                    “Un immense merci à Anthony pour son super travail sur notre vidéo ! Tu as su être à l’écoute, attentif aux moindres détails, toujours prêt à ajuster pour que tout soit parfait. Ton envie de bien faire se ressent à chaque étape, et le résultat final est juste top ! C’est certain, je te confierai d’autres projets sans hésiter. Merci encore pour ton professionnalisme et ton engagement !”
                                </p>
                                <p class="fw-bold"><strong>Charlandrine El Bouanani</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">

                <div class="card">
                    <div class="card-body m-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="img/john.jpg"
                                class="rounded-circle img-fluid" alt="woman avatar" width="200" height="200" />
                            </div>
                            <div class="col-lg-8">
                                <p class="text-color mb-4" style="min-height: 200px;" id="comment-2">
                                    “Merci a toi de prendre les commandes a distance.
                                    Probleme et paramètres ordinateur regle en seulement quelques minutes. Très professionnel et a l'écoute je recommande.
                                    Merci Anthony”
                                </p>
                                <p class="fw-bold"><strong>John Lavezzi</strong></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Service 7 - Bootstrap Brain Component -->
    <section class="bsb-service-7 py-5 py-xl-8" style="background-image: url(img/coolbackgrounds-particles-stellar2.png);" id="servicelink">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7" id="servicesJS">
            <h3 class="fs-5 mb-2 text-white text-secondary text-center text-uppercase">Services</h3>
            <p class="mb-5 text-white">Je transforme vos contenus bruts en visuels professionnels et percutants, je propose un support informatique fiable et rapide à distance (en personne uniquement sur la ville de Québec) et je conçois des sites vitrines sur-mesure</p>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="container-fluid   shadow">
            <div class="row bg-light">
                <div class="col-12 card col-md-4">
                <div class=" border-0 bg-transparent">
                    <div class="card-body text-center "  id="service-1JS">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="56" height="56"  fill="currentColor" class="bi bi-camera-reels-fill text-color-bg mb-4" viewBox="0 0 16 16">
                        <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path d="M9 6a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                        <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"/>
                        </svg>
                    <h5 class="text-uppercase mb-4">Montage vidéo et retouche photo</h5>
                    <p class="mb-4  text-color"  style="min-height: 240px;">Que ce soit pour des réseaux sociaux, des présentations d’entreprise, des événements ou des contenus marketing, je mets mon expertise à votre service pour couper, traduire et faire de petites animations légères.</p>
                
                    </div>
                </div>
                </div>


                <div class="col-12 col-md-4 card">
                <div class=" border-0 bg-transparent">
                    <div class="card-body text-center" id="service-2JS">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="56" height="56" fill="currentColor" class=" text-color-bg mb-4" viewBox="0 0 16 16">
                        <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5"/>
                        </svg>
                        <h5 class="text-uppercase mb-4">Assistance informatique</h5>
                        <p class="mb-4  text-color"  style="min-height: 240px;">Besoin d’un coup de main pour résoudre un problème technique, optimiser votre ordinateur, sécuriser vos données ou installer un logiciel ? Je propose un support informatique fiable, rapide et à distance, pour particuliers comme pour professionnels.</p>
                
                    </div>
                </div>
                </div>


                <div class="col-12 col-md-4 card">
                <div class=" border-0 bg-transparent">
                    <div class="card-body text-center" id="service-3JS">
                        <svg xmlns="http://www.w3.org/2000/svg"  width="56" height="56" fill="currentColor" class="bi bi-file-earmark-code-fill text-color-bg mb-4" viewBox="0 0 16 16">
                        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708"/>
                        </svg>
                        <h5 class=" text-uppercase mb-4">Développement de sites vitrines</h5>
                        <p class="mb-4  text-color"  style="min-height: 270px;">Vous souhaitez une présence en ligne claire, élégante et efficace ? Je conçois des sites vitrines sur-mesure, modernes et adaptatifs (responsive design), pour mettre en valeur votre activité, améliorer votre visibilité et attirer de nouveaux clients.</p>
                    
                    </div>
                </div>
                </div>


            </div>
            </div>
        </div>
        </div>
    </div>

    </section>




    <section class="py-5 text-center container" id="projectlink">
        <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto" id="portfolioJS">
            <h1 class="fw-light">Portfolio</h1>
            <p class="text-color">De l’idée à la pratique, découvrez quelques projets qui illustrent mon savoir-faire et ma passion du web — des créations développées avec soin, alliant technique et esthétique.</p>
            <p>
            <a href="#contactlink" class="btn bg-color my-2 px-5 text-white swing-element">DEVIS</a>
            <a href="#" class="btn bg-color-b my-2  px-5 text-white swing-element" style="width: 150px;">CV</a>
            </p>
        </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


            <div class="col">
            <div class="card ">
                <video width="100%" height="225" controls>
                    <source src="img/11.10.25.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                 

                <div class="card-body">
                <p class="card-text text-color" id="p-portfolio-1JS">L’objectif du montage, qui ne dure que quelques secondes était de réduire la taille de la vidéo, tout en intégrant un générique de fin. Cette vidéo est un exemple.</p>
                <div class="d-flex justify-content-between align-items-center">
                  
                    <small class="text-muted">08-2025</small>
                </div>
                </div>
            </div>
            </div>

            <div class="col">
            <div class="card">
                <img src="img/portfolio1.png" alt="" width="100%" height="225">

                <div class="card-body">
                <p class="card-text text-color" id="p-portfolio-2JS">Montage à la demande d'une cliente pour une vidéo de mariage pleine d’émotion, capturant chaque sourire, chaque regard et chaque instant unique de cette journée inoubliable</p>
                <div class="d-flex justify-content-between align-items-center">
                    
                    <small class="text-muted">09-2025</small>
                </div>
                </div>
            </div>
            </div>

            <div class="col">
            <div class="card ">
                <img src="img/logo-entreprise.png" alt="" width="100%" height="225">
                <div class="card-body">
                <p class="card-text text-color" id="p-portfolio-3JS">Plus qu’un symbole, un logo représente la promesse de qualité et de confiance que nous offrons à nos clients, qui incarne vos valeurs et votre vision pour une identité claire et reconnaissable.</p>
                <div class="d-flex justify-content-between align-items-center">
                   
                    <small class="text-muted">10-2025</small>
                </div>
                </div>
            </div>
            </div>
        
                    </div>
                    </div>
                </div>






<div class="container-fluid py-5 section-contact" id="contactlink">
  <div class="row justify-content-center">
    <div class="col-lg-9">
      <h1 class="mb-3 text-white" id="h1-contactJS">Contactez-moi</h1>
      <p class="text-color-bg  " id="p-contactJS">Besoin d'un site web, de retoucher une vidéo, une photo ou besoin d'une assistance bureautique ? Contactez-moi par mail, messenger ou directement via le formulaire de contact.</p>
      
      <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["name"])) {
              $name = $_POST["name"];
              $surname = $_POST["surname"];
              $email = $_POST["email"];
              
              $message = $_POST["message"];

              $to = "email-professionnel@tutanota.com"; // Remplacez par votre adresse email
              $subject = "Auto entrepreneur - Anthony Bouillon" . ' - ' . $_POST["subject"];
              $body = "Nom: $name\nPrenom: $surname\nEmail: $email\nMessage: $message";
              $headers = "From: $email";

              if (mail($to, $subject, $body, $headers)) {
                $messagesuccess = "Votre message a été envoyé avec succès !";
               
              } 
            }
             if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["email"]) && empty($_POST["name"])) {
              $name = $_POST["name"];
              $surname = $_POST["surname"];
              $email = $_POST["email"];
              
              $message = $_POST["message"];

              $to = "email-professionnel@tutanota.com"; // Remplacez par votre adresse email
              $subject = "Auto entrepreneur - Anthony Bouillon" . ' - ' . $_POST["subject"];
              $body = "Email: $email\nNewsletter";
              $headers = "From: $email";

              if (mail($to, $subject, $body, $headers)) {
              
                $inscription = "Votre inscription à la newsletter est valide !";
              } 
            }
        ?>
      
      <form method="POST" action="#contactlink">
        <div class="row g-3">
          <div class="col-md-6 ">
            <label for="your-name" class="form-label text-white" id="form-name">Nom</label>
            <input type="text" class="form-control card" id="your-name" name="name" required>
          </div>
          <div class="col-md-6">
            <label for="your-surname" class="form-label text-white" id="form-firstname">Prénom</label>
            <input type="text" class="form-control card" id="your-surname" name="surname" required>
          </div>
          <div class="col-md-6">
            <label for="your-email" class="form-label text-white" id="form-email">Email</label>
            <input type="email" class="form-control card" id="your-email" name="email" required>
          </div>
          <div class="col-md-6">
            <label for="your-subject" class="form-label text-white" id="form-subject">Sujet</label>
            <input type="text" class="form-control card" id="your-subject" name="subject">
          </div>
          <div class="col-12">
            <label for="your-message" class="form-label text-white" id="form-message">Message</label>
            <textarea class="form-control card" id="your-message" name="message" rows="5" required></textarea>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-md-6">
                <button  type="submit" class="btn bg-color text-white w-100 fw-bold swing-element"  id="form-send">Envoyer</button>
              </div>
               <div class="text-white">
                      <?php if (!empty($messagesuccess)) {
                        echo $messagesuccess ;} ?>
                </div>
            </div>
          </div>
        </div>
      </form>




    </div>
  </div>
</div>






                      <!-- Footer -->
            <footer class="bg-body-tertiary text-center container-fluid">
            <!-- Grid container -->
            <div class="container p-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                <!-- Facebook -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-facebook-f"></i
                ></a>

                <!-- Twitter -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-twitter"></i
                ></a>

                <!-- Google -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-google"></i
                ></a>

                <!-- Instagram -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-instagram"></i
                ></a>

                <!-- Linkedin -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-linkedin-in"></i
                ></a>

                <!-- Github -->
                <a data-mdb-ripple-init class="btn btn-outline btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-github"></i
                ></a>
                </section>
                <!-- Section: Social media -->

                <!-- Section: Form -->
                <section class="">
                <form  method="POST" action="#contactlink">
                    <!--Grid row-->
                    <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                        <p class="pt-2">
                        <strong id="strong-newsletter">S'inscrire à notre newsletter</strong>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                        <input type="email" id="form5Example24" class="form-control" name="email" required />
                        <label class="form-label" for="form5Example24">Email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto">
                        <!-- Submit button -->
                        <button data-mdb-ripple-init type="submit" class="btn bg-color text-color mb-4 swing-element" id="button-register-newletter">
                            Inscription
                        </button>
                         <div class="text-success">
                      <?php if (!empty($inscription)) {
                        echo $inscription ;} ?>
                </div>
                    </div>
                    <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </form>
                </section>
                <!-- Section: Form -->

                <!-- Section: Text -->
                <section class="mb-4">
                <p class="text-color" id="p-footer">
                    Tout les liens sociaux et autres sites web par le meme proprietaire ici !
                </p>
                </section>
                <!-- Section: Text -->

                <!-- Section: Links -->
                <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase" id="h5-footer-rs">Réseaux sociaux</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                        <a class=" text-color" href="https://www.facebook.com/profile.php?id=61579766477914">Facebook</a>
                        </li>
                        <li>
                        <a class="text-color" href="https://www.linkedin.com/in/anthony-bouillon-québec/">Linkedin</a>
                        </li>
                        <li>
                        <a class="text-color" href="https://www.instagram.com/anthonybouillonqc/">Instagram</a>
                        </li>
                     
                    </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase" id="h5-footer-sw">Site Web</h5>
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="text-color" href="https://anthony-bouillon.com/parrainage/">Bon plan pour économiser</a>
                            </li>
                           
                        </ul>
             
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase" id="h5-footer-p">Parrainage</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                        <a class="text-color" href="https://www.1parrainage.com/listeannonces_113218_Cremefrai.php?cat=2&texte=Cremefrai&catOK=2">1parrainage</a>
                        </li>
                        <li>
                        <a class="text-color" href="https://www.parrainplus.fr/pages/user_page.php?id=319">Parrainplus</a>
                        </li>
                
                    </ul>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2025 Copyright: Anthony Bouillon 
                <div class="text-white">
                    <?php
                
// Définir les permissions (à utiliser avec prudence)
$permissions = 0777; // équivalent à chmod 777
chmod("compteur.txt", $permissions);
chmod("ip.txt", $permissions);

$ip = fopen('ip.txt', 'c+');

$check = fgets($ip);

$file = fopen('compteur.txt', 'c+');

$count = intval(fgets($file));

if($_SERVER['REMOTE_ADDR'] != $check)

{

fclose($ip);

$ip = fopen('ip.txt', 'w+');

fputs($ip, $_SERVER['REMOTE_ADDR']);
$count++;
fseek($file, 0);

fputs($file, $count);
}
fclose($file);
fclose($ip);
echo $count;
?>
                </div>
                
            </div>
            <!-- Copyright -->
            </footer>
            <!-- Footer -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>