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
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
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
      <a class="navbar-brand" href="#">conparius</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Domov</a></li>
        <li><a href="#contact">Kontakt</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">Leier</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="container">
  
  <div class="text-center">
    <h1>Komíny</h1>
    <p class="lead">nehehehehe</p>
  </div>
  
</div><!-- /.container -->
    
<div class="container">    
		<select class="rozmerClassTemplate form-control" style="display:none">
			<option class="ecoplusBez ecoplusS" value="14">14</option>
		  	<option class="ecoplusBez eco ecoplusS" value="16">16</option>
		  	<option class="ecoplusBez eco ecoplusS" value="18">18</option>
		  	<option class="ecoplusBez eco ecoplusS" value="20">20</option>
		  	<option class="ecoplusBez" value="22">22</option>
		  	<option class="ecoplusBez" value="25">25</option>
		  	<option class="ecoplusBez" value="30">30</option>
		</select>
		<div class="rozmerClassDiv">
			rozmer: <select class="rozmerClass form-control">
			</select>
		</div>	
		<br>
		<div class="vyskaClassDiv">
			vyska: <select class="vyskaClass form-control">
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option value="10">10</option>
			</select>
		</div><br>
		<div class="typClassDiv">
			typ: <select class="typClass form-control">
				<option value="eco">ECO</option>
			  	<option value="ecoplus">ECOPlus</option>
			  	<option value="ostatne">ostatne</option>
			</select>
		</div>
		<br>
		<div class="vetSachtaClassDiv">
		 	<div class="radio"><label>
		 	<input class="vetSachtaClass" checked="checked" type="radio" name="vetSachta" value="bez">
		 	Bez vetracej sachty
			</label></div>
			
			<div class="radio"><label>
			<input class="vetSachtaClass" type="radio" name="vetSachta" value="s">
			S vetracou sachtou
			</label></div>
		
		</div>
		<br><br>
		<div class="sopuchClassDiv">
		<div class="radio"><label>
			<input class="sopuchClass" checked="checked" type="radio" name="sopuch" value="45">
			SOPÚCH 45°
		</label></div>
		<div class="radio"><label>
			<input class="sopuchClass" type="radio" name="sopuch" value="90">
			SOPÚCH 90°
		</label></div>
		</div>
		<br><br>
		<div class="komDvereClassDiv">
			
			
		<div class="checkbox"> <label>	
			<input class="komDvereClass" type="checkbox"/>horne kominove dvere
		</label></div>
		
		
		</div>
		<br>
		<div class="kanVyustenieClassDiv">
			
			<div class="checkbox"> <label>
			<input class="kanVyustenieClass" type="checkbox"/>srieska na konicke vyustenie: 
			</label></div>
			
		</div>
		<div class="cenaClassDiv">
			cena bez dph: <span class="cenaClass">0</span> €<br>
			cena s dph: <span class="cenaDPHClass">0</span> € <br>
		</div>
		<button type="submit" class="vyratajClassDiv btn btn-default">Vyrataj</button> 
		<br>
		<br>
		<form>
			meno: <input type="text" class="meno" /><span class="nameInputValidation" style="display:none">Meno nesmie ostať nevyplnené</span><br>
			email: <input type="text" class="email" /><br>
			telefon: <input type="text" class="telefon" /><span class="emailOrPhoneInputValidation" style="display:none">Email alebo telefón musia byť vyplnené správne</span><br>
			adresa: <input type="text" class="adresa" /><span class="addressInputValidation" style="display:none">Adresa nesmie ostať nevyplnená</span>
			<span class="priceInputValidation" style="display:none">Musí byť vyrátaná cena</span>
			<input type="button" class="odosli" value="odosli"/>
		</form>
	    </container><!-- end container-->
	    
	    
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        
        
    </body>
</html>
>>>>>>> FETCH_HEAD
