/*
function counterFunc(counter) {
    if (counter > 100) {
      counter = 0;
    } else {
      counter++;
    }
    
    return counter;
  }
*/

let counterFunc = (counter) => {
  if (counter > 100) {
    counter = 0;
  } else {
    counter++;
  }
  return counter;
};

console.log(counterFunc(99));
console.log(counterFunc(100));
console.log(counterFunc(101));
