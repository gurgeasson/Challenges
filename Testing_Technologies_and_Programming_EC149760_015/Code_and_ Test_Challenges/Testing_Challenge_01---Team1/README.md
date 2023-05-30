# Testing-Challenge-1---Team-1

### Test Challenge 1

In this topic, you will improve your testing skills by writing a testing solution for the following task.
Testing Task - Test the Rock Paper Scissors Game
In this task you are required to test the Rock Paper Scissors Game, that you have made previously, using Cypress.io.


Write a step-by-step testing strategy that will help you keep track on what to test.

Hint:

Test all the elements of the game (buttons, outputs and all the results between the player and the computer).

---

The TEST

1. First we need to test if our 3 buttons exist (one reads Rock, the second Papper, third Scissors) and they are in a clickable state.
2. Than we need to see if the action is as expected - once clicked, we should get the corresponding text (Rock, Papper, Scissors) as 'Your Option:' and as a 'Computer Option:' again rock paper or scissors. And a 'Result:' ethier as you lose! or you win! or draw.
3. Finaly this result should be correct according to the player and computer choice.