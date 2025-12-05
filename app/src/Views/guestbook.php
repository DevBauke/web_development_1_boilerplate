<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastenboek!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>gastenboek</h1>
    <?php
    var_dump(value: $posts);
    ?>
    <?php
    if (!empty($posts)){ ?>
        
        <h1>Guestbook Entries</h1>
        <ul>
            <?php foreach ($posts as $post){ ?>
                <li>
                    <?= $post['name']; ?>
                </li>
            <?php } ?> 
        </ul>
    <?php } else { ?>
        <p>No entries found in the guestbook.</p>
    <?php } ?>
    <form action="/guestbook" method="post">
        <label for="name">Name</label>
        <input required type="text" id="name" name="name">

        <label for="email">Email (optional)</label>
        <input type="email" id="email" name="email" placeholder="name@example.com">

        <label for="message">Name</label>
        <input required type="text" id="message" name="message" rows="4">

        <button type="submit">Submit</button>

    </form>
</body>
</html>