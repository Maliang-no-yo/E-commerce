<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ 'css/style.css' }}" />
    <meta charset="UTF-8">
</head>

<header>
    <div>
        <br>
        <h1 class="titre">Japan Heroes</h1>
        <a><img class="jh" src="{{ 'images/logo.png' }}"></a>
    </div>
    <nav class="navbar">
        <div>
            <ul>
                <li><a href="#" class="link">Tout</a></li>
                <li><a href="#" class="link">Shonen</a></li>
                <li><a href="#" class="link">Shojo</a></li>
                <li><a href="#" class="link">Seinen</a></li>
                <li><a href="#" class="link">Yuri/Yaoi</a></li>
            </ul>
        </div>
    </nav>
</header>

<body>
    <br>
    <div class="informations">
        <h2>Changement de mot de passe</h2><br>
        <label><b>Email :</b></label>
        <input type="text" placeholder="Entrer un email" required><br><br>
        <label><b>Ancien mot de passe :</b></label>
        <input type="password" placeholder="Entrer l'ancien mot de passe" required><br><br>
        <label><b>Nouveau mot de passe :</b></label>
        <input type="password" placeholder="Entrer un nouveau mot de passe" required><br><br>
        <input class="bouton" type="submit" id='submit' value='VALIDER'><br>

    </div>
</body>

<footer>
    <div class="icons">
        <a href="https://www.facebook.com/profile.php?id=100075021253001" target="_blank"><img class="logo"
                src="{{ 'images/fbb.jpg' }}" width="50" height="50"></a>
        <a href="https://twitter.com/JH_Figurines" target="_blank"><img class="logo"
                src="{{ 'images/twitter.jpg' }}" width="50" height="50"></a>
    </div>
    <p class="copyright">Tous les vendeurs de figurines © 2015</p>
</footer>

</html>
