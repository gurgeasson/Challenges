class User {
  constructor(first_name, last_name) {
    this._first_name = first_name;
    this._last_name = last_name;
  }

  hello() {
    return `Hello ${this._first_name} ${this._last_name}`;
  }
}

const user1 = new User("John", "Doe");
const user2 = new User("Jane", "Doe");

console.log(user1.hello());
console.log(user2.hello());
