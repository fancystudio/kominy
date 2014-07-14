<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
    
    
    <div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="img/logo.png" width="199" height="34"/></a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Domov</a></li>
        <li class="active"><a href="kontakt.php">Kontakt</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="leier"><a href="#"><img src="img/leier-logo.png" width="129" height="32"/></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<!--<div class="container">
  
  <div class="text-center">
    <h1>Komíny</h1>
    <p class="lead">nehehehehe</p>
  </div>
  
</div><!-- /.container -->
<div class="container baner">
<div class="col-md-12"><img src="img/baner.jpg"/></div>
</div>

   
<div class="container main-content">

<div class="col-md-12">
<h2>KONTAKT</h2>

<div class="col-md-12 adress">
<p><strong>Conparius s.r.o.</strong></p>
<p>Nám. Š. Moysesa 17/A</p>
<p>974 01 Banská Bystrica</p>
<p>IČO: 46726721</p>
<p> </p> 
</div>




<div class="col-md-4">
<p><strong>Matej Betka</strong></p>
<p>+421 915 444 314</p>
<p>matej.betka@conparius.sk</p>
</div>


<div class="col-md-4">
<p><strong>Ing. Lukáš Svoboda</strong></p>
<p>+421 908 532 422</p>
<p>lukas.svoboda@conparius.sk</p>
</div>

<div class="col-md-4">
<p><strong>Štefan Svoboda</strong></p>
<p>+421 908 512 885</p>
<p>stefan.svoboda@conparius.sk</p>
</div>



</div>
<div class="contact_form">{if isset($smarty.post.name)}

<div class="email_send">Váš komentár bol odoslaný</div>
{php} mail('kontakt@conparius.sk', "komentar od zakaznika ".$_POST['name'], "text:\n ".$_POST['text']."\n \n"."zakaznikov email: ".$_POST['email'], "from: kontakt@conparius.sk"); {/php} {/if} 
<div class="col-md-12"><h4 style="margin-bottom: 20px">Kontaktný formulár</h4></div>


<form action="{root_url}/kontakt.html" method="POST">

<div class="col-md-4">

<label >Vaše meno</label>
<input class="form_name form-control" type="text" name="name" placeholder="Vaše meno" /> 
<label >Váš e-mail</label>
<input class="form_email form-control" type="text" name="email" placeholder="Váš email" /> 
</div>

<div class="col-md-8"><label >Vaša správa</label>
<textarea class="form_text form-control" name="text" placeholder="Vaša správa..."></textarea>
<input class="form_button btn btn-primary col-md-2 pull-right" type="submit" value="odoslať" />
</div>


</form></div>





<script type="text/javascript">// <![CDATA[
$("form").submit(function() {
   if (($(".form_name").val() != "") && ($(".form_email").val() != "") && ($(".form_text").val() != "") && (validateEmail($(".form_email").val())==true)){
       return true;
     }else{
        alert("niektorý z povinných údajov ostal nevyplnený, alebo bol vyplnený nesprávne");
        return false;
   }
   return false;
});
function validateEmail(email) { 
   var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   return reg.test(email);
}
// ]]></script>		
	    </div><!-- end container-->
	    
<footer>
<div class="container">
Copyright kominy.sk © 2014 All rights reserved.
</div>
</footer>
	    
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

        
        
    </body>
</html>