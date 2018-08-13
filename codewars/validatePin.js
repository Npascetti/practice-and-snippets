function validatePIN (pin) {
    if (pin[0] == "-") {
        return false
    }
    console.log(pin)
    var found = pin.match(/\b([0-9]{6})\b|\b([0-9]{4})\b/)
    if (found != null) {
        return true
    }
    return false
}
