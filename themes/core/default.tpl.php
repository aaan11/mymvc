<!doctype html>
<html lang="sv"> 
<head>
  <meta charset = " <?=$charset?> ">
  <title><?=$title?></title>
  <link rel="stylesheet" href="<?=$stylesheet?>">
</head>
<body>
  <div id="header">
    <?=$header?>
  </div>
  <div id="main" role="main">
    <?=$main?>
    <?=get_debug()?>
  </div>
  <div id="footer">
    <?=$footer?>
  </div>
</body>
</html> 