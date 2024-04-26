document.addEventListener("DOMContentLoaded", function() {
    startGame();
});

function startGame() {
    // Generate a random number between 1 and 100
    window.secretNumber = Math.floor(Math.random() * 100) + 1;
    window.attempts = 0;
}

function checkGuess() {
    var guess = parseInt(document.getElementById("guess").value);
    if (isNaN(guess) || guess < 1 || guess > 100) {
        alert("Please enter a valid number between 1 and 100.");
        return;
    }

    window.attempts++;

    var message = document.getElementById("message");
    if (guess === window.secretNumber) {
        message.textContent = "Congratulations! You've guessed the number in " + window.attempts + " attempts. You get 20% discount.";
        startGame();
    } else if (guess < window.secretNumber) {
        message.textContent = "Too low! Try again.";
    } else {
        message.textContent = "Too high! Try again.";
    }
}
