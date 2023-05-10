// User Class
class User {
  // Class constructor
  constructor(first_name, last_name) {
    this._first_name = first_name;
    this._last_name = last_name;
  }

  // hello() method
  hello() {
    return `Hello ${this._first_name} ${this._last_name}`;
  }
}

// Create user1 than user2 object
const user1 = new User("John", "Doe");
const user2 = new User("Jane", "Doe");

// Get names and say hello
console.log(user1.hello());
console.log(user2.hello());
