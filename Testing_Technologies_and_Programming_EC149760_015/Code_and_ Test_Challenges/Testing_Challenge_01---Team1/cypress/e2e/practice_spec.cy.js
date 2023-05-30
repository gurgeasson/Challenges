describe("template spec", () => {
  it("passes", () => {
    cy.visit("https://example.cypress.io");
  });
});

describe("My First Test", () => {
  it("Does not do much! But pases.", () => {
    expect(true).to.equal(true);
  });
});

describe("My Second Test", () => {
  it("Does not do much! But Fails.", () => {
    expect(true).to.equal(false);
  });
});

describe("My First Test assignment", () => {
  it('queries for button with id query-btn and expects to find "Button"', () => {
    cy.visit("https://example.cypress.io/commands/querying");
    cy.get("#query-btn").should("contain", "Button");
  });
});

describe("My Second Test assignment", () => {
  it("queries for email input field, tyoes my email and asserts my email", () => {
    cy.visit("https://example.cypress.io/commands/querying");
    cy.get(".query-form").within(() => {
      cy.get("#inputEmail")
        .type("fake@email.com")
        .should("have.value", "fake@email.com");
    });
  });
});

describe("My Third Test assignment", () => {
  it("queries for various elements and click them", () => {
    cy.visit("https://example.cypress.io/commands/actions");
    cy.get("#action-canvas").click();
    cy.get("#action-canvas").click('topLeft');
    cy.get("#action-canvas").click('bottomRight');
  });
});
