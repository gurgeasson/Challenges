// User class
class User {
  // Class constructor
  constructor() {
    // Initialising the _user_name variable
    this._user_name = "";
  }

  // Set method
  set user_name(user_name) {
    this._user_name = user_name;
  }
}

// Admin class that inherits from the user class
class Admin extends User {
  // express_your#_role method
  express_your_role() {
    return "Admin";
  }

  // say_hello method
  say_hello() {
    return `Hello admin, ${this._user_name}`;
  }
}

// Create an admin object
let admin = new Admin();

// Set the user name to "Balthazar"
admin._user_name = "Balthazar";

// Show info to the user
console.log(admin.say_hello());
