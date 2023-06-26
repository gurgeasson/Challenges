describe('load the Calculator app', () => {
  beforeEach('reload before each it()', () => {
    cy.visit('localhost:5500/index.html')
  })

  // find each and every button element and test clickable
  it('all buttons are clickable', () => {
    cy.get('button').each(($btn) => {
      cy.get($btn).click()
    })
  })

  // same as before, but using the click({ multiple: true }) functionality
  // as suggested here: https://docs.cypress.io/api/commands/click#Click-all-elements-with-id-starting-with-
  // actually seems more efficient then the one above
  // it('all buttons are clickable', () => {
  //   cy.get('button').click({ multiple: true })
  // })

  // this would be a more manula solution to the test below this test
  // I need to copy paste and update the digits 10x, don't like the idea
  // it('test number button "1"', () => {
  //   cy.get('[data-cy="1"]').click();
  //   cy.get('[data-cy="display"]').should('have.text', '1');
  // })

  // five hours later and I managed to automate the number button tests.
  // 
  it('all number buttons will update display with the correct value', () => {
    // get all button elements with data-cy="num-*" and loop through them
    cy.get('button[data-cy|="num"]').each(($btn) => {
      // click the individual button. Read the text on it and pass it down as a varaible
      cy.get($btn).click().invoke('text').then(($digit) => {
        cy.log('button ' + $digit)
        // simple test if the pressed button shows up on display
        // cy.get('[data-cy="display"]').should('contain', $digit)
        // clears display with the 'clear' button - not sure about it
        // cy.get('[data-cy="clear').click()

        // other solution to the above is to leave the digits on the display - unfortunately can't reload inbetween iterations
        // store the text in a variable and store the last digit in an other variable
        // compare that variable to the button text
        cy.get('[data-cy="display"]').then(($display) => {
          const displayedNum = $display.text()
          const displayedNumLastDigit = displayedNum.substring(displayedNum.length - 1)
          cy.log('last digit on the display ' + displayedNumLastDigit)
          expect($digit).to.equal(displayedNumLastDigit)
        })
      })
    })
  })

  //this test will input the values 2+2 and make sure that the sum is equal to 4
  it('calculate sum of 2+2', () => {
    // Click the number buttons to input 2+2
    cy.get('button').contains('2').click();
    cy.get('button').contains('+').click();
    cy.get('button').contains('2').click();
    cy.get('button[data-action="calculate"]').click();
  
    // Verify if the sum is equal to 4
    cy.get('.display').should('have.text', '4');
  });
})