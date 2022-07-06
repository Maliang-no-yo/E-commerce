<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{ 'css/style.css' }}" />
</head>

<body>
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
</body>

</html>
