function filter_list(mixedArray) {
    return mixedArray.filter(function(element) {
        if (typeof element === "number") {
            return true
        }
    })
}
