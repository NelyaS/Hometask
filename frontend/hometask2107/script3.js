'use strict';

function closure(number) {
    var a = 0;

    return function () {
        a++;
        console.log(number + " * " + a + " = " + number * a);
    };
}

var fn = closure(3);

fn();
fn();
fn();
fn();
fn();
fn();
fn();
fn();
fn();
fn();