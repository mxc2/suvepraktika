<!DOCTYPE HTML>
<html>
<head>
<title>In-ADS komponent</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
<script type="text/javascript" src="https://inaadress.maaamet.ee/inaadress/js/inaadress.min.js"></script>
</head>
<body>
<div id="InAadress" style="width: 600px; height: 450px"></div>
<script>
var inAadress = new InAadress({"container":"InAadress","mode":"3","nocss":false,"appartment":0,"ihist":"2014","lang":"et"});


document.addEventListener('addressSelected', function(e){
 var info = e.detail;
 alert("valitud aadress: " + info.inAadress); 
 inAadress.hideResult();
});


</script>
</body>
</html>