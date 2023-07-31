$(document).ready(function(){  
click_to_record.addEventListener('click',function(){
    var speech = true;

    const speechRecognition = window.SpeechRecognition || window.webkitSpeechrecognition;
    const recognition = new speechRecognition(); 
    recognition.interimResults = true;

    recognition.addEventListener('result', e => {
        const transcript = Array.from(e.results)
            .map(result => result[0])
            .map(result => result.transcript)
            .join('')

        document.getElementById("convert_text").innerHTML = transcript;
        console.log(transcript);
    });
    
    if (speech == true) {
        recognition.start();
    }
})
});