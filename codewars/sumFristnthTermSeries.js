function SeriesSum(n) {
  if (n == 0) {
    return n.toFixed(2)
  }
  var denominator = 4
  var algo = 1
  for (var i = 1; i < n; i++) {
    algo += 1/denominator
    denominator += 3
  }
  return algo.toFixed(2)
}
