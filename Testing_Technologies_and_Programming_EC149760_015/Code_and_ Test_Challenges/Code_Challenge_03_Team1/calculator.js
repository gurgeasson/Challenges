const calculator = document.querySelector(".calculator");
const keys = calculator.querySelector(".buttons");
const display = calculator.querySelector(".display");
let firstValue = false;
let operator = false;
let secondValue = false;

// create event listener function to look out for clicks on any of the button elements
keys.addEventListener("click", (e) => {
  if (e.target.matches("button")) {
    const key = e.target;
    const action = key.dataset.action;
    const keyContent = key.textContent;
    const displayedNum = display.textContent;
    const previousKeyType = calculator.dataset.previousKeyType;

    // calculate function
    calculate = (n1, operator, n2) => {
      let result = "0";

      if (operator === "add") {
        result = parseFloat(n1) + parseFloat(n2);
      } else if (operator === "subtract") {
        result = parseFloat(n1) - parseFloat(n2);
      } else if (operator === "multiply") {
        result = parseFloat(n1) * parseFloat(n2);
      } else if (operator === "divide") {
        result = parseFloat(n1) / parseFloat(n2);
      }

      calculator.dataset.previousKeyType = "calculate";
      firstValue = result;

      return result;
    };

    // number key press - if action not set (therefore false) the key pressed is a number key.
    if (!action) {
      // if display shows 0 or previous key pressed is operator or calculate, replace displayed number with the key pressed.
      if (
        displayedNum === "0" ||
        previousKeyType === "operator" ||
        previousKeyType === "calculate"
      ) {
        display.textContent = keyContent;
        // else appened the key pressed.
      } else {
        display.textContent = displayedNum + keyContent;
      }
      // set dataset.previousKeyType to "number"
      calculator.dataset.previousKeyType = "number";
    }

    // decimal key press
    if (action === "decimal") {
      // handle case when operator key is pressed, and next inpus is 0.something, but user omits pressing 0.
      if (previousKeyType === "operator") {
        display.textContent = "0.";
        calculator.dataset.previousKeyType = "decimal";
        // don't append if there is a decimal point already included
      } else if (!displayedNum.includes(".")) {
        display.textContent = displayedNum + ".";
        calculator.dataset.previousKeyType = "decimal";
      }
    }

    // clear key press - resets everything
    if (action === "clear") {
      display.textContent = 0;
      firstValue = false;
      operator = false;
      calculator.dataset.previousKeyType = "clear";

      // Remove .is-depressed class from all keys
      // will need to make it into a fuction, as it is also used further down and up TWICE. to handle the calculate key press and operator key press
      Array.from(key.parentNode.children).forEach((k) =>
        k.classList.remove("is-depressed")
      );
    }

    // backspace key press
    if (action === "backspc") {
      // if these only one digit, reset it to 0
      if (display.textContent.length == 1) {
        display.textContent = 0;
        // else pop the last digit
      } else {
        display.textContent = display.textContent.slice(0, -1);
      }
      calculator.dataset.previousKeyType = "backspc";
    }

    // operator key press
    if (
      action === "add" ||
      action === "subtract" ||
      action === "multiply" ||
      action === "divide"
    ) {
      // if firstValue and operator is set, skip calculate key and call calcutale function now
      if (firstValue && operator) {
        secondValue = displayedNum; // store recently displayed number
        display.textContent = calculate(firstValue, operator, secondValue);
        operator = action;

        // Remove .is-depressed class from all keys
        // will need to make it into a fuction, as it is also used further down and up TWICE. to handle the calculate key press and clear
        Array.from(key.parentNode.children).forEach((k) =>
          k.classList.remove("is-depressed")
        );
        // and add highlight to the operator key, so user knows which one is active
        key.classList.add("is-depressed");
      } else {
        // store the operator
        operator = action;
        // store first value in custome attribute as this will disapear once we press a number key
        firstValue = displayedNum;

        // Remove .is-depressed class from all keys
        // will need to make it into a fuction, as it is also used further down and up TWICE. to handle the calculate key press and clear
        Array.from(key.parentNode.children).forEach((k) =>
          k.classList.remove("is-depressed")
        );
        // and add highlight to the operator key, so user knows which one is active
        key.classList.add("is-depressed");

        // Add custom attribute
        calculator.dataset.previousKeyType = "operator";
      }
    }

    // calculate key press
    if (action === "calculate" && operator) {
      // only calculate when an operator is set
      // display.textContent = "test display - calculate key click event"; //debug line
      secondValue = displayedNum; // store recently displayed number

      // calculator.dataset.previousKeyType = "calculate"; // handle this in calculate function

      // console.log(firstValue); //debug line
      // console.log(operator); //debug line
      // console.log(secondValue); //debug line

      // call calculate function and set display to it's value
      display.textContent = calculate(firstValue, operator, secondValue);

      // console.log(calculate(firstValue, operator, secondValue)); // debug line

      // Remove .is-depressed class from all keys
      // will need to make it into a fuction, as it is also used further up TWICE. to handle multiple operator presses and clear
      Array.from(key.parentNode.children).forEach((k) =>
        k.classList.remove("is-depressed")
      );

      operator = false;
    }
  }
});
