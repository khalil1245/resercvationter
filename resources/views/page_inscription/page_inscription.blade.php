<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Inscription</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #3498db, #6dd5fa, #ffffff);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .signup-container {
            width: 400px;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #333;
        }

        h2 {
            margin-bottom: 20px;
            color: #3498db;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
            color: #333;
        }

        button {
            background-color: #27ae60;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #219d4e;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Inscription</h2>
        <form action="/signup" method="post">
            
            <label for="lastName">Nom :</label>
            <input type="text" id="lastName" name="name" required>

            

            
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

           
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">S'inscrire</button>
        </form>
    </div>
</body>
</html>
