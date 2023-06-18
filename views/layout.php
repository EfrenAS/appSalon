<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Salón</title>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kreon:wght@300;400;700&family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
  <link rel="preload" href="build/css/app.css" as="style">
  <link rel="stylesheet" href="build/css/app.css">
</head>

<body>
  <div class="app-container">
    <div class="image"></div>
    <div class="app">
      <?php echo $contenido; ?>
    </div>
  </div>
</body>

</html>