<?php if($this->session->userdata('username')){
  $welcome=$this->session->userdata('username');
  $logout="<a href=".base_url()."users/logout><button class='btn btn-outline-danger my-2 my-sm-0' type='submit'>Logout</button></a>";
?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#">PHP-R (<?=$welcome?>)</a>
<div class="collapse navbar-collapse" id="navbarsExampleDefault">
</div>
  <?=$logout?>
</nav>
<?php
}else{
  ?>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">PHP-R</a>
  </nav>
<?php
}
?>
