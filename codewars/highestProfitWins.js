function minMax(arr){
    minMaxArr = [];
    minMaxArr.push(Math.min.apply(null, arr));
    minMaxArr.push(Math.max.apply(null, arr));
    return minMaxArr
}
