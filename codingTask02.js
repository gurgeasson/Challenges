/* Brief:
Write a function expression called reverseArray().
It should accept an array as a single argument.
It should return a reversed array and it should work for any data type.

Great help from: */

function reverseArray(arr) {
  let newArr = []; // initiate newArr array that will hold the reverse value

  for (let i = arr.length - 1; i >= 0; i--) {
    // loop through the values in an array from last to first
    // console.log(i)
    newArr.push(arr[i]); // add original array elements to newArr in reverse order
  }
  console.log(newArr);
  // return newArr;
}

reverseArray([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
reverseArray(["I", "like", "JavaScript"]);
