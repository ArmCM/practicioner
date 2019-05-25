<?php require 'partials/head.php'; ?>

    <header>
        <h1> Alumni</h1>
    </header>

    <div>
        <h3>Forms</h3>

        <form action="/alumni" method="POST">
            <input name="name">

            <button type="submit" value="Submit">submit</button>
        </form>
    </div>

    <div>
        <h3>list</h3>
        <ul>
            <?php foreach ($alumni as $data) : ?>
                <li><?php echo $data->name;?></li>
            <?php endforeach;?>
        </ul>
    </div>

<?php require 'partials/footer.php'; ?>