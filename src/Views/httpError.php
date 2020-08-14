<?php 
$this->layout("_theme", ["title" => $errorCode]);
$this->start("error");
?>
  <div class="col s2 grey darken-4" style="height: 100vh; padding: 0;margin:0;">
        <h1 style="text-align:center">
          <?= $errorCode;?>
        </h1>
        <?php if($errorCode == "404")?>
        <p style="text-align:center" class="red-text text-lighten-4">Page Not Found</p>
  </div>
<?php $this->stop();?>