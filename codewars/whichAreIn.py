###checks to see which elements in array1, a1, are substrings of elements in array2, a2###
###returns sorted array of these elements###

def in_array(a1, a2):
    inArray = set()
    for i in a1:
        for x in a2:
            if i in x:
                inArray.add(i)
    return sorted(inArray)
