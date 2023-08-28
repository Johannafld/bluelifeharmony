<?php 
    include('./scripts/config.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="assets/img/logo.png" />
    <title>Blue Life Harmony</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/index.css"/>
    <link rel="stylesheet" href="assets/css/header.css"/>

    <script src="assets/js/index.js"></script>
</head>
<body>
    <?php 
        include('./partials/header.php');
    ?>
    <style>
        #audioPlayer {
            display: none; 
        }
    </style>

    <section class="hero">
        <div class="filter"></div>
        <h1 class="hero-title">Welcome to Blue Life Harmony</h1>
    </section>

    <section class="description">
        <h2 class="titre">C'est quoi l'autisme?</h2>
        <div class="description-content">
            <p class="description-text">
                L'autisme est un trouble neuro-développemental qui affecte la
                communication, le comportement et les interactions sociales. Les
                personnes autistes peuvent présenter des différences dans la manière
                dont elles communiquent, perçoivent le monde et interagissent avec
                les autres. Cependant, il est essentiel de reconnaître que chaque
                personne autiste est unique, avec ses forces et ses défis
                particuliers.
            </p>
            <div class="key-facts">
                <div class="fact">
                    <span class="fact-number">Communication</span>
                    <span class="fact-label">difficultés de communication et d'interaction sociale</span>
                </div>
                <div class="fact">
                    <span class="fact-number">1 sur 54</span>
                    <span class="fact-label">enfants est diagnostiqué autiste</span>
                </div>
                <div class="fact">
                    <span class="fact-number">4 fois</span>
                    <span class="fact-label">plus fréquent chez les garçons que chez les filles</span>
                </div>
                <div class="fact">
                    <span class="fact-number">Comportement</span>
                    <span class="fact-label">comportements répétitifs ou restreints</span>
                </div>
            </div>
        </div>
    </section>

    <section class="video-section">
        <div class="video-container">
            <iframe
                id="videoElement"
                src="https://www.youtube.com/embed/-eHtZHH1AYQ"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
            ></iframe>
        </div>
    </section>

    <section class="info-section">
        <div class="info-container">
            <h2 class="info-title">
                Ensemble pour une société inclusive : L'autisme au cœur de nos actions
            </h2>
            <p class="info-text">
                Le rejet des enfants atteints de troubles autistiques est une réalité préoccupante et souvent méconnue. Malheureusement, en raison de leur différence dans la façon dont ils interagissent et communiquent, les enfants autistes peuvent être confrontés à des situations de rejet et d'exclusion de la part de leurs pairs, de la société en général, voire même de certaines institutions éducatives. Ce rejet peut se manifester de différentes manières, allant de la stigmatisation et des préjugés, à l'ignorance et à l'incompréhension face aux comportements atypiques des enfants autistes. Ces réactions négatives peuvent entraîner un isolement social, une faible estime de soi, ainsi que des difficultés d'apprentissage et de développement. Il est crucial de sensibiliser davantage le public et d'éduquer sur l'autisme afin de briser les barrières de l'incompréhension. L'inclusion des enfants autistes dans les écoles et les activités communautaires est essentielle pour favoriser leur développement social et émotionnel. Il est également important de promouvoir des environnements bienveillants et accueillants, où la diversité est célébrée et où chaque enfant est accepté tel qu'il est. En soutenant et en encourageant l'inclusion des enfants autistes, nous pouvons contribuer à créer une société plus inclusive, où chaque enfant a la possibilité de s'épanouir, de développer ses compétences et de vivre une vie enrichissante. Le rejet n'est pas une réponse appropriée à la différence, et il est de notre devoir de travailler ensemble pour changer les attitudes et les perceptions, afin de créer un monde plus inclusif pour tous.
            </p>
        </div>
    </section>

    <?php 
        include('./partials/footer.php');
    ?>



</body>
</html>
