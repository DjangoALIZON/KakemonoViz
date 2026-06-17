<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Demande de devis</title>
</head>
<body>

<h1>Demande de devis</h1>

<form action="traitement_devis.php" method="post">

    <label>Nom :</label>
    <input type="text" name="nom" required>

    <br><br>

    <label>Email :</label>
    <input type="email" name="email" required>

    <br><br>

    <label>Largeur :</label>
    <input type="number" name="largeur">

    <br><br>

    <label>Hauteur :</label>
    <input type="number" name="hauteur">

    <br><br>

    <label>Type de support :</label>
    <select name="support" id="support" required>
        <option value="" disabled selected>-- Sélectionnez un support --</option>
        <option value="kakemono">Kakémonos</option>
        <option value="rollup">Roll-ups</option>
        <option value="banderole">Banderoles</option>
        <option value="personnalise">Supports personalisés</option>
    </select>

    <br><br>

    <label>Description :</label>
    <textarea name="description"></textarea>

    <br><br>

    <button type="submit">
        Envoyer
    </button>

</form>

</body>
</html>