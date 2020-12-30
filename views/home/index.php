<?PHP
include "../../controller/conseilC.php";
include "../../controller/forum.php";
require_once '../../Model/forum.php';

$conseil_dC = new conseil_dC();
$listeconseils = $conseil_dC->afficherConseil();
$forumC = new forumC();
$listeforum = $forumC->afficherforum();
if (isset($_POST['submit'])) {

    $forum = new forum(1, $_POST['nom'], $_POST['prenom'], $_POST['message']);
    $forumC->ajouterForum($forum);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SAHTY - Index</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../assets/img/hhh.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Delicious - v2.1.0
    * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">

    <div class="container text-right">
        <i class="icofont-phone"></i> +1 5589 55488 55
        <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">


    <div class="container d-flex align-items-center">
        <img class="log" src="../../assets/img/hhh.png" alt="hhh" width="50px" height="70px">
        <div class="logo mr-auto">

            <h1 class="text-light"><a href="index.html"><span>SAHTY</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="index.html">Acceuil</a></li>
                <li><a href="#about">Qui sommes nous?</a></li>
                <li><a href="#menu">Comptes</a></li>
                <li><a href="#specials">Conseils</a></li>
                <li><a href="#events">Regimes</a></li>
                <li><a href="#chefs">Meta</a></li>
                <li><a href="#gallery">Carte</a></li>
                <li><a href="#contact">Contact</a></li>

                <li class="book-a-table text-center"><a href="#book-a-table">Acheter</a></li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background: url(../../assets/img/slide/slide-1.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown"><span>Delicious</span> Restaurant</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <div>
                                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Qui sommes
                                    nous?</a>
                                <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Acheter</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background: url(../../assets/img/slide/slide-2.jpg);">
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <div>
                                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Qui sommes
                                    nous?</a>
                                <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Acheter</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background: url(../../assets/img/slide/slide-3.jpg);">
                    <div class="carousel-background"><img src="../../assets/img/slide/slide-3.jpg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <div>
                                <a href="#menu" class="btn-menu animate__animated animate__fadeInUp scrollto">Qui sommes
                                    nous?</a>
                                <a href="#book-a-table" class="btn-book animate__animated animate__fadeInUp scrollto">Acheter</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-5 align-items-stretch video-box"
                     style='background-image: url("assets/img/about.jpg");'>
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4"
                       data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                    <div class="content">
                        <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>
                        <p class="font-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.
                            </li>
                            <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate
                                velit.
                            </li>
                            <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda
                                mastiro dolore eu fugiat nulla pariatur.
                            </li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Whu Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="section-title">
                <h2>Why choose <span>Our Restaurant</span></h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div class="box">
                        <span>01</span>
                        <h4>Lorem Ipsum</h4>
                        <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero
                            placeat</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box">
                        <span>02</span>
                        <h4>Repellat Nihil</h4>
                        <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire
                            leno para dest</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box">
                        <span>03</span>
                        <h4> Ad ad velit qui</h4>
                        <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam
                            quis</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Whu Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container">

            <div class="section-title">
                <h2>Check our tasty <span>Menu</span></h2>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="menu-flters">
                        <li data-filter="*" class="filter-active">Show All</li>
                        <li data-filter=".filter-starters">Starters</li>
                        <li data-filter=".filter-salads">Salads</li>
                        <li data-filter=".filter-specialty">Specialty</li>
                    </ul>
                </div>
            </div>

            <div class="row menu-container">

                <div class="col-lg-6 menu-item filter-starters">
                    <div class="menu-content">
                        <a href="#">Lobster Bisque</a><span>$5.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <div class="menu-content">
                        <a href="#">Bread barrel</a><span>$6.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-starters">
                    <div class="menu-content">
                        <a href="#">Crab Cake</a><span>$7.95</span>
                    </div>
                    <div class="menu-ingredients">
                        A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <div class="menu-content">
                        <a href="#">Caesar Selections</a><span>$8.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <div class="menu-content">
                        <a href="#">Tuscan Grilled</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-starters">
                    <div class="menu-content">
                        <a href="#">Mozzarella Stick</a><span>$4.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Lorem, deren, trataro, filede, nerada
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <div class="menu-content">
                        <a href="#">Greek Salad</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Fresh spinach, crisp romaine, tomatoes, and Greek olives
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-salads">
                    <div class="menu-content">
                        <a href="#">Spinach Salad</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                    </div>
                </div>

                <div class="col-lg-6 menu-item filter-specialty">
                    <div class="menu-content">
                        <a href="#">Lobster Roll</a><span>$12.95</span>
                    </div>
                    <div class="menu-ingredients">
                        Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
        <h1>LES CONSEILS</h1>
        <h3>Veuillez choisir votre maladie </h3>
        <label>Maladies:</label>
        <select name="maladies">
            <option value="">--choisir--</option>
            <option value="ob">Obésité</option>
            <option value="di">Diabète</option>
            <option value="ch">cholestérole</option>
            <option value="gr">grippe</option>
            <option value="al">alopécie</option>
            <option value="ac">Acné</option>
        </select>

        <input type="submit" value="Envoyer">


        <h1>Obésité :</h1>
        <br>
        <img src="ob.jpg" alt="" width="550">
        <h2>Alimentation équilibrée :</h2>
        <h3>Au moins 5 fruits et légumes par jour</h3>
        <p>A chaque repas, en cas de petits creux, crus, cuits, natures ou préparés, frais,
            surgelés ou en conserve
        </p>
        <h3>Réduire la quantité le soir </h3>
        <p>Le soir, nous mangeons trop, une mauvaise habitude (convivialité oblige, la famille se retrouve) prise dans
            nos sociétés occidentales.<br>
            Résultat:
            ce qui est ingéré n’est pas « brûlé » puisqu’après le dîner nous allons dormir (pas d’effort, donc les
            calories s’accumulent). <br>
            Un conseil: réduisez d’au moins un tiers ce que vous mangez le soir, pour tout le monde pareil,
            votre enfant s’en portera mieux.</p>
        <h3>Poisson : au moins deux fois par semaine</h3>
        <p>Matières grasses ajoutées : limiter la consommation
            Privilégier les matières grasses végétales (huile d’olive, de colza…)
            Favoriser la variété
            Limiter les graisses d’origine animale (beurre, crème)
        </p>
        <h3>Produits sucrés : limiter la consommation</h3>
        <p>Attention aux boissons sucrées
            Attention aux aliments gras et sucrés à la fois (pâtisseries, viennoiseries, crèmes
            dessert, chocolats, glaces)
        </p>

        <h3>De l’eau à volonté !</h3>
        <p>Au cours ou en dehors des repas
            Limiter les boissons sucrées
            Pas de boissons alcoolisées ni de pré-mix
        </p>
        <h3>Sel : limiter la consommation</h3>
        <p>Préférer le sel iodé
            Ne pas resaler avant de goûter
            Réduite l’ajout de sel dans les eaux de cuisson
            Limiter les fromages et les charcuteries les plus salés et les produits apéritifs salés
        </p>

        <h3>Au moins l’équivalent d’une demi-heure à une heure de marche rapide chaque</h3>
        <p>À intégrer dans la vie quotidienne (marcher, monter les escaliers, faire du vélo…)
            La nutrition englobe les apports et les dépenses énergétiques, c’est-à-dire,
            l’alimentation
            et l’activité physique. Limiter les activités sédentaires (télévision, consoles de jeux,
            ordinateur)
        </p>
        <h1>Diabète : </h1>
        <img src="a.jpg" alt="" width="550">

        <h3>Concernant les repas</h3>
        <p>Prenez trois repas équilibrés par jour et, au besoin, des collations. Évitez de sauter des repas.
            <br>

            Ayez un horaire de repas régulier. Ceux-ci devraient être espacés d’environ 4 à 6 heures.
        </p>

        <h3>Limitaion des sucreries</h3>
        <p>Limitez la consommation d’aliments sucrés et peu nutritifs (gâteaux, pâtisseries,
            <br>sucreries, chocolat, biscuits, cassonade, miel, mélasse, sirops, confitures, etc.).</p>

        <h3>Modérer certains produits</h3>

        <p>Si vous consommez des substituts du sucre (aspartame, sucralose, cyclamates, saccharines, stevia, etc.) <br>
            ou des produits qui en contiennent, faites-le avec modération.
            <br>

            Si vous consommez de l’alcool, faites-le de préférence en mangeant et respectez les quantités recommandées.
        </p>

        <h3>Limitation de sel</h3>
        <p>• Limitez la consommation d’aliments riches en sel : croustilles, charcuteries, <br>mets préparés ou
            surgelés, marinades, sauces ou soupes du commerce, etc.

        </p>

        <h1>Le cholestérole</h1>
        <img src="1.jpg" alt="" width="550">
        <h3>L'alimentation</h3>
        <p>
            • Manger beaucoup de légumes verts et de crudités (au moins une portion de chaque par jour) et au moins deux
            fruits frais.<br>
            <br>

            • Utiliser des huiles végétales (tournesol, olive, colza...) pour la cuisine et l'assaisonnement,
            <br> afin de réduire l'ingestion de graisses saturées néfastes. Éviter les margarines dures les huiles de
            palme et de coprah.

        </p>
        <h3>Diminution des apports en graisses</h3>
        <p>• Diminuer les apports en graisses saturées (d'origine animale terrestre)<br>
            <br>
            : éviter le beurre, la crème, les charcuteries et les viandes <br>
            grasses, les fromages gras, les pâtisseries, viennoiseries, tartes salées et pizzas qui comportent souvent
            une grande quantité de graisses.<br>

            <br>
            Préférer les viandes blanches : veau, dinde et poulet.
        </p>

        <h1>La grippe</h1>
        <img src="7.jpg" alt="" width="550">
        <h3>Se soigner aux herbes médicinales</h3>
        <p>• Adopter l’eucalyptus, il permet d’apaiser la toux et les maux de gorge<br>
            <br>
            • Boire beaucoup d’eau pour éviter la déshydratation liée à la fièvre<br>
            <br>
            • Opter pour l’arnica pour limiter les courbatures<br>
            <br>
            • Utiliser la menthe poivrée, aux propriétés décongestionnantes, pour soulager le nez bouché<br>
            <br>
        </p>

        <h3>Les bonnes pratiques</h3>
        <p>• Dormir pour aider le corps à mieux résister face au virus<br>
            <br>
            • Consommer de la vitamine C : elle contribue au renforcement des défenses immunitaires<br>
            <br>
            • Faire une cure de sureau, sous forme de baies et fleurs, c’est un remède présentant des propriétés
            antivirales.
        </p>


        <h1>L'alopécie</h1>
        <img src="4.jpg" alt="" width="550">

        <p> Miser sur des soins capillaires anti-chute pour des cheveux plus forts<br>
            Certaines lotions capillaires antichute permettent de fortifier les cheveux secs et cassants et aident à
            réguler <br>

        <h3> une vie saine </h3>
        La santé des cheveux est aussi liée au mode de vie que l’on a au quotidien et à son alimentation.<br>
        <h3> les agressions du quotidien qui fragilisent la chevelure</h3>
        Le cuir chevelu est régulièrement exposé à des agressions extérieures diverses (vent, soleil, pollution
        etc.).<br>
        <h3> Opter pour un séchage doux après un shampoing </h3>
        Si l’étape lavage est importante, celle du séchage des cheveux l’est tout autant.
        <br>
        Soyez donc également vigilant sur l’utilisation du sèche-cheveux <br>
        <h3>Consulter un dermatologue </h3>
        Il n’est pas toujours facile de se rendre compte soi-même si la perte de cheveux est vraiment importante ou pas.<br>

        </p>

        <h1>L'acné</h1>
        <img src="6.jpg" alt="" width="550">
        <h3>L'hygiène de vie à adopter</h3>

        <p>Limiter l'exposition au soleil sans protection solaire<br>

            <br>
            Ne pas toucher aux boutons d'acnés<br>
            <br>
            Eviter les produits à base d'alcool, comédogènes (maquillage)<br>
            <br>
            Bien hydrater sa peau de façon quotidienne<br>
            <br>
            Limiter la consommation de tabac<br>

        </p>

        <h2>pour afficher un conseil veuillez ....:</h2>
        <button class="w3-button w3-black"><a target="_blank" href="http://localhost/back1/views/afficherconseil.php"
                                              class="w3-button w3-black">afficher</a></button>
        <h2>pour modifier un conseil veuillez ....:</h2>
        <button class="w3-button w3-black"><a target="_blank" href="http://localhost/back1/views/modifierconseil.php"
                                              class="w3-button w3-black">modifierr</a></button>
        <h2>pour ajouter un conseil veuillez ....:</h2>
        <button class="w3-button w3-black"><a target="_blank" href="http://localhost/back1/views/addconseil.php"
                                              class="w3-button w3-black">ajouter</a></button>
        <h2>pour supprimer un conseil veuillez ....:</h2>
        <button class="w3-button w3-black"><a target="_blank" href="http://localhost/back1/views/supprimerconseil.php"
                                              class="w3-button w3-black">supprimer</a></button>
        <h1>
            <center>bienvenue dans ce forum</center>
        </h1>
        <center>
            <button class="w3-button w3-black"><a target="_blank" href="http://localhost/forum_connexion_inscription"
                                                  class="w3-button w3-black">commenti li t7eb</a></button>
        </center>

    
        <?PHP
        foreach ($listeconseils as $conseil) {
            ?>

            <h2> <?PHP echo $conseil['titre']; ?> </h2>
            <img src="<?PHP echo "../uploads/" . $conseil['image']; ?>" alt="conseil" width="550" height="350">
            <br>
            <p><?PHP echo $conseil['description']; ?> </p>
            <br>
            <br>


            <?PHP
        }
        ?>

        <h1>Forum</h1>


    </section><!-- End Events Section -->
    <div class="container">
        <?PHP
        foreach ($listeforum

        as $forum) {
        ?>
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-8">

                <div class="d-flex">
                    <div>
                        <label>Nom :</label>
                        <p><?PHP echo $forum['nom']; ?> </p>
                    </div>
                    <div class="ml-4">
                        <label style="margin-left: 10px">Prenom :</label>
                        <p><?PHP echo $forum['prenom']; ?> </p>
                    </div>
                </div>
                <br>
                <div>
                    <textarea readonly class="form-control"><?PHP echo $forum['message']; ?> </textarea>
                </div>
            </div>
        </div>
            <?PHP
            }
            ?>
            <br>
            <br>

        <br>
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="" method="post">
                    <div class="d-flex">
                        <div>
                            <label>nom</label>
                            <input name="nom" type="text" class="form-control">
                        </div>
                        <div class="ml-5">
                            <label>prenom</label>
                            <input name="prenom" class="form-control " type="text">
                        </div>
                    </div>
                    <DIV class="mt-5">
                        <label>Message</label>

                        <TEXTAREA NAME="message" style="height: 300px" class="form-control"></TEXTAREA>
                    </DIV>
                    <button type="submit" name="submit" class="btn btn-success" style="width: 250px;margin-top: 30px">
                        Envoyer 
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    
    
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    <section id="events">
        <h1 id="regime">Les régimes </h1>
        <p>Un régime est une modification des habitudes alimentaires pour affiner sa silhouette et atteindre son poids
            idéal. Le choix du régime n'est pas à prendre à la légère. Informez-vous sur ses contre-indications, sa
            durée, ses contraintes. notre société vous dit comment bien choisir votre régime.</p>
        <hr>
        état du personne
        <input list="etat">
        <datalist id="etat">
            <select name="" id="MySelect">
                <option value="diabétique">
                <option value="obésité">
                <option value="hyperprotéiné">
                <option value="protéiné">
                <option value="dissocié">
                <option value="hypocalorique">
                <option value=" végétarien">
                <option value="anticellulite">
                <option value=" Détox">
                <option value="sans sel">
                <option value="hypoglucidique">
            </select>


        </datalist>


        <!--<input type="submit" value="Envoyer">-->
        <br>
        <label for="Etat physique">Etat physique:
        </label><br>

        <input type="radio" name="Etat physique" id="Etat physique" value="sportif" checked><label for="sportif">sportif
        </label><br>
        <input type="radio" name="Etat physique" id="Etat physique" value="Debutant"><label for="Debutant">Debutant
        </label> <br>
        <input type="radio" name="Etat physique" id="Etat physique" value="Inpratiquant" checked><label
                for="Inpratiquant">Inpratiquant
        </label><br>


        </tr>
        <tr>

            <label id="lab">Age:
                <input id="age" type="number" oninput="calsPerDay()" value="">
                Ans
            </label><br>


        </tr>
        <tr>


            <label id="lab">Taille:
                <input id="height" type="number" oninput="calsPerDay()" value="">
                En metres
            </label><br>


        </tr>


        <tr>


            <label id="lab">Poids:
                <input id="weight" type="number" oninput="calsPerDay()" value="">
                En Kg
            </label><br>
        </tr>
        <tr>

            <input type="submit" value="Envoyer">


            <input type="reset" value="Annuler">
            <br>
        </tr>

        <br>
        <h2>le régime Détox</h2>

        <img id="diab" src="../../assets/img/detox.PNG" alt="" width="300" height="300">
        <br>
        <p>Même s’il permet d’éliminer quelques kilos en trop, le régime détox a pour vocation première de purifier son
            organisme en éliminant les mini-toxines. Il existe plusieurs méthodes de détox comme la monodiète, le
            jucing, la raw food. Quelle que soit la cure choisie, on consomme majoritairement des fruits et de légumes
            sous forme de soupes, de jus et de salades. Une bonne hydratation est aussi capitale, il faut boire au moins
            deux litres d’eau par jour pour drainer. Alcool, sucres raffinés et graisses saturées sont quant à eux
            bannis des repas. A cela, on complète avec une activité sportive douce, mais attention pas d’activité
            intense comme le running, le tennis, la natation. Notre organisme étant à la diète, on risque
            l’hypoglycémie. On préfère donc les sports de relaxation comme le yoga, le pilates ou la marche à pieds.</p>
        <br>
        <br>
        <h2>le régime hyperprotéiné</h2>

        <img src="../../assets/img/hyperpro.PNG" alt="" width="150">
        <br>
        <p>C’est l’un des régimes les plus connus. En adoptant une alimentation importante en protéines, le régime
            hyperprotéiné permet de perdre rapidement des kilos tout en gardant sa masse musculaire. Afin de compenser
            le manque de graisse, on mange plus de protéines (viandes, œufs, poissons).</p>
        <br>
        <br>
        <h2>le régime protéiné </h2>

        <img src="../../assets/img/pro.PNG" alt="" width="150">
        <br>
        <p>Le régime protéiné est un régime hypocalorique dont est le but est d’augmenter les apports quotidiens en
            protéines. Les protéines permettent une perte de poids rapide. Les repas sont soit composé d’aliments riches
            en protéines, soit des substituts de repas protéinés, vendus en sachets.</p>
        <br>
        <br>
        <h2>le régime dissocié </h2>

        <img src="../../assets/img/disso.PNG" alt="" width="150">
        <br>
        <p>Les régimes dissociés, qui ne reposent sur aucun argument scientifique, autorisent de manger de tout (ou
            presque), mais pas au même moment. Aucun aliment n’est interdit, mais plusieurs aliments de nature
            différente ne peuvent être consommés ensemble.</p>
        <br>
        <br>
        <h2>le régime hypocalorique </h2>

        <img src="../../assets/img/hypocal.PNG" alt="" width="150">
        <br>
        <p>Le régime hypocalorique permet d’abaisser les sucres et les matières grasses afin d´obliger son corps à
            puiser son énergie dans ses réserves de graisse. Résultat ? Une perte de poids immédiate. Etant très
            restrictif, il est recommandé de surveiller que le régime hypocalorique ne vous procure pas de carences en
            éléments nutritionnels.</p>
        <br>
        <br>
        <h2> le régime végétarien </h2>

        <img src="../../assets/img/veget.PNG" alt="" width="150">
        <br>
        <p>Pour ceux qui veulent mixer hygiène de vie, convictions morales et poids de forme. Cependant, il est
            déconseillé aux enfants et aux femmes enceintes en raison des carences qu'il pourrait provoquer. Il exclut
            les protéines d’origine animale.</p>
        <br>
        <br>
        <h2>le régime anticellulite </h2>

        <img src="../../assets/img/anticell.PNG" alt="" width="150">
        <br>
        <p>La cellulite touche aussi bien les minces que les rondes. Et les causes sont nombreuses : sédentarité, manque
            d’activité ou alimentation déséquilibrée. Le régime anti-cellulite convient à toutes celles qui veulent en
            finir avec la cellulite ! ; donc pour être efficace, il est nécessaire de l’associer à une activité physique
            très régulière.

        </p>
        <br>
        <br>
        <h2> le régime sans sel </h2>

        <img src="../../assets/img/sanssel.PNG" alt="" width="150">
        <br>
        <p>Le sel bouche les artères et notamment celles du cœur. Ce qui à long terme peut conduire à des ennuis de
            santé tel que l’infarctus. Le chlorure de sodium, plus communément appelé sel, retient l’eau dans
            l’organisme et les cellules. Avec le régime sans sel, on diminue la quantité de sel dans le corps et par
            conséquent la quantité d’eau.</p>
        <br>
        <br>
        <h2> le régime hypoglucidique </h2>

        <img src="../../assets/img/hypogluc.PNG" alt="" width="150">
        <br>
        <p>Le régime Low Carb met à l’index tous les sucres. En effet, selon ce régime, seuls les glucides simples ou
            complexes font grossir. Le résultat immédiat du Low Carb est une perte de poids (sous forme de graisse et
            d’eau), mais à moyen et long terme, les conséquences sur la santé peuvent être graves.</p>
        <br>
        <br>
        <h2> régime pour diabétique </h2>

        <img src="../../assets/img/diab.PNG" alt="" width="150">
        <br>
        <p>
            Le diabète est une maladie qui se caractérise par une augmentation de la quantité de glucose dans le sang
            (glycémie). pour les diabétiques de type 1 Il faut quantifier les glucides consommés pour s’injecter la
            bonne dose d’insuline.
            ET pour les diabétiques de type 2 , voici les principales recommandations :

            * 5 fruits et légumes par jour, avec un maximum de 3 fruits
            * 3 produits laitiers par jour
            * Viande / poisson /œufs 1 à 2 fois par jour
            * Limiter les quantités de matières grasses
            * Consommer suffisamment de glucides mais en les choisissant bien
            * Limiter les quantités d’alcool</p>
        <br>
        <br>
        <h2> régime contre l'obésité</h2>

        <img src="../../assets/img/obesite.PNG" alt="" width="150">
        <br>
        <p> le but de ce régime est la perte du poids , il faut manger les fruits et surtout les pommes . En outre le
            persoone qui souffre de l'obesite doit pratiquer le sport au minimum </p>
        
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
        <div class="container">

            <div class="section-title">
                <h2>Book a <span>Table</span></h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>

            <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                               data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                               data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                               data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" name="date" class="form-control" id="date" placeholder="Date"
                               data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" class="form-control" name="time" id="time" placeholder="Time"
                               data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="number" class="form-control" name="people" id="people" placeholder="# of people"
                               data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your booking request was sent. We will call back or send an Email to
                        confirm your reservation. Thank you!
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit">Send Message</button>
                </div>
            </form>

        </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container-fluid">

            <div class="section-title">
                <h2>Some photos from <span>Our Restaurant</span></h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="../../assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">
                            <img src="../../assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="../../assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">
                            <img src="../../assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="../../assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">
                            <img src="../../assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="../../assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">
                            <img src="../../assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="../../assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">
                            <img src="../../assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="../../assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">
                            <img src="../../assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="../../assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">
                            <img src="../../assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="../../assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">
                            <img src="../../assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
        <div id="aawed">
            <label id="lab">Femme:
                <input id="female" type="radio" name="gender" onchange="calsPerDay()">
            </label>
            <label id="lab">Homme:
                <input id="male" type="radio" name="gender" onchange="calsPerDay()">
            </label>
            <label id="lab">Age:
                <input id="age" type="number" oninput="calsPerDay()" value="">
                Ans
            </label>
            <label id="lab">Taille:
                <input id="height" type="number" oninput="calsPerDay()" value="">
                En metres
            </label>
            <label id="lab">Poids:
                <input id="weight" type="number" oninput="calsPerDay()" value="">
                En Kg
            </label>
            <label id="lab">

                Taux métabolique de base: <span id="totalCals"></span> kcal par jour
            </label>
            <a href="" id="enzel">Ressayez</a>
        </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <img src="../../assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <div class="stars">
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                    </div>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                        Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="../../assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <div class="stars">
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                    </div>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram
                        malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="../../assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <div class="stars">
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                    </div>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                        minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="../../assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <div class="stars">
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                    </div>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                        velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                        veniam.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="../../assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <div class="stars">
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                        <i class="icofont-star"></i>
                    </div>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                        culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                        quid.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2><span>Contact</span> Us</h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>
        </div>

        <div class="map">
            <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container mt-5">

            <div class="info-wrap">
                <div class="row">
                    <div class="col-lg-3 col-md-6 info">
                        <i class="icofont-google-map"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street<br>New York, NY 535022</p>
                    </div>

                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="icofont-clock-time icofont-rotate-90"></i>
                        <h4>Open Hours:</h4>
                        <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
                    </div>

                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@example.com<br>contact@example.com</p>
                    </div>

                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="icofont-phone"></i>
                        <h4>Call:</h4>
                        <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                    </div>
                </div>
            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                    <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                               data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                               data-rule="email" data-msg="Please enter a valid email"/>
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                           data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required"
                              data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center">
                    <button type="submit">Send Message</button>
                </div>
            </form>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>Sahty</h3>
        <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi
            placeat.</p>
        <div class="social-links">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
            &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="../../assets/vendor/jquery/jquery.min.js"></script>
<script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="../../assets/vendor/php-email-form/validate.js"></script>
<script src="../../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../../assets/vendor/venobox/venobox.min.js"></script>
<script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>

<!-- Template Main JS File -->
<script src="../../assets/js/main.js"></script>

</body>

</html>