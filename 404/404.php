<!DOCTYPE html>
<html lang="en">
<?php
$hote = $_SERVER['HTTP_HOST'];
$host = "https://";
$host .= $hote;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/15a2a289be.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>404</title>
</head>

<body>
    <div class="wrap">
        <div class="404">
            <pre><code>
      (<span class="blue">function</span>( inDevelopment ) {
           <span class="blue">function</span> launch() {
              <span class="blue">if</span>( inDevelopment ) {
                  <span class="blue">return</span>;
              }
              <span class="comment">//TODO</span>
        }
      window.addEventListner( <span class="load">'load'</span>, launch );
      }( <span class="blue">true</span> ));
    </code></pre>
            <div class="back">
                <a href="<?php echo $host ?>">→ Retour ←</a>
            </div>
        </div>
    </div>
</body>
<script src="error_404.bundle.js?v=<?= filemtime('error_404.bundle.js'); ?>"></script>


</html>