<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kibun</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #525351, #41443f, #383937, #313230);
            font-family: Arial, sans-serif;
        }

        .button-container {
            text-align: center;
        }

        .button {
            display: inline-block;
            padding: 15px 30px;
            margin: 20px;
            font-size: 18px;
            text-decoration: none;
            color: white;
            background-color: #24ff96;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #1fe784;
        }
    </style>
</head>
<body>
    <div style="display: flex; flex-direction: column;">
        <div style="text-align: center; color: #24ff96">
            Projekt komunikacja człowiek-komputer.
        </div>
        <div class="button-container">
            <a href="/graphiql" class="button" style="color: black">Testowanie zapytań graphql</a>
            <a href="/download-apk" class="button" style="color: black">Pobierz apk</a>
        </div>
    </div>

</body>
</html>
