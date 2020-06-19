<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, user-scalable=no">
        <meta name="theme-color" content="#292929">

        <title>Accueil | lucienmary.be</title>

        <link href="https://fonts.googleapis.com/css?family=Staatliches:400,700%7CWork+Sans:300,400" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/styles/main.css">
    </head>
    <body>
        <header>
            <a href="#">ML</a>

            <a href="#">Menu</a>

            <img src="./assets/images/lucien@2x.jpg" srcset="./assets/images/lucien@2x.jpg 2x" alt="">

            <h1>Lucien Mary</h1>
            <p><strong>Développeur web</strong></p>

            <ul>
                <li>
                    <a href="https://github.com/lucienmary">GitHub</a>
                </li>

                <li>
                    <a href="https://twitter.com/marylucien1998">Twitter</a>
                </li>

                <li>
                    <a href="mailto:marylucien1998@gmail.com">Email</a>
                </li>
            </ul>

            <a href="#">Scroll</a>
        </header>

        <section>
            <header>
                <h2>À propos de moi...</h2>
            </header>

            <p>Je m’appelle Lucien Mary, j’ai 21 ans. Je suis étudiant en DWM à la Haute École Albert Jacquard de Namur. Je me suis dirigé vers ces études après avoir fini mes secondaires avec une qualification en infographie. Ce que je préfère dans la création web, c’est la programmation en JavaScript.</p>

            <footer>
                <a href="#">Me contacter ?</a>
            </footer>
        </section>

        <section>
            <header>
                <h2>Mes projets</h2>
            </header>

            <p>Cliquez sur un projet pour l'afficher!</p>
            <ul>

                <!-- Lecture du JSON et affichage des projets. -->
                <?php
                    $json = file_get_contents("projects.json");
                    $parsed_json = json_decode($json);

                    foreach ($parsed_json as $key => $value) {
                        $cpt++;
                        $name = $parsed_json->{$cpt}->{'name'};
                        $desc = $parsed_json->{$cpt}->{'desc'};
                        $date = $parsed_json->{$cpt}->{'date'};

                        echo '<li>

                            <img src="./assets/images/project-' . $cpt . '.png" alt="Image '. $name .'">
                            <h3>'. $name .'</h3>
                            <p>'. $date .'</p>
                            <p>'. $desc .'</p>
                        </li>';
                    }

                 ?>
            </ul>
        </section>

        <footer>
            <a href="#">Me contacter</a>
            <p>Lucien Mary - 2020</p>
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</html>
