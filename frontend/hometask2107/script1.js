'use strict';

var ticket = prompt('Напишите номер билета: ');

var array = ticket.split('');

var firstSum = parseInt(array[0]) + parseInt(array[1]) + parseInt(array[2]);
var secondSum = parseInt(array[3]) + parseInt(array[4]) + parseInt(array[5]);

if (firstSum === secondSum) {
    alert("Счастливый билет");
} else {
    alert("Обычный билет");
}