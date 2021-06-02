<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Practitioner</title>
  <style>
    header{
      background: #efefef;
      text-align: center;
      padding: 2em;
    }
  </style>
</head>
<body>
  
    <ul>
      <?php foreach ($tasks as $task): ?>
        <li>
        <?php if ($task->completed): ?>
          <strike><?= $task->description ?></strike>
        <?php else: ?>
          <?= $task->description ?></li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
</body>
</html>