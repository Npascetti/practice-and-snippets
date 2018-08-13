function list(namesList) {
    var formattedNamesString = "";
    namesList.forEach(function(name) {
        if (name.name == namesList[namesList.length - 1].name) {
            formattedNamesString += name.name
            return
        }

        if (name.name == namesList[namesList.length - 2].name ) {
            formattedNamesString += name.name  + " & "
            return
        }
        formattedNamesString += name.name + ", "
    })
    return formattedNamesString
}
