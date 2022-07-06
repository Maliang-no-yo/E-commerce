<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="{{ 'css/style.css' }}" />
    <meta charset="UTF-8">
</head>

<header>
    <div>
        @if (Auth::check())
            <a class="navicon" width: 8%;>
                {{ Auth::user()->name }}
            </a>
        @endif
        <a href="{{ 'panier' }}"><img class="navicon2" src="{{ 'images/caddie.png' }}"></a>
        <a href="{{ '..' }}" class="navicon3" width="7%">Se déconnecter</a>
        @if (Auth::user()->admin == 1)
            <a href="{{ 'admin' }}" class="navicon_admin" width: 10%;>Nouveau produit</a>
        @endif
    </div>
    <div>
        <br>
        <h1 class="titre"> Japan Heroes</h1>
        <a href="{{ 'catalogue' }}"><img class="jh" src="{{ 'images/logo.png' }}"></a>
    </div>
    <nav class="navbar">
        <div>
            <ul>
                <li><a href="{{ 'catalogue' }}" class="link">Tout</a></li>
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
        <form action='/product' method='POST'>
            @csrf
            <h2>Ajouter un nouveau produit</h2><br>
            <label><b>Titre :</b></label><br>
            <input type="text" name="name" class="champ" placeholder="Nom du produit" required><br><br>
            <label><b>Catégorie :</b></label><br>
            <select class="champ" name="category" class="inputbox">
                <option value="shonen">Shonen</option>
                <option value="shojo">Shojo</option>
                <option value="seinen">Seinen</option>
                <option value="yuri/yaoi">Yuri/Yaoi</option>
            </select><br><br>
            <label><b>Résumé :</b></label><br>
            <textarea type="text" name="resume" class="champ" placeholder="Nom du personnage et de l'anime"
                required></textarea><br><br>
            <label><b>Description :</b></label><br>
            <textarea type="text" name="description" class="champ"
                placeholder="Description du personnage et de la figurine" required></textarea><br><br>
            <label><b>Prix :</b></label><br>
            <input type="number" name="price" class="champ" placeholder="Prix initial" required><br><br>
            <label><b>Image :</b></label><br>
            <input type="file" name="picture" accept="image/png, image/jpeg, image/jpg"><br><br>
            <label><b>Stock :</b></label><br>
            <input type="number" name="quantity" class="champ" placeholder="Nombre d'articles en entrepot"
                required><br><br>
            <input class="bouton" type="submit" id='submit' value='AJOUTER'>
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
