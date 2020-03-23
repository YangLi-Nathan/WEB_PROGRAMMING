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
        winAudio();
        message.textContent = "Bingo!!!";
        chance.textContent = "";
        gameContinues = false;
    }
    checkGameStatus();
}

// check if the game is end
function checkGameStatus() {
    if (gameContinues == false) {
        //message.textContent = "Game is Over, Start a New game";

        aTimer.stop();
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
    aTimer.reset();
    aTimer.start();

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
// audio sound effects

function playAudio() {
    document.getElementById("clockAudio").play();
}

function pauseAudio() {
    document.getElementById("clockAudio").pause();
}

function winAudio() {
    document.getElementById("winAudio").play();
}

// stopwatch

var Stopwatch = function(elem, options) {
    var timer = createTimer(),
        offset,
        clock,
        interval;

    // default options
    options = options || {};
    options.delay = options.delay || 1;

    elem.appendChild(timer);

    // initialize
    reset();

    // private functions
    function createTimer() {
        return document.createElement("span");
    }

    function start() {
        playAudio();
        if (!interval) {
            offset = Date.now();
            interval = setInterval(update, options.delay);
        }
    }

    function stop() {
        pauseAudio();
        if (interval) {
            clearInterval(interval);
            interval = null;
        }
    }

    function reset() {
        clock = 0;
        render(0);
    }

    function update() {
        clock += delta();
        render();
    }

    function render() {
        timer.innerHTML = clock / 1000;
    }

    function delta() {
        var now = Date.now(),
            d = now - offset;

        offset = now;
        return d;
    }

    this.start = start;
    this.stop = stop;
    this.reset = reset;
};

var elems = document.getElementsByClassName("basic");

for (var i = 0, len = elems.length; i < len; i++) {
    new Stopwatch(elems[i]);
}

var a = document.getElementById("a-timer");
aTimer = new Stopwatch(a);
aTimer.start();