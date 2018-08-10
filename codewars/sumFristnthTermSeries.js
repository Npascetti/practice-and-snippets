function SeriesSum(n) {
  if (n == 0) {
    return n.toFixed(2)
  }
  var denominator = 4
  var algo = 1
<<<<<<< HEAD
  for (var i = 1; i < n; i++) {
    algo += 1/denominator
    denominator += 3
  }
  return algo.toFixed(2)
=======
  for (var i in range(n - 1)){
    algo += 1/denominator
    denominator += 3
if len(str(round(algo, 2))) == 3:
    return str(round(algo, 2)) + "0"
return str(round(algo, 2))
  }
>>>>>>> added some curly braces...
}
