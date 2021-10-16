let selectTheme = document.getElementById('select-theme');
let selectKey = document.getElementById('select-key');
let htmlTag = document.querySelector('html');
let quotesField = document.getElementById('quotes-field');
let inputNumber = document.getElementById('input-number');
let inputButton = document.getElementById('input-button');
let facResult = document.getElementById('factorial-result');

let currentSeconds = 0;
let currentTheme = selectTheme.value;
let currentQuotesKey = selectKey.value;

let keyNQuotes = {
    Everything: "Everything is theoretically impossible, until it is done.",
    Experts: "Science is the believe in the ignorance of experts"
};

let UpdateTheme = (theme) => {
    switch (theme) {
        case 'dark':
            htmlTag.classList = 'dark';
            break;
        case 'light':
            htmlTag.classList = 'light';
            break;
        default:
            break;
    }
}

let UpdateQuote = (key) => {
    if (Object.keys(keyNQuotes).includes(key)) {
        quotesField.textContent = keyNQuotes[key];
    }
    else {
        quotesField.textContent = '';
    }
}

let calcFac = (val) => {
    let res = 1;
    for (let i = 2; i <= val; i++) {
        res *= i;
    }

    return res;
}


UpdateTheme(currentTheme);
UpdateQuote(currentQuotesKey);

selectTheme.addEventListener('change', () => {
    // console.log(selectTheme.value);
    currentTheme = selectTheme.value;

    UpdateTheme(currentTheme);
    
});

selectKey.addEventListener('change', () => {
    currentQuotesKey = selectKey.value;

    UpdateQuote(currentQuotesKey);
});

inputButton.addEventListener('click', () => {
    let number = inputNumber.value;
    let result = calcFac(number);

    let newContent = `factorial of ${number} is ${result}`;

    facResult.textContent = newContent;
});