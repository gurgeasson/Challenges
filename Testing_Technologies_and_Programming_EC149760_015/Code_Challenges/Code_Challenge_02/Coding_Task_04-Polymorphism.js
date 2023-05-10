// User class
class User {
  // Class constuctor
  constructor() {
    this._number_of_articles = 0;
  }

  // Get method
  get number_of_articles() {
    return this._number_of_articles;
  }

  // Set method
  set number_of_articles(new_number_of_articles) {
    this._number_of_articles = new_number_of_articles;
  }

  // calc_scores method
  calc_scores() {
    // To be changed in the subclasses
  }
}

// Author class - subclass of User
class Author extends User {
  // Override calc_scores method
  calc_scores() {
    return this._number_of_articles * 10 + 20;
  }
}

// Editor class - subclass of User
class Editor extends User {
  // Override calc_scores method
  calc_scores() {
    return this._number_of_articles * 6 + 15;
  }
}

// Create an author object
let author = new Author();
//  Set the number of articles
author.number_of_articles = 8;
// console.log(author._number_of_articles);
// Print the author's scores
console.log("Author's scores: " + author.calc_scores());

// Create and editor object
let editor = new Editor();
// Set the number of articles
editor.number_of_articles = 15;
// console.log(editor._number_of_articles);
// Print the editor's scores
console.log("Editor's scores: " + editor.calc_scores());
