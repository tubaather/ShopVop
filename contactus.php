
<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <?php include 'includes/navbar.php'; ?>
     
      <div class="content-wrapper">
        <div class="container">

          <!-- Main content -->
          <section class="content">
            <div class="row">
                <div class="col-sm-9">
                    <?php
                        if(isset($_SESSION['error'])){
                            echo "
                                <div class='alert alert-danger'>
                                    ".$_SESSION['error']."
                                </div>
                            ";
                            unset($_SESSION['error']);
                        }
                    ?>
                    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&amp;v1&amp;subset=latin%2Clatin-ext" type="text/css" media="screen"/>
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body style="background-color: lightgreen">
<div class="row">
    <div class="col-sm-8"><form class="form contact"
      action="#"
      method="post"
      data-hasrequired="* Required Fields"
      data-mage-init='{"validation":{}}' style="background-color: #F0FFF0">
    <fieldset class="fieldset">
        <legend style="font-size: 40px"><span>Write <b>Us</b></span></legend><br />
        <fieldset class="fieldset row">
            <div class="fields col-md-12" style="width: 70%">
        <div class="field name required">
            <label class="label" for="name"><span style="color: black;font-size: 20px";>Name</span></label>
            <div class="control">
                <input name="name" id="name" title="Name" value="" class="input-text" type="text" data-validate="{required:true}"/>
            </div>
        </div>
        <div class="field email required">
            <label class="label" for="email"><span style="color: black;font-size: 20px">Email</span></label>
            <div class="control">
                <input name="email" id="email" title="Email" value="" class="input-text" type="email" data-validate="{required:true, 'validate-email':true}"/>
            </div>
        </div>
        <div class="field telephone">
            <label class="label" for="telephone"><span style="color: black;font-size: 20px">Phone Number</span></label>
            <div class="control">
                <input name="telephone" id="telephone" title="Phone Number" value="" class="input-text" type="text" />
            </div>
        </div>
            </div>
            <div class="fields col-sm-6">
        <div class="field comment required">
            <label class="label" for="comment"><span style="color: black;font-size: 20px">What’s on your mind?</span></label>
            <div class="control">
                <textarea name="comment" id="comment" title="What’s on your mind?" class="input-text" cols="10" rows="18" data-validate="{required:true}"></textarea>
            </div>
        </div>
        <div class="field captcha required" role="contact_us">
        <div class="control captcha">
        
        <div class="nested">
            <div class="field captcha no-label"
                 data-captcha="contact_us"
                 id="captcha-container-contact_us"
                 data-mage-init='{"captcha":{"url": "https://hummart.com/captcha/refresh/",
                                            "imageLoader": #,
                                             "type": "contact_us"}}'>
                <div class="control captcha-image">
                    
                   
                </div>
            </div>
                    </div>
    </div>
</div>
            </div>
        </fieldset>
    </fieldset>
    <div class="actions-toolbar">
        <div class="primary">
            
            <button type="button" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
</div>

    <div class="col-sm-4 contact-info" style="background-color: #F0FFF0">
        <br>
        <br>
        <br>
        <div class="contacts-title" style="font-size: 30px; background-color: #F0FFF0">Contact <b>Details</b></div>
        <div class="row">
<div class="col-sm-12">
    <i class="porto-icon-phone"></i>
    <p>(021) 111 116 278</p>
    <p></p>
</div>
</div>
<div class="row">
</div>
<div class="row">
<div class="col-sm-12">
    <i class="porto-icon-mail-alt"></i>
    <p>customer@shopvpcom</p>
    <p></p>
</div>
</div>
<div class="row"></div></body>