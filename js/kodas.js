let a = 6;
let b = 6;

let c = -9;
let d = 415

let x = '???';
let y = '???';

if (a > b || d < c) {
    window.alert('Sankitra negalima');
}

if (c <= a && a <= d) {
    x = a;
} else if (a <= c && c <= b) {
    x = c;
}

if (a <= d && d <= b){
    y = d;
} else if (c <= b && b <= d){
    y = b;
}

let atsakymas = 'X: ' + x + ' Y: ' + y;

if (atsakymas !== 'X: ??? Y: ???') {
    document.getElementById('ats').innerHTML = atsakymas;
}