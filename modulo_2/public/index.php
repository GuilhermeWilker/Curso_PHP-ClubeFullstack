<?php require '../bootstrap.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP - Clube Fullstack</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container mt-4">
      <?php

      try {
          require load();
      } catch (Exception $e) {
          echo $e->getMessage();
      }
?>
    </div>
  </body>
</html>
