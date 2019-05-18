<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson arrays</title>
</head>
<body>
    <?php require 'nav.php'; ?>

    <header>
        <h1> <?php //echo $greeting; ?></h1>
    </header>

    <h1>users</h1>
    <div>
        <h3>lesson arrays</h3>
        <ul>
            <?php foreach ($names as $name) : ?>
            <li><?php echo $name; ?></li>
            <?php endforeach;?>
        </ul>
    </div>

    <div>
        <h3>associative arrays</h3>
        <ul>
            <?php foreach ($persons as $key => $person) : ?>
            <li><?php echo $key. ' : '. $person; ?></li>
            <?php endforeach;?>
        </ul>
    </div>

    <div>
        <h3>booleans</h3>
        <ul>
            <li><?php echo $l_tasks['title']; ?></li>
            <li><?php echo $l_tasks['due']; ?></li>
            <li><?php echo $l_tasks['assigned']; ?></li>
            <li><?php echo $l_tasks['completed'] ? 'complete' : 'Incomplete'; ?></li>
        </ul>
    </div>

    <div>
        <h3>functions</h3>
        <p> <?php permission(12); ?> </p>
    </div>

    <div>
        <h3>Classes</h3>
        <ul>
            <?php foreach ($tasks as $task) :?>
            <li>
                <?php if ($task->completed) :?>
                <strike> <?php echo $task->description; ?></strike>
                <?php else: ?>
                <?php echo $task->description; ?>
                <?php endif; ?>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>
</html>