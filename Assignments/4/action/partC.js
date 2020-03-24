const cardsArray8 = [{
    name: 'luffy',
    img: 'images/0.png'
}, {
    name: 'zoro',
    img: 'images/1.png'
}, {
    name: 'sanji',
    img: 'images/2.png'
}, {
    name: 'buggy',
    img: 'images/3.png'
}, {
    name: 'nami',
    img: 'images/4.png'
}, {
    name: 'robin',
    img: 'images/5.png'
}, {
    name: 'usopp',
    img: 'images/6.png'
}, {
    name: 'chopper',
    img: 'images/7.png'
}]
const cardsArray10 = [{
    name: 'luffy',
    img: 'images/0.png'
}, {
    name: 'zoro',
    img: 'images/1.png'
}, {
    name: 'sanji',
    img: 'images/2.png'
}, {
    name: 'buggy',
    img: 'images/3.png'
}, {
    name: 'nami',
    img: 'images/4.png'
}, {
    name: 'robin',
    img: 'images/5.png'
}, {
    name: 'usopp',
    img: 'images/6.png'
}, {
    name: 'chopper',
    img: 'images/7.png'
}, {
    name: 'brook',
    img: 'images/8.png'
}, {
    name: 'vivi',
    img: 'images/9.png'
}]
const cardsArray12 = [{
    name: 'luffy',
    img: 'images/0.png'
}, {
    name: 'zoro',
    img: 'images/1.png'
}, {
    name: 'sanji',
    img: 'images/2.png'
}, {
    name: 'buggy',
    img: 'images/3.png'
}, {
    name: 'nami',
    img: 'images/4.png'
}, {
    name: 'robin',
    img: 'images/5.png'
}, {
    name: 'usopp',
    img: 'images/6.png'
}, {
    name: 'chopper',
    img: 'images/7.png'
}, {
    name: 'brook',
    img: 'images/8.png'
}, {
    name: 'vivi',
    img: 'images/9.png'
}, {
    name: 'shanks',
    img: 'images/10.png'
}, {
    name: 'crocodile',
    img: 'images/11.png'
}]

// declare variables
let count = 0
let firstGuess = ''
let secondGuess = ''
let previousTarget = null
var picNum
let delay = 1200
let winCount = 0;
let cardDelay8 = 3000;
let cardDelay10 = 5000;
let cardDelay12 = 8000;


var game = document.getElementById('game')
var grid = document.createElement('section')
grid.setAttribute('class', 'grid')
game.appendChild(grid)

// prompt
$("#dialog").dialog({
    autoOpen: true,
    buttons: {
        Easy: function() {
            picNum = 8;
            $(this).dialog("close");
            var a = document.getElementById("a-timer");
            aTimer = new Stopwatch(a);
            aTimer.start();
            countDown(picNum)
            createTable(cardsArray8)
        },
        Normal: function() {
            picNum = 10;
            $(this).dialog("close");

            var a = document.getElementById("a-timer");
            aTimer = new Stopwatch(a);
            aTimer.start();
            countDown(picNum)

            createTable(cardsArray10)
        },
        Hard: function() {
            picNum = 12;
            $(this).dialog("close");

            var a = document.getElementById("a-timer");
            aTimer = new Stopwatch(a);
            aTimer.start();
            countDown(picNum)

            createTable(cardsArray12)
        }
    },
    width: "400px"
});
// create table
function createTable(cardsArray) {
    // duplicate cards and randomlize it
    let gameGrid = cardsArray.concat(cardsArray)
    gameGrid.sort(() => 0.5 - Math.random())
        // display cards

    gameGrid.forEach(item => {

        const card = document.createElement('div')
        card.classList.add('card')
        card.dataset.name = item.name

        const front = document.createElement('div')
        front.classList.add('front')

        // Create back of card, which contains
        const back = document.createElement('div')
        back.classList.add('back')
        back.style.backgroundImage = `url(${item.img})`
            // Append card to grid, and front and back to each card
        grid.appendChild(card)

        //setTimeout(card.appendChild(front), 30000)
        //setTimeout(card.appendChild(back), 30000)

        card.appendChild(front)
        card.appendChild(back)

    })
}

// Add match CSS
const match = () => {
    var selected = document.querySelectorAll('.selected')
    selected.forEach(card => {
        card.classList.add('match')
    })
}

const resetGuesses = () => {
    firstGuess = ''
    secondGuess = ''
    count = 0

    var selected = document.querySelectorAll('.selected')
    selected.forEach(card => {
        card.classList.remove('selected')
    })
}

function getPicNum() {
    return picNum;
}

// Add event listener to grid
grid.addEventListener('click', function(event) {
    // The event target is our clicked item
    let clicked = event.target

    // Do not allow the grid section itself to be selected; only select divs inside the grid
    if (clicked.nodeName === 'SECTION' || clicked === previousTarget || clicked.parentNode.classList.contains('selected')) {
        return
    }
    if (count < 2) {
        count++

        if (count === 1) {
            firstGuess = clicked.parentNode.dataset.name
            clicked.parentNode.classList.add('selected')
        } else {
            secondGuess = clicked.parentNode.dataset.name
            clicked.parentNode.classList.add('selected')
        }

        if (firstGuess !== '' && secondGuess !== '') {
            if (firstGuess === secondGuess) {
                setTimeout(match, delay)
                setTimeout(resetGuesses, delay)

                //console.log("this is a test: " + getPicNum());
                winCount++;

                console.log(winCount);

                let cardNum = getPicNum()
                console.log(cardNum);
                // 
                if (winCount == cardNum) {
                    aTimer.stop()
                    window.confirm("Congrats! You have won!");
                    location.reload();
                }


            } else {
                setTimeout(resetGuesses, delay)
            }
        }
        previousTarget = clicked;

    }

})

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
        if (!interval) {
            offset = Date.now();
            interval = setInterval(update, options.delay);
        }
    }

    function stop() {
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

// countdown timer
function countDown(picNum) {
    var timeleft;
    if (picNum == 8) {
        timeleft = 120;
    }
    if (picNum == 10) {
        timeleft = 150;
    }
    if (picNum == 12) {
        timeleft = 180;
    }

    var downloadTimer = setInterval(function() {
        if (timeleft <= 0) {
            clearInterval(downloadTimer);
            aTimer.stop()
            window.confirm("Sorry, Time it up. You Lost!");
            location.reload();
        } else {
            document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
        }
        timeleft -= 1;
    }, 1000);
}