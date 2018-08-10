function squareDigits(num){
  var numArray = (""+num).split("");
  var numString = ""
  numArray.forEach(function(digit) {
    numString += digit*digit;
    })
  return parseInt(numString)
}
