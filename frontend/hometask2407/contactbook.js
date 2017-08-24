'use strict';

/**
 * Написать контактную книгу в которой есть 3 публичных метода, и 2 приватный (подсказка)
 *
 * @tutorial
 *
 * @method add
 * @public
 * @description Принимает два параметра имя и телефон, имя должно быть string, телефон number
 * 1) Сделать валидацию входных данных
 * 2) У каждого контакта должно быть 3 поля (name, phone, id), id Должен автоматически инкрементироваться
 *    при добавлении контакта.
 *
 * @method get
 * @public
 * @description Выводит в консоль списко всех контактов
 *
 * @method delete
 * @public
 * @description
 * 1) Сделать валидацию входных данных
 * 2) Удаление елемента по индексу
 *
 * @constructor ContactBook
 */

function ContactBook() {
    var _this = this;

    this._contact = [
        [1, ['name', 'phone']],
        [2, ['name2', 'phone2']]
    ];

    this._getId = function () {
        return _this._contact.length + 1;
    };

    this.get = function () {
        return _this._contact;
    };

    this.add = function () {
        var id = _this._getId();
        var newContact = [id, [arguments]];
        _this._contact.push(newContact);
        console.log(_this._contact);
    };

    this.deleteByIndex = function (id) {
        if (!id) return;
        delete this._contact[--id];
        console.log(_this._contact);
    }
}

var myContactBook = new ContactBook();

/** Добавление */
myContactBook.add('Test', +380997778833);

/** Получение */
console.log(myContactBook.get());

/** Удаление и получение нового списка */
myContactBook.deleteByIndex(1);
console.log(myContactBook.get());