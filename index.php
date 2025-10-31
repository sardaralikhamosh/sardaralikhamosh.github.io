<?php
// Basic Info Variables
$name = "Sardar Ali";
$title = "Computer Science Researcher | Web Developer";
$email = "sardaralikhamosh@gmail.com";
$location = "Gilgit-Baltistan, Pakistan";
$bio = "I’m a passionate Computer Science researcher with interests in Artificial Intelligence, Computational Biology, and Web Development. 
I have experience in developing intelligent systems, designing responsive web applications, and conducting advanced research in RNA structure prediction using AI.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Official portfolio of <?php echo $name; ?> — <?php echo $title; ?>">
  <title><?php echo $name; ?> | Portfolio</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      background: #f5f7fa;
      color: #333;
      line-height: 1.6;
    }
    header {
      background: #222;
      color: #fff;
      padding: 2rem 0;
      text-align: center;
    }
    header h1 { margin: 0; font-size: 2rem; }
    header p { color: #ccc; margin: 0.5rem 0 0; }

    main {
      max-width: 800px;
      margin: 2rem auto;
      background: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    h2 { color: #0056b3; border-bottom: 2px solid #eee; padding-bottom: 0.5rem; }
    .info { margin-bottom: 1.5rem; }
    footer {
      text-align: center;
      padding: 1rem;
      background: #222;
      color: #bbb;
      font-size: 0.9rem;
      margin-top: 2rem;
    }
  </style>
</head>
<body>
  <header>
    <h1><?php echo $name; ?></h1>
    <p><?php echo $title; ?></p>
  </header>

  <main>
    <section class="info">
      <h2>About Me</h2>
      <p><?php echo $bio; ?></p>
    </section>

    <section class="info">
      <h2>Contact</h2>
      <p><strong>Email:</strong> <?php echo $email; ?></p>
      <p><strong>Location:</strong> <?php echo $location; ?></p>
    </section>
  </main>

  <footer>
    © <?php echo date("Y"); ?> <?php echo $name; ?> — All rights reserved.
  </footer>
</body>
</html>
