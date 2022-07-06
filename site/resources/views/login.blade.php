<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="{{ 'css/style.css' }}" />
    <meta charset="UTF-8">
</head>

<header>
    <div>
        <br>
        <h1 class="titre"> Japan Heroes</h1>
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
        <form action='/login' method='POST'>
            @csrf
            <h2>Connexion</h2><br>
            <label><b>Email :</b></label>
            <input type="text" name="email" placeholder="Entrer le mail" required><br><br>
            <label><b>Mot de passe :</b></label>
            <input type="password" name="password" placeholder="Entrer le mot de passe" required><br><br>
            <a class="choix" href="{{ 'register' }}">S'inscrire</a>
            <a class="choix" href="{{ 'reset' }}">Mot de passe oublié</a><br><br>
            <input class="bouton" type="submit" id='submit' value='CONNEXION'>
        </form>
    </div><br>
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
