'use strict';

function rec(number, a) {
    if (!a) a = 0;
	if (a < 10) {
	    a++;
		console.log(number + " * " + a + " = " + number * a);
		return rec(number, a);
	} else {
		return false;
	}
}

rec(3);