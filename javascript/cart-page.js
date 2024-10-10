// Green
function decreaseg() {
    let input = document.getElementById('quantity1');
    if (parseInt(input.value) > 0) {
        input.value = parseInt(input.value) - 1;
    }
}

function increaseg() {
    let input = document.getElementById('quantity1');
    input.value = parseInt(input.value) + 1;
}

//Yellow
function decreasey() {
    let input = document.getElementById('quantity2');
    if (parseInt(input.value) > 0) {
        input.value = parseInt(input.value) - 1;
    }
}

function increasey() {
    let input = document.getElementById('quantity2');
    input.value = parseInt(input.value) + 1;
}

//Pink
function decreasep() {
    let input = document.getElementById('quantity3');
    if (parseInt(input.value) > 0) {
        input.value = parseInt(input.value) - 1;
    }
}

function increasep() {
    let input = document.getElementById('quantity3');
    input.value = parseInt(input.value) + 1;
}

