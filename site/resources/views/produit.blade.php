<html>

<head>
    <link rel="stylesheet" href="{{ 'css/style.css' }}" />
    <link rel="stylesheet" href="{{ 'css/produits.css' }}" />
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
    <div class="all">
        <br><img class="presentation" src="{{ 'images/nezuko.jpg' }}"><br>
        <div class="infos">
            <h2> Figurine Kamado Nezuko, Kimestsu no Yaiba</h2><br>
            <h4>Catégorie : Shonen</h4>
            <p>
                Statuette du personnage Kamado Nezuko du manga Kimetsu no Yaiba/Demon Slayer.<br>
                Format 42cm x 26cm.<br><br>
            <h4>Description :</h4>
            Lorsque Nezuko est dans une situation désespérée, elle peut se transformer en un état berserk, avec des
            crêtes démoniques, qui apparaissent comme des tatouages de vigne, autour de son corps, ses veines qui
            ressortent et une corne unique qui dépasse du côté droit de son front. Cette forme améloire les capacités de
            combat de Nezuko, mais elle devient plus démoniaque et a besoin de se nourrir de sang humain. Jusqu'à
            présent, le seul moyen pour elle de revenir à la normale est de se faire chanter une berceuse par quelqu'un
            (dans son cas Tanjiro). Pendant le combat de la Tueuse de démons contre Hantengu, Nezuko parvient à
            contrôler cette forme à volonté.<br><br>
            </p>
            <p class="prix">299,90€</p><br>
            <p class="restant">Il reste 8 articles.</p><br>
            <input class="bouton" type="submit" id='submit' value='AJOUTER AU PANIER'>
        </div>
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
