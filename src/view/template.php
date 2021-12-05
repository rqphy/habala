<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>

        <style>
          * {
            margin: 0px;
            padding: 0px;
          }
          img {
            width: 100%;
          }
          article {
            width: 90%;
            max-width: 200px;
          }
        </style>
    </head>

    <body>
      <?= $content ?>
    </body>
</html>