class User {
  constructor(username) {
    this._username = username;
  }

  set username(new_username) {
    this._username = new_username;
  }
}

class Admin extends User {
  constructor(username) {
    super(username);
  }

  expressYourRole() {
    return "Admin";
  }

  sayHello() {
    return `Hello admin, ${this._username}`;
  }
}

const admin = new Admin("");

admin._username = "Balthazar";

console.log(admin.sayHello());
