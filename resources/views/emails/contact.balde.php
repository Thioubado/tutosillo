<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Prise de contact sur mon beau site</h2>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <ul>
        <li><strong>Nom</strong>: {{$contact['nom']}}</li>
        <li><strong>Email</strong>: {{$contact['email']}}</li>
        <li><strong>Message</strong>: {{$contact['message']}}</li>
    </ul>
</body>
</html>