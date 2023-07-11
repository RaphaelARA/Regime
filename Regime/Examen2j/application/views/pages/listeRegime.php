<!DOCTYPE html>
<html>
<head>
    <title>Liste des régimes</title>
</head>
<body>
    <h1>Liste des régimes</h1>
    <table>
        <tr>
            <th>Num régime</th>
            <th>Type</th>
            <th>Durée</th>
            <th>%Viande</th>
            <th>%Volaille</th>
            <th>%Poisson</th>
            <th>Prix</th>
        </tr>
        <?php foreach ($liste_regime as $regime) : ?>
            <tr>
                <td><?php echo $regime->nom; ?></td>
                <td><?php echo $regime->type; ?></td>
                <td><?php echo $regime->duree; ?></td>
                <td><?php echo $regime->pourcentageV; ?></td>
                <td><?php echo $regime->pourcentageL; ?></td>
                <td><?php echo $regime->pourcentageP; ?></td>
                <td><?php echo $regime->prix; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
