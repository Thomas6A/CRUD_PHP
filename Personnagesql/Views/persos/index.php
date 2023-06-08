<?php require_once 'Views/head.php'; ?>

<a href="../perso/create" class="btn btn-primary">Ajouter un Perso</a>

<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Classe</th>
        <th>Race</th>
        <th>Stat d'attaque</th>
        <th>Stat de défense</th>
    </tr>
    <?php foreach ($persos as $perso) : ?>
        <tr>
            <td><?= $perso->getId() ?></td>
            <td><?= $perso->getName() ?></td>
            <td><?= $perso->getClasse() ?></td>
            <td><?= $perso->getRace() ?></td>
            <td><?= $perso->getStatattaque() ?></td>
            <td><?= $perso->getStatdefense() ?></td>
            <td> <a href="../perso/update/<?= $perso->getId() ?>" class="btn btn-success">Mettre à jour</a></td>
            <td>
                <form method="post" action="../perso/delete/<?= $perso->getId() ?>">
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'Views/foot.php'; ?>