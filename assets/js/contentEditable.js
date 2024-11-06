import { uploadbg } from "./contentEditable/file.js";



const buttonSaveText = document.querySelector('.button-save-text');
const textElements = document.querySelectorAll('[data-text-key]');

// Слідукємо за кнопкою "Save text"
buttonSaveText.addEventListener('click', () => {

    // Змінюємо текст на "Text saved!"
    buttonSaveText.innerHTML = 'Text saved!';

    // Об'єкт для запису в файл
    const textObj = {};

    // Проходимося по всіх елементах які мають текстове значення
    textElements.forEach(element => {

        // Отримуємо ключ для текстового значення
        const textKey = element.getAttribute('data-text-key');

        // Змінюємо текст на значення елемента
        textObj[textKey] = element.innerHTML;
    });

    // Передаємо дані в php
    fetch('contentEditable.php', {
        method: 'POST',
        body: JSON.stringify(textObj)
    })

    // Через декілкьа секунд повертаємо стандартний тест кнопки
    setTimeout(() => {
        buttonSaveText.innerHTML = 'Save text';
    }, 3000);
});

// Записуємо фонове картинку в файл
uploadbg()