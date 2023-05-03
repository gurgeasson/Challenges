class User {
  constructor() {
    this._number_of_articles = 0;
  }

  get number_of_articles() {
    return this._number_of_articles;
  }
  set number_of_articles(new_number_of_articles) {
    this._number_of_articles = new_number_of_articles;
  }
  calcScores() {}
}

class Author extends User {
  constructor() {
    super();
  }
  calcScores() {
    return this._number_of_articles * 10 + 20;
  }
}

class Editor extends User {
  constructor() {
    super();
  }
  calcScores() {
    return this._number_of_articles * 6 + 15;
  }
}

const author = new Author();
author.number_of_articles = 8;
// console.log(author._number_of_articles);
console.log(author.calcScores());

const editor = new Editor();
editor.number_of_articles = 15;
// console.log(editor._number_of_articles);
console.log(editor.calcScores());
