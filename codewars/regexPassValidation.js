// validates a password that is at least 6 characters long and contains least one cap, lowercase and number ONLY - that is no special characters//
function validate(password) {
  return /^(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])([a-zA-Z0-9]{6,})$/.test(password);
  }
