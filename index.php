<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="main.js"></script>
<title>Kominy</title>
</head>
	<body>
		<select class="rozmerClassTemplate" style="display:none">
			<option class="ecoplusBez ecoplusS" value="14">14</option>
		  	<option class="ecoplusBez eco ecoplusS" value="16">16</option>
		  	<option class="ecoplusBez eco ecoplusS" value="18">18</option>
		  	<option class="ecoplusBez eco ecoplusS" value="20">20</option>
		  	<option class="ecoplusBez" value="22">22</option>
		  	<option class="ecoplusBez" value="25">25</option>
		  	<option class="ecoplusBez" value="30">30</option>
		</select>
		<div class="rozmerClassDiv">
			rozmer: <select class="rozmerClass">
			</select>
		</div>	
		<br>
		<div class="vyskaClassDiv">
			vyska: <select class="vyskaClass">
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
			typ: <select class="typClass">
				<option value="eco">ECO</option>
			  	<option value="ecoplus">ECOPlus</option>
			  	<option value="ostatne">ostatne</option>
			</select>
		</div>
		<br>
		<div class="vetSachtaClassDiv">
		 	Bez vetracej sachty<input class="vetSachtaClass" checked="checked" type="radio" name="vetSachta" value="bez"><br>
			S vetracou sachtou<input class="vetSachtaClass" type="radio" name="vetSachta" value="s">
		</div>
		<br><br>
		<div class="sopuchClassDiv">
			SOPÚCH 45°<input class="sopuchClass" checked="checked" type="radio" name="sopuch" value="45"><br>
			SOPÚCH 90°<input class="sopuchClass" type="radio" name="sopuch" value="90">
		</div>
		<br><br>
		<div class="komDvereClassDiv">
			horne kominove dvere: <input class="komDvereClass" type="checkbox"/>
		</div>
		<br>
		<div class="kanVyustenieClassDiv">
			srieska na konicke vyustenie: <input class="kanVyustenieClass" type="checkbox"/><br>
		</div>
		<div class="cenaClassDiv">
			cena bez dph: <span class="cenaClass">0</span> €<br>
			cena s dph: <span class="cenaDPHClass">0</span> € <br>
		</div>
		<div class="vyratajClassDiv">Vyrataj</div> 
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
	</body>

</html>
