<?php 
  require_once(__DIR__.'/../lib/global.inc.php');
?>
<!DOCTYPE HTML>
<html>

<head>
<title><?=$cfg['main-site-title']?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?=$cfg['meta-description']?>" />
<meta name="keywords" content="<?=$cfg['meta-keywords']?>" />

<meta name="author" content="<?=$cfg['name']?>" />
<?php if (isset($cfg['google-plus-link'])): ?>
<link rel="author" href="<?=$cfg['google-plus-link']?>"/>
<?php endif; ?>
<link rel="stylesheet" href="css/resume.css"/>
</head>

<body>
<!-- I have 2 h1 tags because the name and job title are equally important but I want the possibility of styling them differently -->
<header>
<h1 class="name"><?=$cfg['name']?></h1>
<h1 class="job-title"><?=$cfg['job-title']?></h1>
<h2 class="location"><?=$cfg['location']?></h2>
</header>

<main>
<!-- an ordered list because order matters what do you want peope to see first -->
<ol class="skills">
<?php foreach($cfg['skills'] as $skill){ ?>
<li><?=htmlentities($skill)?></li>
<?php } ?>
</ol>

<section class="highlights">
<h3>Highlights</h3>
<ul class="highlights">
<?php foreach($cfg['highlights'] as $highlight): ?>
<li><?=$highlight?></li>
<?php endforeach; ?>
</ul>
</section>

<?php if (isset($cfg['employment'])): ?>
<section class="emploment">
<h3>Employment</h3>
	<ol class="employment">
	<?php foreach($cfg['employment'] as $job): ?>
	<li>
		<h4><span class="client"><?=$job['client']?></span> <span class="dates"><span class="from date"><?=$job['from']?></span> <span class="to date"><?=$job['to']?></span></span></h4>
		<?php if (isset($job['points'])): ?>
		<ul class="points">
		<?php foreach($job['points'] as $point): ?>
		<li><?=$point?></li>
		<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</li>
	<?php endforeach; ?>
	</ol>
</section>
<?php endif; ?>
</main>

<footer>
<p>Copyright &copy; <?=date('Y')?> <?=$cfg['name']?></p>
</footer>
<script src="js/global.js"></script>
<script src="js/page.index.js"></script>
</body>
</html>
