<?php
$mailInfo = "<table>";
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Údaje odosielateľa:";
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Meno";
		$mailInfo .= "</td>";
		$mailInfo .= "<td>";
		$mailInfo .=  $_POST["meno"];
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Email";
		$mailInfo .= "</td>";
		$mailInfo .= "<td>";
		$mailInfo .=  $_POST["email"];
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Adresa";
		$mailInfo .= "</td>";
		$mailInfo .= "<td>";
		$mailInfo .=  $_POST["adresa"];
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Tel. číslo";
		$mailInfo .= "</td>";
		$mailInfo .= "<td>";
		$mailInfo .=  $_POST["telefon"];
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Typ osoby";
		$mailInfo .= "</td>";
		$mailInfo .= "<td>";
		$mailInfo .=  $_POST["typOsoby"];
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";
	if($_POST["typOsoby"] == "pravnicka"){
		$mailInfo .= "<tr>";
			$mailInfo .= "<td>";
			$mailInfo .=  "Názov firmy";
			$mailInfo .= "</td>";
			$mailInfo .= "<td>";
			$mailInfo .=  $_POST["nazovFirmy"];
			$mailInfo .= "</td>";
		$mailInfo .= "</tr>";
		$mailInfo .= "<tr>";
			$mailInfo .= "<td>";
			$mailInfo .=  "IČO";
			$mailInfo .= "</td>";
			$mailInfo .= "<td>";
			$mailInfo .=  $_POST["ico"];
			$mailInfo .= "</td>";
		$mailInfo .= "</tr>";
		$mailInfo .= "<tr>";
			$mailInfo .= "<td>";
			$mailInfo .=  "DIČ";
			$mailInfo .= "</td>";
			$mailInfo .= "<td>";
			$mailInfo .=  $_POST["dic"];
			$mailInfo .= "</td>";
		$mailInfo .= "</tr>";
		$mailInfo .= "<tr>";
			$mailInfo .= "<td>";
			$mailInfo .=  "Fakturačná adresa";
			$mailInfo .= "</td>";
			$mailInfo .= "<td>";
			$mailInfo .=  $_POST["fakturacnaAdresa"];
			$mailInfo .= "</td>";
		$mailInfo .= "</tr>";
	}
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Špeciálne požiadavky";
		$mailInfo .= "</td>";
		$mailInfo .= "<td>";
		$mailInfo .=  $_POST["pozidavky"];
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";
	$mailInfo .= "<tr>";
	$mailInfo .= "</tr>";
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Parametre:";
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Tel. číslo";
		$mailInfo .= "</td>";
		$mailInfo .= "<td>";
		$mailInfo .=  $_POST["telefon"];
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Vetracia šachta";
		$mailInfo .= "</td>";
		$mailInfo .= "<td>";
		$mailInfo .=  $_POST["vetSachta"];
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Rozmer";
		$mailInfo .= "</td>";
		$mailInfo .= "<td>";
		$mailInfo .=  $_POST["rozmer"];
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Výška";
		$mailInfo .= "</td>";
		$mailInfo .= "<td>";
		$mailInfo .=  $_POST["vyska"];
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Typ";
		$mailInfo .= "</td>";
		$mailInfo .= "<td>";
		$mailInfo .=  $_POST["typ"];
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Komínové dvere";
		$mailInfo .= "</td>";
		$mailInfo .= "<td>";
		$mailInfo .=  (($_POST["komDvere"] == "true") ? "áno" : "nie");
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";
	$mailInfo .= "<tr>";
		$mailInfo .= "<td>";
		$mailInfo .=  "Kanonické vyústenie";
		$mailInfo .= "</td>";
		$mailInfo .= "<td>";
		$mailInfo .=  (($_POST["kanVyustenie"] == "true") ? "áno" : "nie");
		$mailInfo .= "</td>";
	$mailInfo .= "</tr>";	
$mailInfo .= "</table>";
//echo $mailInfo;
$subject = "dopyt - komíny";
$toAdmin = "cvikota.adam@gmail.sk";
$from = "info@fancystudio.sk";
if(mail($toAdmin,$subject,$mailInfo,"From:".$from." \r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=UTF-8\r\n")){
	$response_array['status'] = "success";
}else{
	$response_array['status'] = "errorr";
}
header('Content-type: application/json');
echo json_encode($response_array);
?>
