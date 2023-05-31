# Secret number - a short game to guess a secret number.

# The Brief:
# 1. Generates a random number.
# 2. Takes in a guess.
# 3. Returns a string with the guess and whether that guess is lower or higher than the random number.
#    E.g., “You answered 9. The correct answer is higher.”
# 4. If the guess matches the random number, then return a string which confirms this.
#    E.g., “You answered 9. This is the correct answer!”

# My Assumptions:
# 1. The range is 1 to 100, whole numbers.
# 2. The input must be within this range (whole numbers).
# 3. I pick python as my preferred language as I'm comfortable with it, and is convenient to run and debug in VSCode
# 4. The presentation is simple, the program runs in terminal.
#    Instructions, the input and the outcome of the game all presented text based, just like in the days of old.
# 5. Due to limited time some function will not be implemented, I'll list these under 'For Future Releases'

# Testing:
# Once the program finished i'll test and confirm that:
# 1. it runs
# 2. the input - negative numbers, strings, numbers over 100 and below 1, floats
# 3. scenarios like I take too many guesses, I guess the number in less than 7 attempts

# For Future Releases:
# In case the player fails to guess within 7 attempts, be nice and tell them what the random number was.
# It's not necessarely easy to keep track of the remaining guesses, to tell this to the player would be usefull.

# Load random module
import random

# Define the game as a function
def secret_number_game():
    # Generate a random number in a range of 1 to 100 and sore it in the variable 'secret_number'
    secret_number = random.randint(1, 100)
    # Initialize variable 'num_guesses' to keep track of players's guesses 
    num_guesses = 0

    # Great player and explain the rules
    print("Welcome to Secret Number.\n In this game the computer generates a secret number from 1 to 100.\n You have 7 guesses to find this number. Good luck!")
    
    # While loop will to limit number of guesses to 7
    while num_guesses < 7:
        # Take user's guess as input
        try:
            guess = int(input("Enter your guess: "))
            
            # Check if the guess is 1 to 100. If not, ask for input again
            if guess < 1 or guess > 100:
                print("Please enter a whole number between 1 and 100.")
                continue
        # Return error if guess is not an int
        except ValueError:
            print("Invalid input. Please enter a whole number.")
            continue

        # Compare the guess with the secret number
        if guess < secret_number:
            # The guess is lower than the secret number
            print(f"You answered {guess}. The correct answer is higher.")
        elif guess > secret_number:
            # The guess is higher than the secret number
            print(f"You answered {guess}. The correct answer is lower.")
        else:
            # The guess matches the secret number
            print(f"You answered {guess}. This is the correct answer!")
            # Exit 'secret_number_game()'
            return
        
        # Increment 'num_guesses' by 1 
        num_guesses += 1
    
    # If 7 incorrect guesses are made, end the game with "Game Over" message
    print("Game Over! You have reached the maximum number of guesses.")

# Run the game
secret_number_game()