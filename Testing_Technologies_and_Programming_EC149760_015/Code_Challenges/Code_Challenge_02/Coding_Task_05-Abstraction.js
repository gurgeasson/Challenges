// Abstract class
class User {
  // Class constructor
  constructor(user_name) {
    this._user_name = user_name;
    // Prevent to create objects from this class
    if (this.constuctor === User) {
      throw new TypeError(
        "Cannot construct Abstract instances with this constructor directly."
      );
    }
  }

  // Abstract method
  state_your_role() {
    // Prevent to be called directly
    throw new Error("You have to implement the method state_your_role !");
  }

  // Get method
  get user_name() {
    return this._user_name;
  }

  // Set method
  set user_name(user_name) {
    this._user_name = user_name;
  }
}

// Admin class - subclass of User
class Admin extends User {
  // Class constuctor
  constructor(user_name) {
    // Call the super-class constructor
    // and pass on the username
    super(user_name);
  }
  // Override method
  state_your_role() {
    return "admin";
  }
}

// Viewer class - subclass of User
class Viewer extends User {
  // Class constructor
  constructor(user_name) {
    // Call the super-class constructor
    // and pass on the username
    super(user_name);
  }
  // Override  method
  state_your_role() {
    return "viewer";
  }
}

// Create an admin object
let admin = new Admin("Balthazar");
console.log(admin.user_name);
console.log(admin.state_your_role());

// Create a viewer object
let viewer = new Viewer("Melchior");
console.log(viewer.user_name);
console.log(viewer.state_your_role());