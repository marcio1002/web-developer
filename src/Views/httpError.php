<?php 
$this->layout("_theme", ["title" => $errorCode]);
$this->start("error");
?>
  <div class="col s2 grey darken-4" style="height: 100vh; padding: 0;margin:0;">
        <h4 class="center-align">
          <?= $errorCode;?>
        </h4>
  </div>
<?php $this->stop();?>