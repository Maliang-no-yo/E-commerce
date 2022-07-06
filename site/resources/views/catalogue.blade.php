<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ 'css/catalogue.css' }}" />
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
        <a href="{{ 'panier' }}"><img class="navicon2" src="{{ 'images/caddie.png' }}" width="20px"></a>
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
    <div class="catalogue">
        <div class="row">
            <div class="produit">
                <h6></h6>
                <a href="{{ 'product' }}"><img class="icon" src="{{ 'images/nezuko.jpg' }}"></a>
                <h5>200€</h5>
                <a href="{{ 'panier' }}"><button class="bouton">Acheter</button></a>
            </div>
            <div class="produit">
                <h6></h6>
                <a href="{{ 'product' }}"><img class="icon" src="{{ 'images/nezuko.jpg' }}"></a>
                <h5>200€</h5>
                <a href="{{ 'panier' }}"><button class="bouton">Acheter</button></a>
            </div>
            <div class="produit">
                <h6></h6>
                <a href="{{ 'product' }}"><img class="icon" src="{{ 'images/nezuko.jpg' }}"></a>
                <h5>200€</h5>
                <a href="{{ 'panier' }}"><button class="bouton">Acheter</button></a>
            </div>
            <div class="produit">
                <h6></h6>
                <a href="{{ 'product' }}"><img class="icon" src="{{ 'images/nezuko.jpg' }}"></a>
                <h5>200€</h5>
                <a href="{{ 'panier' }}"><button class="bouton">Acheter</button></a>
            </div>
        </div>
        <div class="row">
            <div class="produit">
                <h6></h6>
                <a href="{{ 'product' }}"><img class="icon" src="{{ 'images/nezuko.jpg' }}"></a>
                <h5>200€</h5>
                <a href="{{ 'panier' }}"><button class="bouton">Acheter</button></a>
            </div>
            <div class="produit">
                <h6></h6>
                <a href="{{ 'product' }}"><img class="icon" src="{{ 'images/nezuko.jpg' }}"></a>
                <h5>200€</h5>
                <a href="{{ 'panier' }}"><button class="bouton">Acheter</button></a>
            </div>
            <div class="produit">
                <h6></h6>
                <a href="{{ 'product' }}"><img class="icon" src="{{ 'images/nezuko.jpg' }}"></a>
                <h5>200€</h5>
                <a href="{{ 'panier' }}"><button class="bouton">Acheter</button></a>
            </div>
            <div class="produit">
                <h6></h6>
                <a href="{{ 'product' }}"><img class="icon" src="{{ 'images/nezuko.jpg' }}"></a>
                <h5>200€</h5>
                <a href="{{ 'panier' }}"><button class="bouton">Acheter</button></a>
            </div>
        </div>
        <div class="row">
            <div class="produit">
                <h6></h6>
                <a href="{{ 'product' }}"><img class="icon" src="{{ 'images/nezuko.jpg' }}"></a>
                <h5>200€</h5>
                <a href="{{ 'panier' }}"><button class="bouton">Acheter</button></a>
            </div>
            <div class="produit">
                <h6></h6>
                <a href="{{ 'product' }}"><img class="icon" src="{{ 'images/nezuko.jpg' }}"></a>
                <h5>200€</h5>
                <a href="{{ 'panier' }}"><button class="bouton">Acheter</button></a>
            </div>
            <div class="produit">
                <h6></h6>
                <a href="{{ 'product' }}"><img class="icon" src="{{ 'images/nezuko.jpg' }}"></a>
                <h5>200€</h5>
                <a href="{{ 'panier' }}"><button class="bouton">Acheter</button></a>
            </div>
            <div class="produit">
                <h6></h6>
                <a href="{{ 'product' }}"><img class="icon" src="{{ 'images/nezuko.jpg' }}"></a>
                <h5>200€</h5>
                <a href="{{ 'panier' }}"><button class="bouton">Acheter</button></a>
            </div>
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
