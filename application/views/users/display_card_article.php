<?php include('header.php')?>
<!-- <?php print_r($article) ?> -->

<div class="container" style="margin-top: 10px">
	<h1>Article </h1>
  	<div class="card" style="width:1000px">
    	<img class="card-img-top text-italic" src="<?=$article->image_path?>" alt="Card image" style="width:100%">
    	<div class="card-body">
      		<h4 class="card-title text-primary"><?= $article->article_title ?></h4>
      		<p class="card-text text-body"><?= $article->article_body ?></p>
      		<p class="card-text text-danger text-right"> <span class = "text-dark">Data : </span><?= $article->create_at ?></p>

		</div>
  	</div>
 <?php include('footer.php')?>