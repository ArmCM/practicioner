<?php require 'partials/head.php'; ?>
    <div>
        <h3>PDO</h3>
        <ul>
            <?php foreach ($todos as $todo) :?>
                <li>
                    <?php if ($todo->completed) :?>
                        <strike> <?php echo $todo->description; ?></strike>
                    <?php else: ?>
                        <?php echo $todo->description; ?>
                    <?php endif; ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
<?php require 'partials/footer.php'; ?>