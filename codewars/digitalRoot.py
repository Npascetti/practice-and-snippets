def digital_root(n):
    stringyInput = str(n)
    inputList = list(stringyInput)
    count = 0
    while len(inputList) > 1:
        for digit in inputList:
            count += int(digit)
        inputList = list(str(count))
        if len(inputList) > 1:
            count = 0
    return count
###This one liner is way better thou ... def digital_rootAlt(n): ###
###return n if n < 10 else digital_rootAlt(sum(map(int,str(n)))) ###
