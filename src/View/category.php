<!DOCTYPE html>
<html>
<head> ... </head>
<body>
<section>
    <h1>Category</h1>
    <ul>
        <?php foreach ($categories as $category) : ?>
            <li><?= $category['title'] ?></li>
        <?php endforeach ?>
    </ul>
</section>
</body>
</html>
