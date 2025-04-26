let display = document.getElementById('display');

function addToDisplay(value) {
    if (display.value === 'Неправильно введено выражение')
        display.value = '';
    display.value += value;
}

function clearDisplay() {
    display.value = '';
}

function calculateResult() {
    const userInput = display.value;

    fetch('calc.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'expression=' + encodeURIComponent(userInput),
    })
    .then(response => response.json())
    .then(data => {
        display.value = data.result;
    })
    .catch(error => {
        display.value = 'Неправильно введено выражение';
    });
}