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
        <h2>Inscription</h2><br>
        <form action='/register' method='POST'>
            @csrf
            <label><b>Nom :</b></label>
            <input name="name" type="text" placeholder="Entrer votre nom"><br><br>
            @error('name')
                <label>{{ $message }}</label><br>
            @enderror
            <label><b>Email :</b></label>
            <input name="email" type="email" placeholder="Entrer votre mail"><br><br>
            @error('email')
                <label>{{ $message }}</label><br>
            @enderror
            <label><b>Mot de passe :</b></label>
            <input name="password" type="password" placeholder="Entrer le mot de passe"><br><br>
            @error('password')
                <label>{{ $message }}</label><br>
            @enderror
            <label><b>Confirmation du mot de passe :</b></label>
            <input name="password_confirmation" type="password" placeholder="Entrer le mot de passe"><br><br>
            @error('password_confirmation')
                <label>{{ $message }}</label><br>
            @enderror
            <input class="bouton" type="submit" id='submit' value='INSCRIPTION'><br>
        </form>
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
