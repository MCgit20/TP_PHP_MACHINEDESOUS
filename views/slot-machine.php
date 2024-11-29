<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machine à rouleaux</title>
    <link rel="stylesheet" href="<?= "/public/css/style.css?v=" . filemtime(ROOT . "/public/css/style.css") ?>">
</head>
<body>
<div class="container">
    <h1>🎰 Machine à rouleaux 🎰</h1>
    <article class="slot-machine">
        <div class="reel" id="reel1">🍒</div>
        <div class="reel" id="reel2">🍒</div>
        <div class="reel" id="reel3">🍒</div>
    </article>
    <button id="spinButton">Lancer</button>
    <div id="result"></div>
</div>
<script src="<?= "/public/js/slot-machine.js?v=" . filemtime(ROOT."/public/js/slot-machine.js") ?>"></script>
</body>
</html>