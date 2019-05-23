<?php require 'partials/head.php'; ?>

    <div>
        <h3>Forms</h3>

        <form action="/names" method="POST">
            <input name="name">

            <button type="submit" value="Submit">submit</button>
        </form>
    </div>

    <div>
        <?php foreach ($users as $user) :?>
            <li><?php echo $user->name; ?></li>
        <?php endforeach; ?>
    </div>

<?php require 'partials/footer.php'; ?>