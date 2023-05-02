/* Brief:
Write a function expression called mostExpensiveItem().
It should accept an array of items as a single argument.
It should return the item that has the most cost tied up,
calculated by the amount in stock * price.

Great help from: https://www.w3schools.com and
https://stackoverflow.com/questions/11922383/how-can-i-access-and-process-nested-objects-arrays-or-json */

function mostExpensiveItem(arr) {
  let valueOfMostExpensive = 0; // this will aid in compairing value
  let indexOfMostExpensive = 0; // this vill hold the index of the most vauable

  for (let i = 0; i < arr.length; i++) {
    // loop through array to check which item represent the most value
    // console.log(arr[i].stock * arr[i].price);
    if (arr[i].stock * arr[i].price > valueOfMostExpensive) {
      // compare value to previous item, if higher, store both value and index
      valueOfMostExpensive = arr[i].stock * arr[i].price;
      indexOfMostExpensive = i;
    }
  }
  // console.log(valueOfMostExpensive);
  console.log(arr[indexOfMostExpensive]);
  // return newArr;
}

mostExpensiveItem([
  { item: "irn bru", price: 3.25, stock: 50 },
  { item: "fanta", price: 3.98, stock: 45 },
  { item: "diet coke", price: 4.4, stock: 38 },
  { item: "7up", price: 3.99, stock: 42 },
]);
