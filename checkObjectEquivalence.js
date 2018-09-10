function checkObjectEquivalence(obj1, obj2) {
    // Create arrays of property names
    var aProps = Object.getOwnPropertyNames(obj1);
    var bProps = Object.getOwnPropertyNames(obj2);

    // If number of properties is different,
    // objects are not equivalent
    if (aProps.length != bProps.length) {
        return false;
    }

    for (var i = 0; i < aProps.length; i++) {
        var propName = aProps[i];

        // If values of same property are not equal,
        // objects are not equivalent
        if (obj1[propName] !== obj2[propName]) {
            return false;
        }
    }

    // If we made it this far, objects
    // are considered equivalent
    return true;
}
