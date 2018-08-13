decodeMorse = function(morseCode){
var trimmedMorseCode = morseCode.trim()
var translatedString = ""
var inputMorseArray = trimmedMorseCode.split(/ ? /);

inputMorseArray.forEach(function(morse) {
  if (morse == "") {
  translatedString += " "
  }
  if (MORSE_CODE[morse] != undefined) {
  translatedString += MORSE_CODE[morse]
  }
})
return translatedString
}
