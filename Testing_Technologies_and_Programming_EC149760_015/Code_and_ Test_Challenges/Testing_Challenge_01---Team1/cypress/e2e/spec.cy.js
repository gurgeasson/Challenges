describe("The Home Page", () => {
  it("successfully loads", () => {
    cy.visit("http://127.0.0.1:5500/index.html");
  });
});

describe("test buttons", () => {
  it("there are three buttons, labeled as Rock, Papper and Scissors and they are clickable", () => {
    cy.visit("http://127.0.0.1:5500/index.html");
    cy.get("#rock").should("contain", "Rock").click();
    cy.get("#paper").should("contain", "Paper").click();
    cy.get("#scissors").should("contain", "Scissors").click();
  });
});

describe("test CLICK action on buttons", () => {
  it("once clicked, 'Your option:' shows the corresponding text, \n 'Computer option updates to either Rock/Paper/Scissors' \n 'Result:' is not empty string", () => {
    cy.visit("http://127.0.0.1:5500/index.html");
    cy.get("#rock").should("contain", "Rock").click();
    cy.get("#user-option").should("have.text", "Rock");
    cy.get("#computer-option")
      .invoke("text")
      .then((comp_opt) => {
        const comp_opt_arr = ["Rock", "Paper", "Scissors"];
        if (comp_opt_arr.includes(comp_opt)) {
          cy.log("valid option");
          expect(true).to.equal(true);
        } else {
          cy.log("invalid option");
          expect(true).to.equal(false);
        }
      });
    cy.get("#result").should("not.have.text", "");

    cy.reload();
    cy.get("#paper").should("contain", "Paper").click();
    cy.get("#user-option").should("have.text", "Paper");
    cy.get("#computer-option")
      .invoke("text")
      .then((comp_opt) => {
        const comp_opt_arr = ["Rock", "Paper", "Scissors"];
        if (comp_opt_arr.includes(comp_opt)) {
          cy.log("valid option");
          expect(true).to.equal(true);
        } else {
          cy.log("invalid option");
          expect(true).to.equal(false);
        }
      });
    cy.get("#result").should("not.have.text", "");

    cy.reload();
    cy.get("#scissors").should("contain", "Scissors").click();
    cy.get("#user-option").should("have.text", "Scissors");
    cy.get("#computer-option")
      .invoke("text")
      .then((comp_opt) => {
        const comp_opt_arr = ["Rock", "Paper", "Scissors"];
        if (comp_opt_arr.includes(comp_opt)) {
          cy.log("valid option");
          expect(true).to.equal(true);
        } else {
          cy.log("invalid option");
          expect(true).to.equal(false);
        }
      });
    cy.get("#result").should("not.have.text", "");
  });
});

describe("test Rock button result", () => {
  it("result should be as expecter form RPS game", () => {
    cy.visit("http://127.0.0.1:5500/index.html");
    cy.get("#rock").click();
    cy.get("#result")
      .invoke("text")
      .then((val) => {
        if (val === "It is a tie!") {
          cy.get("#computer-option").should("have.text", "Rock");
        } else if (val === "You lose!") {
          cy.get("#computer-option").should("have.text", "Paper");
        } else if (val === "You win!") {
          cy.get("#computer-option").should("have.text", "Scissors");
        }
      });
  });
});

describe("test Paper button result", () => {
  it("result should be as expecter form RPS game", () => {
    cy.visit("http://127.0.0.1:5500/index.html");
    cy.get("#paper").click();
    cy.get("#result")
      .invoke("text")
      .then((val) => {
        if (val === "It is a tie!") {
          cy.get("#computer-option").should("have.text", "Paper");
        } else if (val === "You lose!") {
          cy.get("#computer-option").should("have.text", "Scissors");
        } else if (val === "You win!") {
          cy.get("#computer-option").should("have.text", "Rock");
        }
      });
  });
});

describe("test Scissors button result", () => {
  it("result should be as expecter form RPS game", () => {
    cy.visit("http://127.0.0.1:5500/index.html");
    cy.get("#scissors").click();
    cy.get("#result")
      .invoke("text")
      .then((val) => {
        if (val === "It is a tie!") {
          cy.get("#computer-option").should("have.text", "Scissors");
        } else if (val === "You lose!") {
          cy.get("#computer-option").should("have.text", "Rock");
        } else if (val === "You win!") {
          cy.get("#computer-option").should("have.text", "Paper");
        }
      });
  });
});
