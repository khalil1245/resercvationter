<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sen Ter</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f8f8f8;
        }

        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 1px;
            text-align: left;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #34495e;
            padding: 0px;
        }

        nav a {
            color: #ecf0f1;
            text-decoration: none;
            padding: 12px 20px;
            margin: 0 10px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #2c3e50;
        }

        section {
            padding: 40px;
            text-align: center;
            background-color: #ecf0f1;
        }

        h2 {
            color: #2c3e50;
        }

        p {
            color: #333;
            line-height: 1.6;
        }

        footer {
            background-color: #2c3e50;
            color: #ecf0f1;
            text-align: center;
            padding: -40px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sen Ter</h1>
    </header>

    <nav>
        <a href="#">Accueil</a>
        <a href="#">À propos</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
        @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Inscription</a>
                        @endif
                    @endauth
            @endif
    </nav>

    <section  style="background-image: url('../assets/images/a.jpeg'); background-size: cover; height: 1000px;">
        <h2>Bienvenue sur ma jolie page!</h2>
        <p>Cette page est un exemple simple avec une barre de navigation et une section de contenu.</p>
    </section>

    <footer>
        <p>© 2024 Ma Jolie Page. Tous droits réservés.</p>
    </footer>
</body>
</html>
