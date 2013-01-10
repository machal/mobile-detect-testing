<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

// iOS/Android
$is_ios_android = ($detect->isiOS() || $detect->isAndroidOS());
 
// iOS/Android tablet
$is_tablet = ($detect->isTablet() && $is_ios_android);
 
// iOS/Android smartphone
$is_smartphone = ($detect->isMobile() && !$detect->isTablet() && $is_ios_android);

// Krapophone
$is_dumphone = ($detect->isMobile() && !$detect->isTablet() && !$is_ios_android);

// Desktop
$is_desktop = (!$is_tablet && !$is_smartphone && !$is_dumbphone);
?>

<!doctype html>
<html lang="cs"> 

  <head>
    <meta charset="UTF-8">    
    <title>mobile_detect.php test</title>
    
    <meta name="viewport" content="width=device-width">
    
    <style>
    
    body {
      font-family: sans-serif;
    }
    
    .bars {
      width: 200px;
      list-style-type: none;
      margin: 0;
      padding: 0;
      border-bottom: 1px solid #ccc;
    }
    
    .bar {
      list-style-type: none;
      color: #999;
      margin: 0;
      padding: .5em;
      text-align: center;
      border: 1px solid #ccc;
      border-bottom: 0;
    }
    
    .bar.active {
      font-weight: bold;
      color: #000;
    }
      
    </style>
    
  </head>
  
  <body>
    
    <div class="container">

      <p>
        <b>Servírovali bychom tuto verzi:</b>
      </p>

        <ul class="bars">          
          <li class="bar <?php echo $is_desktop?'active':''  ?>">
             Desktop
          </li>
          <li class="bar <?php echo $is_tablet?'active':''  ?>">
             iOS/Android tablet
          </li>
          <li class="bar <?php echo $is_smartphone?'active':''  ?>">
             iOS/Android smartphone
          </li>
          <li class="bar <?php echo $is_dumbphone?'active':''  ?>">
             Křápo-phony
          </li>                    
        </ul>

    </div><!-- /container -->
    
  </body>
    
</html>