<?php

use App\Model\PostsDao;

require_once '../../vendor/autoload.php';
require_once '../Controller/PostsDao.php';

$posts = new PostsDao();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Home</title>
</head>

<body>
  <header class="header">
    <div class="container">
      <h1>Twitter</h1>
      <button>Bem Vindo</button>
    </div>
  </header>

  <section class="posts">
    <div class="container-posts">
     <?php
        foreach($posts->read() as $value){
          echo "<header class='posts-header'>";
          echo " <h1>". $value["nome"] ." </h1>";
          echo " <h2> by: ". $value["titulo"] ." </h2>";
          echo " <p>". $value["descricao"] ." </p>";
          echo "</header>";
        }
     ?>
    </div>
  </section>
</body>

</html>

