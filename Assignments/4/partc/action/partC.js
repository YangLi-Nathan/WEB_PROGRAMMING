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
    img: '../images/0.png'
}, {
    name: 'zoro',
    img: '../images/1.png'
}, {
    name: 'sanji',
    img: '../images/2.png'
}, {
    name: 'buggy',
    img: '../images/3.png'
}, {
    name: 'nami',
    img: '../images/4.png'
}, {
    name: 'robin',
    img: '../images/5.png'
}, {
    name: 'usopp',
    img: '../images/6.png'
}, {
    name: 'chopper',
    img: '../images/7.png'
}, {
    name: 'brook',
    img: '../images/8.png'
}, {
    name: 'vivi',
    img: '../images/9.png'
}]
const cardsArray12 = [{
    name: 'luffy',
    img: '../images/0.png'
}, {
    name: 'zoro',
    img: '../images/1.png'
}, {
    name: 'sanji',
    img: '../images/2.png'
}, {
    name: 'buggy',
    img: '../images/3.png'
}, {
    name: 'nami',
    img: '../images/4.png'
}, {
    name: 'robin',
    img: '../images/5.png'
}, {
    name: 'usopp',
    img: '../images/6.png'
}, {
    name: 'chopper',
    img: '../images/7.png'
}, {
    name: 'brook',
    img: '../images/8.png'
}, {
    name: 'vivi',
    img: '../images/9.png'
}, {
    name: 'shanks',
    img: '../images/10.png'
}, {
    name: 'crocodile',
    img: '../images/11.png'
}]





// Grab the div with an id of root
var game = document.getElementById('game')

// Create a section with a class of grid
var grid = document.createElement('section')
grid.setAttribute('class', 'grid')

//const grid = document.getElementById('grid')


// Append the grid section to the game div
game.appendChild(grid)


$("#dialog").dialog({
    autoOpen: true,
    buttons: {
        Easy: function() {
            picNum = 8;
            $(this).dialog("close");



            // For each item in the cardsArray array...
            cardsArray8.forEach(item => {
                // Create a div
                const card = document.createElement('div')

                // Apply a card class to that div
                card.classList.add('card')

                // Set the data-name attribute of the div to the cardsArray name
                card.dataset.name = item.name

                // Apply the background image of the div to the cardsArray image
                card.style.backgroundImage = `url(\"${item.img}\")`


                console.log('url(${item.img})')
                    // Append the div to the grid section
                grid.appendChild(card)

            })



        },
        Normal: function() {
            picNum = 10;
            $(this).dialog("close");

        },
        Hard: function() {
            picNum = 12;
            $(this).dialog("close");

        }
    },
    width: "400px"
});