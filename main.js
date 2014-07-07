var rozmer;
var vyska;
var typ;
var komDvere;
var kanVyustenie;
var sopuch;
var vetSachta;
var ecoValues;
var ecoPlusValues;
$(document).ready(function(){
	init();
	$(".vyratajClassDiv").click(function(){
		vyratajInterface();
	});
	$(".typClass").change(function(){
		showInterface();
	});
	$(".vetSachtaClass").change(function(){
		showRozmery(typ, $('input[name=vetSachta]:checked').val());
	});
});
function init(){
	loadValues();
	loadPrices();
	showInterface();
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
	if(typ == "eco"){
		vyratajECO();
	}else if(typ == "ecoplus"){
		vyratajECOPLUS();
	}
}
function vyratajECO(){
	$(".cenaClass").html(ecoValues[vetSachta][sopuch][rozmer][vyska]);
	$(".cenaDPHClass").html(Math.round((ecoValues[vetSachta][sopuch][rozmer][vyska] * 1.2) * 100)/100);
	console.log(ecoValues[vetSachta][sopuch][rozmer][vyska]);
	//horne kominove dvierka
}
function vyratajECOPLUS(){
	
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
function loadValues(){
	sopuch = $('input[name=sopuch]:checked').val();
	vetSachta = $('input[name=vetSachta]:checked').val();
	rozmer = $(".rozmerClass").val();
	vyska = $(".vyskaClass").val();
	typ = $(".typClass").val();
	komDvere = $(".komDvereClass").is(":checked");
	kanVyustenie = $(".kanVyustenieClass").is(":checked");
}
function loadPrices(){
	ecoValues = 
	{
	"s":{
		"45":{	
			"16":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"18":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"20":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"22":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				}
			},
		"90":{	
			"16":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"18":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"20":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				}
			}
		},
	"bez":{
		"45":{	
			"16":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"18":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"20":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				}
			},
		"90":{	
			"16":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"18":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"20":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				}
			}
		}
	}
	ecoPlusValues = 
	{
	"s":{
		"45":{	
			"16":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"18":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"20":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				}
			},
		"90":{	
			"16":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"18":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"20":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				}
			}
		},
	"bez":{
		"45":{	
			"16":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"18":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"20":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				}
			},
		"90":{	
			"16":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"18":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				},
			"20":{	
				"3" : 3,
				"4" : 4,
				"5" : 5,
				"6" : 6,
				"7" : 7,
				"8" : 8,
				"9" : 9,
				"10" : 10
				}
			}
		}
	}
}