Let rec;
	if(!("WebkitSpeechRecognition" in window)) {
		alert("disculpas, no puedes usar la API");
	} else {
		rec = new webkitSpeechRecognition();
		rec.lang = "es-AR";
		rec.continuous= true;
		rec.interim = true;
		rec.addEventListener("result", iniciar);
}
function iniciar(event){
	for (i = event.resultIndex; i < event.results.length; i++){
		document.getElementById('texto').innerHTML = event.results[i][0].transcript;
	}
}
rec.start();
document.getElementById('hablar').addEventListener("click",()=>{
	decir(document.getElementById("texto2").value);
});
function decir(texto2){
	speechSynthesis.speak(new SpeechSynthesisUtterance(texto2));
}
