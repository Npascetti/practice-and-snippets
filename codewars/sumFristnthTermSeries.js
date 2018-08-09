function series_sum(n) {
  if (var n == 0 or n == 1) {
    return str(n) + ".00"
  }
  var denominator = 4
  var algo = 1
  for var i in range(n - 1):
      algo += 1/denominator
      denominator += 3
  if len(str(round(algo, 2))) == 3:
      return str(round(algo, 2)) + "0"
  return str(round(algo, 2))

}
