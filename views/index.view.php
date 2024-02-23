<!DOCTYPE html>
<html lang="en">
<?php include('partials/head.php'); ?>
<body>
    <?php include('partials/nav.php'); ?>
    <table>
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Subtotaal</th>
        </tr>
        
        <?php foreach ($boodschappen as $item) { ?>
            <tr>
                <td><?= $item['name']; ?></td>
                <td><?= $item['number']; ?></td>
                <td><?= $item['price']; ?></td>
                <td><?= $item['price'] * $item['number']; ?></td>
            </tr>
        <?php } ?>
    <table>
</body>
</html>