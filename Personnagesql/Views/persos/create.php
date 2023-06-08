<?php require_once 'Views/head.php'; ?>

<form action="../perso/create" method="post">
    <div class="form-group">
        <label for="name">Nom du personnage</label>
        <input type="text" name="name" id="name" class="form-control">

        <label for="classe">Classe du personnage</label>
        <input type="text" name="classe" id="classe" class="form-control">

        <label for="race">Race du personnage</label>
        <input type="text" name="race" id="race" class="form-control">

        <label for="statattaque">Stat d'attaque du personnage</label>
        <input type="number" name="statattaque" id="statattaque" class="form-control">

        <label for="statdefense">Stat de défense du personnage</label>
        <input type="number" name="statdefense" id="statdefense" class="form-control">
    </div>
    <button class="btn btn-primary">Ajouter</button>
</form>

<?php require_once 'Views/foot.php'; ?>