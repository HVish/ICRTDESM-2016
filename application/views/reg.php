<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<main class="container">
   <script type="text/javascript" src="<?php echo base_url();?>js/submitButton.js"></script>
<div class="row">
  <form class="col s5" method="POST" action="submitForm.php" enctype="multipart/form-data">
  <div class="row">
    <h5>Register for ICRTDESM-2016</h5>
  </div>
    <div class="row">
      <div class="input-field col s5">
        <input id="first_name" type="text" class="validate">
        <label for="first_name">First Name</label>
      </div>
      </div>
      <div class="row">
      <div class="input-field col s5">
        <input id="last_name" type="text" class="validate">
        <label for="last_name">Last Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s5">
        <input id="email" type="email" class="validate">
        <label for="email">Email</label>
      </div>
    </div>
    <div class="row">
        <label for="fileUpload">Paper Upload</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
    <div class="row">
    <input type="checkbox" name="terms">
    <label for="termsandcondition"> above data are best of my knowldge</label>
    </div>
    <div class="row">
      <input type="submit" name="Submit" id="submit" value="Submit" class="waves-effect waves-light btn">
    </div>
  </form>
  <div class="col s3">
    <p>This is dummy paragraph</p>
  </div>
   <div class="col s3">
    <p>This is dummy paragraph</p>
  </div>
</div>
</main>