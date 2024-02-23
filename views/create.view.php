<!DOCTYPE html>
<html lang="en">
<?php include('partials/head.php'); ?>
<body>
    <?php include('partials/nav.php'); ?>

    <form method="POST" action="/item">
        <label for="name">naam</label><br>
        <input name="name" type="text"><br>
        <label for="number">aantal</label><br>
        <input name="price" type="number"><br>
        <label for="price">prijs</label><br>
        <input name="price" type="text"><br>
        <input type="submit">
        
    </form>
    
</body>
</html>