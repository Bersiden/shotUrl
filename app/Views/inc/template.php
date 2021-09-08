<html>

     <head>
  
        <title>Site Title</title>
        
        <!-- Using Tag -->
        <link rel="stylsheet" href="<?= base_url('public/css/style.css') ?>"/>
        
        <!-- Using HTML helper function -->
        <?= link_tag('public/css/style.css') ?>
  
     </head>

     <body>

       <?=$this->renderSection("content")?>

      <!-- Using Tag -->
      <script src="<?= base_url('public/js/script.js') ?>"></script>
  
      <!-- Using HTML helper function -->
      <?= script_tag('public/js/script.js') ?>

     <body>

</html>