// User calass
class User {
  // Class constuctor
  constructor(first_name, last_name) {
    this._first_name = first_name;
    this._last_name = last_name;
  }

  // Get methods
  get first_name() {
    return this._first_name;
  }

  get last_name() {
    return this._last_name;
  }

  // Set methods
  set first_name(new_first_name) {
    this._first_name = new_first_name;
  }

  set last_name(new_last_name) {
    this._last_name = new_last_name;
  }

  // New hello() metod to return "Hello World!"
  hello() {
    return "Hello World!";
  }
}

// Create a user object
let user = new User("John", "Doe");

// Show info to the user
// Call hello() method
console.log(user.hello());
// Show first_name and last_name using the get methods
console.log(`My name is ${user.first_name} ${user.last_name}`);

// Set a new first_name and last_name using the set methods
user.first_name = "Jane";
user.last_name = "Du";

// Show info to the user
// Call hello() method
console.log(user.hello());
// Show first_name and last_name using the get methods
console.log(`My name is ${user.first_name} ${user.last_name}`);
