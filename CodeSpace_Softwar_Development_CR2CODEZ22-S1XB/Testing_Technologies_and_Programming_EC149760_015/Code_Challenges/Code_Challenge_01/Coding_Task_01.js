/* Brief:
Write a function expression called reverseString().
It should accept a single argument representing a person's name.
It should return a reverse string

Great help from: https://www.freecodecamp.org/news/how-to-reverse-a-string-in-javascript-in-3-different-ways-75e4763c68cb/
and https://www.w3schools.com/jsref/jsref_charat.asp */

function reverseString(str) {
  let newStr = ""; // initiate newStr variable that will hold the reverse value

  for (let i = str.length - 1; i >= 0; i--) {
    // loop through the characters in the string from last to first
    newStr += str.charAt(i); // concatenate each letter of input in reverse order to newStr
    //    newStr += str[i];
  }
  console.log(newStr);
  // return newStr;
}

reverseString("John");
reverseString("James");
