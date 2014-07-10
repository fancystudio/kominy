var rozmer;
var vyska;
var typ;
var komDvere;
var kanVyustenie;
var sopuch;
var vetSachta;
var ecoValues;
var ecoPlusValues;
var totalPrice;
$(document).ready(function(){
	init();
	$(".vyratajClassDiv").click(function(){
		vyratajInterface();
	});
	$(".typClass").change(function(){
		showInterface();
		removePrice();
	});
	$(".vetSachtaClass").change(function(){
		showRozmery(typ, $('input[name=vetSachta]:checked').val());
	});
	$(".meno").change(function(){
		isMenoValid($(".meno").val());
	});
	$(".adresa").change(function(){
		isAdresaValid($(".adresa").val());
	});
	$(".odosli").click(function(){
		if(isMenoValid($(".meno").val()) 
			&& isAdresaValid($(".adresa").val())
			&& isEmailOrPhoneValid($(".email").val(),$(".telefon").val())
			&& isPriceCount()
		){
			sendMail($(".meno").val(),$(".adresa").val(),$(".email").val(),$(".telefon").val());
		}
	});
});
function init(){
	loadValues();
	loadPrices();
	showInterface();
	removePrice();
}
function showInterface(){
	typ = $(".typClass").val();
	if(typ == "eco"){
		showECO();
	}else if(typ == "ecoplus"){
		showECOPLUS();
	}else{
		showEmailPrice();
	}
	showRozmery(typ,vetSachta);
}
function showECO(){
	$(".rozmerClassDiv").show();
	$(".vyskaClassDiv").show();
	$(".typClassDiv").show();
	$(".vetSachtaClassDiv").show();
	$(".sopuchClassDiv").show();
	$(".komDvereClassDiv").show();
	$(".kanVyustenieClassDiv").hide();
	$(".cenaClassDiv").show();
	$(".vyratajClassDiv").show();
}
function showECOPLUS(){
	$(".rozmerClassDiv").show();
	$(".vyskaClassDiv").show();
	$(".typClassDiv").show();
	$(".vetSachtaClassDiv").show();
	$(".sopuchClassDiv").show();
	$(".komDvereClassDiv").show();
	$(".kanVyustenieClassDiv").show();
	$(".cenaClassDiv").show();
	$(".vyratajClassDiv").show();
}
function showEmailPrice(){
	$(".rozmerClassDiv").hide();
	$(".vyskaClassDiv").hide();
	$(".typClassDiv").show();
	$(".vetSachtaClassDiv").hide();
	$(".sopuchClassDiv").hide();
	$(".komDvereClassDiv").hide();
	$(".kanVyustenieClassDiv").hide();
	$(".cenaClassDiv").hide();
	$(".vyratajClassDiv").hide();
}
function vyratajInterface(){
	loadValues();
	if(typ == "eco"){ vyratajECO(); }
	else if(typ == "ecoplus"){ vyratajECOPLUS(); }
	priceIsCount = true;
}
function vyratajECO(){
	totalPrice = parseInt(ecoValues[vetSachta][sopuch][rozmer][vyska].replace(/,/g, '.'));
	if(komDvere){ 
		totalPrice += parseInt(ecoValues["komDvere"]); 
	}
	setPrice(totalPrice);
}
function vyratajECOPLUS(){
	totalPrice = parseInt(ecoPlusValues[vetSachta][sopuch][rozmer][vyska].replace(/,/g, '.'));
	if(kanVyustenie){ 
		totalPrice += parseInt(ecoPlusValues["kanVyustenie"][rozmer].replace(/,/g, '.')); 
	}
	if(komDvere){ 
		totalPrice += parseInt(ecoPlusValues["komDvere"].replace(/,/g, '.')); 
	}
	setPrice(totalPrice);
}
function vyratajCenuSDPH(){
	
}
function showRozmery(typ, vetSachta){
	typClass = "";
	$(".rozmerClass option").remove();
	if(typ == "eco"){
		typClass = "eco";
	}else if(typ == "ecoplus" && vetSachta == "s"){
		typClass = "ecoplusS";
	}else if(typ == "ecoplus" && vetSachta == "bez"){
		typClass = "ecoplusBez";
	}
	if(typClass != ""){
		$(".rozmerClassTemplate option").each(function() {
		  if($(this).hasClass(typClass)){
			  $($(this).clone()).appendTo(".rozmerClass");
		  }
		});
	}
}
function removePrice(){
	totalPrice = 0;
	$(".cenaClass").html(0);
	$(".cenaDPHClass").html(0);
}
function setPrice(totalPrice){
	totalPrice = totalPrice;
	$(".cenaClass").html(Math.round(totalPrice * 100)/100);
	$(".cenaDPHClass").html(Math.round((totalPrice * 1.2) * 100)/100);
}
function loadValues(){
	sopuch = $('input[name=sopuch]:checked').val();
	vetSachta = $('input[name=vetSachta]:checked').val();
	rozmer = $(".rozmerClass").val();
	vyska = $(".vyskaClass").val();
	typ = $(".typClass").val();
	komDvere = $(".komDvereClass").is(":checked");
	kanVyustenie = $(".kanVyustenieClass").is(":checked");
}
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
}
function isNumber(value) {
	if ((undefined === value) || (null === value)) {
        return false;
    }
    if (typeof value == 'number') {
        return true;
    }
    return !isNaN(value - 0);
}
function isEmailOrPhoneValid(email,phone){
	if(email == "" && phone == ""){
		$(".emailOrPhoneInputValidation").show();
		return false;
	}else{
		if(email != "" && !isValidEmailAddress(email)){
			$(".emailOrPhoneInputValidation").show();
			return false;
		}
		if(phone != "" && !isNumber(phone)){
			$(".emailOrPhoneInputValidation").show();
			return false;
		}
		$(".emailOrPhoneInputValidation").hide();
		return true;
	}
}
function isMenoValid(meno){
	if(meno == ""){
		$(".nameInputValidation").show();
		return false;
	}else{
		$(".nameInputValidation").hide();
		return true;
	}
}
function isAdresaValid(adresa){
	if(adresa == ""){
		$(".addressInputValidation").show();
		return false;
	}else{
		$(".addressInputValidation").hide();
		return true;
	}
}
function isPriceCount(){
	if(totalPrice != 0){
		$(".priceInputValidation").hide();
		return true;
	}else{
		$(".priceInputValidation").show();
		return false;
	}
}
function sendMail(meno, adresa, email, telefon){
	$.ajax({
		type: "POST",
		url: "sendMail.php",
		data: {
			"meno" : meno,
			"adresa" : adresa,
			"email" : email,
			"telefon" : telefon,
			"sopuch" : sopuch,
			"vetSachta" : vetSachta,
			"rozmer" : rozmer,
			"vyska" : vyska,
			"typ" : typ,
			"komDvere" : komDvere,
			"kanVyustenie" : kanVyustenie
		},
		success: function(response)
		{
			if(response.status == 'success'){
				
			}else{
				alert("Chyba pri odoslaní emailu");
			}	
		},
		error: function(response){
			alert("Chyba pri odoslaní emailu");
		}
	});
}
function loadPrices(){
	$.ajax({
		type: "POST",
		url: "loadValues.php",
		success: function(response)
		{
			if(response.status == 'success'){
				ecoValues = response['eco'];
				ecoPlusValues = response['ecoplus'];
			}else{
				alert("Chyba pri načítaní cien");
			}	
		},
		error: function(response){
			alert("Chyba pri načítaní cien");
		}
	});
}