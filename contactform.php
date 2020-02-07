<?php

if(isset($_POST['submit'])) {
  $name=$_POST['input-name'];
  $mailFrom=$_POST['input-email'];
  $visitorType=$_POST['input-select'];
  $message=$_POST['textarea'];

  $mailTo = "ashleyizundu@yahoo.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

  mail($mailTo,$txt,$headers);
  header("Location: index.php?mailsend");
}

          <form action="contact.php" method="post" enctype="text/plain;"></form>

<form>
    <div class="form-group row">
     <label for="input-name" class="col-sm-2 col-form-label">Full Name:</label>
     <div class="col-sm-5">
       <input type="text" class="form-control" id="input-name">
     </div>
    </div>
    <div class="form-group row">
     <label for="input-email" class="col-sm-2 col-form-label">Email:</label>
     <div class="col-sm-5">
       <input type="email" class="form-control" id="input-email">
     </div>
    </div>

    <div class="form-group row">
    <label for="visitor-select" class="col-sm-2 col-form-label">Visitor Type:</label>
    <div class="col-sm-1">
      <select id="input-select" class="visitor-select">
        <option selected>Select One</option>
        <option value="1">Employer</option>
        <option value="2">Recruiter</option>
        <option value="3">Visitor</option>
      </select>
      </div>
    </div>
    <div class="form-group row">
        <label for="textarea" class="col-sm-2 col-form-label">Message:</label>
        <div class="col-sm-8">
          <textarea class="form-control" id="textarea" rows="7"  placeholder="Write something here..."></textarea>
        </div>
    </div>
    <div class="button">
      <button type="submit" class="btn btn-secondary">Submit</button>
    </div>



    </form>
