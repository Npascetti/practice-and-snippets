def remove_smallest(numbers):
    if len(numbers) <= 1:
        return []
    ###splitting is fastest method of cloning array###
    ###consider list() for readability numbersClone = list(numbers)###
    numbersClone = numbers[:]
    numbersClone.remove(min(numbersClone))
    return numbersClone
