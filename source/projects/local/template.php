<!DOCTYPE html>
<html>
  <head>
    <?php include "res/parts/head.php"; ?>
  </head>
  <body><div id="body-wrp">
    <nav class="top">
      <a href="/" class="banner">
        <div>
          <img src="res/logo.png"></img>
          <div>
            <div>Miko0000</div>
          </div>
        </div>
      </a>
      <div class="nav"><div>
        <div>
          <div>
            <a href="projects">Projects</a>
          </div>
        </div>
        <div>
          <div>
            <a href="blog">Blog</a>
          </div>
        </div>
        <div>
          <div>
            <a href="store">Store</a>
          </div>
        </div>
      </div></div>
      <div class="where">
        Projects
      </div>
      <div class="app clock">
        <div>00:00</div>
      </div>
    </nav>
    <div class="top placeholder"></div>
    <div class="banner">
      <div style="background-image: <?= "$project_banner" ?>" class="image"></div>
      <div class="description">
        <div class="title">
          <?= "$project_name" ?>
        </div>
        <div class="text">
          <?= "$project_description" ?>
        </div>
      </div>
    </div>
    <div class="content">
      <?= $project_detail ?>
    </div>
  </div></body>
</html>