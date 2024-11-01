<!DOCTYPE html>
 
<html lang="en">
 
<head>
 
<meta charset="UTF-8">
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<title>Document</title>
 
<script>
 
console.log("INICIO DO NOSSO JS");
 
let urlSiteController ="http://localhost:8989/controllers/SiteController.php";
 
const reqSiteController = new Request(urlSiteController);
 
function processaRespostaDoController(resp){
 
resp.text().then(function(txt){
 
 console.log(document.getElementById("resposta").innerHTML = txt);
});
}


console.log("aguarde...")
 
fetch(reqSiteController).then(processaRespostaDoController);
 
console.log("aguarde...")
 
fetch(reqSiteController).then(processaRespostaDoController);
 
console.log("aguarde...")
 
fetch(reqSiteController).then(processaRespostaDoController);
 
console.log("aguarde.")
 
fetch(reqSiteController).then (processaRespostaDoController);
 
console.log("<<<<<<<<< FIM DO NOSSO JS");

</script>
 

</head>
  
<body>
  <h1>Aula sobre front end e ajax</h1>
  <span id="resposta"> </span>
</body> 
</html>