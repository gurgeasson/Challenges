class User {
  constructor(first_name, last_name) {
    this._first_name = first_name;
    this._last_name = last_name;
  }

  get first_name() {
    return this._first_name;
  }

  get last_name() {
    return this._last_name;
  }

  set first_name(new_first_name) {
    this._first_name = new_first_name;
  }

  set last_name(new_last_name) {
    this._last_name = new_last_name;
  }

  hello() {
    return "Hello World!";
  }
}

const user = new User("", "");

user.first_name = "John";
user.last_name = "Doe";

console.log(user.hello());
console.log(`My name is ${user.first_name} ${user.last_name}`);
