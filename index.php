<?php
    include_once('common.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles/skyrim.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">

    <title><?php echo $lang['PAGE_TITLE']; ?></title>
</head>

  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

  <main role="main" class="inner cover mt-auto">
    <h1 class="cover-heading"><?php echo $lang['MAIN_TITLE']; ?></h1>
    <?php
        if ($json[$appid]["data"]["price_overview"]["discount_percent"] > 0)
        {
    ?>
            <p class="lead"><?=$lang['RES_POSITIVE'];?></p>
            <p class="lead">
                <a href="https://store.steampowered.com/app/<?=$appid;?>" class="btn btn-lg btn-secondary">
                    <?=$lang['BUTTON_STEAM'];?>
                </a>
            </p>
    <?php
        }
        else
        {
    ?>
            <p class="lead"><?=$lang['RES_NEGATIVE'];?></p>
    <?php
        }
    ?>
    
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    </div>
  </footer>
</div>
</body>
</html>
