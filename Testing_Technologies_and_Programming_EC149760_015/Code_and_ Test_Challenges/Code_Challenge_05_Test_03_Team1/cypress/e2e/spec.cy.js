// check if site loads
describe("test if site loads", () => {
  it("site loads", () => {
  cy.visit('localhost:5501/index.html');
  })
})

describe("test if objects exist and their functionality", () => {
  beforeEach('reload before each it()', () => {
    cy.visit('localhost:5501/index.html');
  })

  // check if input fields and 'add to list' button exists
  it("input fields and 'add item' button exist", () => {
    cy.get('[data-cy="newListItem"]')
    cy.get('[data-cy="quantity"]')
    cy.get('button[data-cy="submitBtn"]').click();
  })

  // test input field functionality, 'add to list' button functionality
  // test if we get a new entry
  // test delete button
  it("input fields, add item button and delete button all work as expected", () => {
    cy.get('[data-cy="newListItem"]').type('eggs');
    cy.get('[data-cy="quantity"]').type('2');
    cy.get('button[data-cy="submitBtn"]').click();
    cy.get('[data-cy="newListItem"]').clear().type('ducks');
    cy.get('[data-cy="quantity"]').type('5');
    cy.get('button[data-cy="submitBtn"]').click();
    // last child. see if texts says ducks and 5
    cy.get('[data-cy="listRow"]').last().contains('ducks');
    cy.get('[data-cy="listRow"]').last().contains('5');
    // delete the last line
    cy.get('[data-cy="listRow"]').last().find('button[data-cy="deleteBtn"]').click();
    // and check again if ducks x5 is deleted
    cy.get('[data-cy="listRow"]').last().contains('ducks').should('not.exist');
    cy.get('[data-cy="listRow"]').last().contains('5').should('not.exist');
  })
});