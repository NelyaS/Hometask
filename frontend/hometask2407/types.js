'use strict';

/**
 * Написать функцию которая принимает массив данных, и отдает массив типов данных,
 * элементов массива который передали в функцию;
 * Написать валидацию на массив который передали функцию;
 * @example
 *  function arrayTypes ( ['Яблоко', 'Апельсин', 'Груша', 1, true, 3, false]) { ... }
 *  return ["string", "string", "string", "number", "boolean", "number", "boolean"]
 * @param array
 * @returns {Array}
 */

function arrayType() {
    var array = [];
    for (var i = 0; i < arguments.length; i++) {
        array[i] = typeof ( arguments[i] );
    }
    return array;
}

var types = arrayType('Яблоко', 'Апельсин', 'Груша', 1, true, 3, false);

console.log(types);