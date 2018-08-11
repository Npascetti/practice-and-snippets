def findDuplicatesSequence(sequence):
    stringySequence = str(sequence)
    while stringySequence[0] == stringySequence[-1]:
        stringySequence = stringySequence[-1] + stringySequence[0:-1]
    iterableSequenceDuplicates = (re.finditer(r"(\d)\1+", str(stringySequence)))
    duplicatesList = [iterable[0] for iterable in iterableSequenceDuplicates]
    filteredDuplicatesList = []
    for duplicates in duplicatesList:
        duplicates = duplicates[:-1]
        filteredDuplicatesList.append(duplicates)
    counter = 0
    for duplicates in filteredDuplicatesList:
        int(duplicates[0])
        counter += int(duplicates[0]) * len(duplicates)
    print(counter)
    return counter
