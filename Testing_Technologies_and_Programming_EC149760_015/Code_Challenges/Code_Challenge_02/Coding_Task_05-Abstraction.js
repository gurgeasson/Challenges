class User {
  constructor() {
    this._username = "";
  }

  state_your_role() {}

  get username() {
    return this._username;
  }

  set username(username) {
    this._username = username;
  }
}

class Admin extends User {
  state_your_role() {
    return "admin";
  }
}

class Viewer extends User {
  state_your_role() {
    return "viewer";
  }
}

const admin = new Admin();
admin.username = "Balthazar";
console.log(admin.state_your_role());
// console.log(admin.username);

const viewer = new Viewer();
viewer.username = "Melchior";
console.log(viewer.state_your_role());
// console.log(viewer.username);
