<?php 
  require_once(__DIR__.'/../lib/global.inc.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?=$cfg['main-page-title']?></title>
</head>
<body>
<!-- I have 2 h1 tags because the name and job title are equally important but I want the possibility of styling them differently -->
<h1 class="name"><?=$cfg['name']?></h1>
<h1 class="job-title"><?=$cfg['job-title']?></h1>
<h2 class="location"><?=$cfg['location']?></h2>

<!-- an ordered list because order matters what do you want peope to see first -->
<ol class="skills">
<?php foreach($cfg['skills'] as $skill): ?>
<li><?=htmlentitites($skill)?></li>
<?php endforeach; ?>
</ol>


<h3>Highlights</h3>
<ul class="highlights">
<?php foreach($cfg['highlights'] as $highlight): ?>
<li><?=$highlight?></li>
<?php endforeach; ?>
</ol>


<script src="js/global.js"></script>
<script src="js/page.index.js"></script>
</body>
</html>
