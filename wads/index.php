<?php
$wads = json_decode(file_get_contents(__DIR__ . '/wads.json'), true);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../style.css">
		<title>Robin's WADs Downloader</title>
		<link rel="icon" type="image/x-icon" href="../content/favicon.png">
		<link href="https://material-icons.github.io/material-icons-font/css/all.css" rel="stylesheet" />
		<link href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css" rel="stylesheet" />
		<meta content="Robin's WADs Downloader" property="og:title" />
    	<meta
    		content="Download the latest WADs made by Robin! Download fresh WADs now!"
    		property="og:description"
    	/>
    	<meta content="https://wads.robin91862.pl.eu.org/" property="og:url" />
    	<meta content="#00118f" data-react-helmet="true" name="theme-color" />
	</head>
	<body>
		<div class="grid centergrid">
			<?php foreach ($wads as $wad): ?>
			<div class="WAD">
				<img src="<?= htmlspecialchars($wad['thumbnail']) ?>" class="thumbnail">
				<span class="wadname"><?= htmlspecialchars($wad['wadname']) ?></span>
				<div class="wadinfo">
					<i class="material-icons md-18 md-info" style="color: rgba(255,255,255,1); top: 3px; left: 3px; position: absolute;"></i>
					<span class="wadinfotext"><?= htmlspecialchars($wad['wadinfotext']) ?></span>
				</div>
				<div class="waddesc">
					<span class="wadtitleid">Title ID: <?= htmlspecialchars($wad['wadtitleid']) ?></span>
					<span class="wadblocks">Blocks: <?= htmlspecialchars($wad['wadblocks']) ?></span>
				</div>
				<a href="<?= htmlspecialchars($wad['preview']) ?>" target="_blank" class="preview">
					<i class="material-icons md-24 md-preview" style="color: rgba(255,255,255,1); position: absolute; top: 20%; left: 20%;"></i>
				</a>
				<a href="../download.php?id=<?= urlencode($wad['download']) ?>" target="_blank" class="download">
					<i class="material-icons md-24 md-download" style="color: rgba(255,255,255,1); position: absolute; top: 20%; left: 20%;"></i>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
		<footer>
			<div class="grid-footer">
			<div class="footer-item1"><p>I am not associated with Nintendo nor its affiliates. I am also not associated with other services for the Wii.</p></div>
				<div class="footer-item2">
					<p>Made by a Polish person for you</br>Made by <b>Robin91862</b></p>
					<a href="mailto:hello@robin91862.pl.eu.org"><i class="mdi mdi-email" style="font-size: 28px; color: rgba(255,255,255,1); padding-left: 0px; padding-right: 5px;"></i></a>
					<a href="https://youtube.com/@Robin91862"><i class="mdi mdi-youtube" style="font-size: 28px; color: rgba(255,255,255,1); padding-left: 0px; padding-right: 5px;"></i></a>
					<a href="https://github.com/Robin91862"><i class="mdi mdi-github" style="font-size: 28px; color: rgba(255,255,255,1); padding-left: 0px; padding-right: 0px;"></i></a>
				</div>
			</div>
		</footer>
	</body>
</html>
