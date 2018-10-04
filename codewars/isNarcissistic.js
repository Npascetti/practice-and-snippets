//takes int input, n//
//checks if n to the power of the length of n equals n//
//example: n=153, length_n=3, 1^3+5^3+3^3=153, 1 + 125 + 27 = 153 

function isNarcissistic(n) {
  return n === n.toString().split("").map(num => parseInt(num)).reduce((a, b) => a + b**(n.toString().length), 0) 
  }

//below is a better implementation 
//similar to above, but a little more elegant use of reduce//
//map was unnecessary above because reduce will coerce strings in array to ints when doing exponent operations//
//this uses the array parameter of reduce to get the length of n//
function isNarc(n){
  return n === +n.toString().split('').reduce((s, v, i, arr) => s + Math.pow(v, arr.length),0)
}
