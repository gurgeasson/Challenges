// create nem MAP() object
const shoppingList = new Map();
  
// Function add item to list - take item name and quantity, add it to MAP()
// Than update "div #list" with list of items
function addItem() {
  // // get user input with #newListItem - the name of the new list item
  // let newItemName = document.getElementById("newListItem").value;
  // // get user input with #quantity - amount needed of list item
  // let newItemQuantity = document.getElementById("quantity").value;
  // alert(`${newItemName} x ${newItemQuantity}`);
  
  // add new element to MAP()
  shoppingList.set(document.getElementById("newListItem").value, document.getElementById("quantity").value);
  // read MAP, spice it with HTML and store in HTMLList variable
  let HTMLList = "";
  shoppingList.forEach (function(value, key) {
    HTMLList += '<div id="' + key + '" class="row align-items-center py-1" data-cy="listRow"><br><div class="col-8">' + key + '</div><br><div class="col-2">' + value + '</div><br><div class="col-2"><button type="button" class="btn btn-danger btn-sm" onclick="deleteItem(\'' + key + '\')" data-cy="deleteBtn">Delete</button></div></div>'
  })
  document.getElementById('list').innerHTML = HTMLList;
}

// delete element function
function deleteItem(key) {
  // alert(key);
  const element = document.getElementById(key);
  element.remove();
}