function persistence(num) {
    num = ""+num
    var iterCounter = 0
    numArray = num.split("")
    while (numArray.length > 1) {
        var counter = 1
        numArray.forEach(function(digit) {
            counter *= parseInt(digit)
        })
        iterCounter += 1
        numArray = counter.toString(10).split("")
    }
    return iterCounter
}
###checking git push###
