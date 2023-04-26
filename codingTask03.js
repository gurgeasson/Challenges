/* Brief:
Write a function expression called mostExpensiveItem().
It should accept an array of items as a single argument.
It should return the item that has the most cost tied up,
calculated by the amount in stock * price.

Great help from: */

function mostExpensiveItem(arr) {
  let valueOfMostExpensive = 0;
  let indexOfMostExpensive = 0;

  for (let i = 0; i < arr.length; i++) {
    // loop through array to check which item represent the most value
    // console.log(arr[i].stock * arr[i].price);
    if (arr[i].stock * arr[i].price > valueOfMostExpensive) {
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
