describe("RPS Game", () => {
  // Visit URL before each test
  beforeEach(() => {
    cy.visit("http://127.0.0.1:5500/index.html");
  });

  // Play the game with the 'Rock' option and check the result
  it("Play the game with the 'Rock' option and check the result", () => {
    // Click the 'Rock' button that should exist
    cy.get('[data-cy="rock"]').should("exist").click();
    // Check that the user option is set to 'Rock'
    cy.get('[data-cy="user-option"]').should("have.text", "Rock");
    // Check the computer option
    cy.get('[data-cy="computer-option"]').then((option) => {
      // If the computer option is set to 'Rock'
      if (option.text().includes("Scissors")) {
        cy.get('[data-cy="result"]').contains("You win!"); // The result is player win
      }
      // If the computer option is set to 'Paper'
      else if (option.text().includes("Rock")) {
        cy.get('[data-cy="result"]').contains("It is a tie!"); // The result is a tie
      }
      // If the computer option is set to 'Scissors'
      else if (option.text().includes("Paper")) {
        cy.get('[data-cy="result"]').contains("You lose!"); // The result is computer win
      }
    });
  });
  // Play the gmae with the 'Paper' option and check the result
  it("Play the game with the 'Paper' option and check the result", () => {
    // Click the 'Paper' button that should exist
    cy.get('[data-cy="paper"]').should("exist").click();
    // Check that the user option is set to 'Paper'
    cy.get('[data-cy="user-option"]').should("have.text", "Paper");
    // Check the computer option
    cy.get('[data-cy="computer-option"]').then((option) => {
      // If the computer option is set to 'Rock'
      if (option.text().includes("Rock")) {
        cy.get('[data-cy="result"]').contains("You win!"); // The result is player win
      }
      // If the computer option is set to 'Paper'
      else if (option.text().includes("Paper")) {
        cy.get('[data-cy="result"]').contains("It is a tie!"); // The result is a tie
      }
      // If the computer option is set to 'Scissors'
      else if (option.text().includes("Scissors")) {
        cy.get('[data-cy="result"]').contains("You lose!"); // The result is computer win
      }
    });
  });

  // Play the gmae with the 'Scissors' option and check the result
  it("Play the game with the 'Scissors' option and check the result", () => {
    // Click the 'Scissors' button that should exist
    cy.get('[data-cy="scissors"]').should("exist").click();
    // Check that the user option is set to 'Scissors'
    cy.get('[data-cy="user-option"]').should("have.text", "Scissors");
    // Check the computer option
    cy.get('[data-cy="computer-option"]').then((option) => {
      // If the computer option is set to 'Rock'
      if (option.text().includes("Paper")) {
        cy.get('[data-cy="result"]').contains("You win!"); // The result is player win
      }
      // If the computer option is set to 'Paper'
      else if (option.text().includes("Scissors")) {
        cy.get('[data-cy="result"]').contains("It is a tie!"); // The result is a tie
      }
      // If the computer option is set to 'Scissors'
      else if (option.text().includes("Rock")) {
        cy.get('[data-cy="result"]').contains("You lose!"); // The result is computer win
      }
    });
  });
});
