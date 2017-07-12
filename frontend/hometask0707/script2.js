'use strict';

var firstLogin = 'login1';
var secondLogin = 'login2';
var firstPassword = '12345';
var secondPassword = '23456';

var a = prompt('Введите логин');
var b = prompt('Введите пароль');

if ((a == firstLogin  || a == secondLogin) && (b == firstPassword || b == secondPassword)) {
    alert('Вы прошли проверку');
} else {
    alert('Неправильный логин или пароль');
}

