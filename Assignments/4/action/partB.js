// declare variables

var targetNum = randomNum();
var gameContinues = true;
var guessLimit = 10;

// getting varibles from html
var message = document.querySelector(".message");
var user_input = document.querySelector("#game_layout #user_input");
var user_submit = document.querySelector("#game_layout #user_submit");
var chance = document.querySelector(".chance");

user_submit.addEventListener("click", checkNum);
message.textContent = "You will have 10 chances to guess the number!";

function randomNum() {
    return Math.floor(Math.random() * 100) + 1;
}

// check user input
function checkNum() {
    console.log("random number: " + targetNum);
    var userNum = user_input.value;
    guessLimit--;
    //message.textContent = "You have 10 chances to guess the number";

    if (userNum > targetNum) {
        message.textContent = "Enter a lower number";
        chance.textContent = "You have " + guessLimit + " chance(s) left.";
    } else if (userNum < targetNum) {
        message.textContent = "Enter a higher number";
        chance.textContent = "You have " + guessLimit + " left.";
    } else if (userNum == targetNum) {
        message.textContent = "You got it right!";
        gameContinues = false;
    }

    checkGameStatus();
}

// check if the game is end

function checkGameStatus() {
    if (gameContinues == false) {
        message.textContent = "Game is Over, Start a New game";
        gameOver();
    }
    if (guessLimit == 0) {
        gameContinues = false;
        message.textContent =
            "You have used all 10 chances. Game is Over, Started a New game";
        gameOver();
        newGame();
    }
}

function newGame() {
    message.textContent =
        "A New Game Started, you will have 10 chances to guess the number!";
    btn.parentNode.removeChild(btn);
    targetNum = randomNum();
    gameContinues = true;
    guessLimit = 10;
}

function gameOver() {
    linebreak = document.createElement("br");
    linebreak.textContent = "\n";
    document.body.appendChild(linebreak);
    document.body.appendChild(linebreak);
    btn = document.createElement("button");
    btn.textContent = "Start New Game";
    document.body.appendChild(btn);
    btn.addEventListener("click", newGame);
}