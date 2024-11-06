export function uploadbg() {
    function changeImageOnClick(event) {
        event.preventDefault();

        // Отримуємо елемент і значення `data-filename`
        const targetDiv = event.target;
        const originalFilename = targetDiv.getAttribute('data-filename');

        // Створюємо інпут для вибору файлу
        const fileInput = document.createElement('input');
        fileInput.type = 'file';
        fileInput.accept = 'image/*';

        // Обробка вибору файлу
        fileInput.addEventListener('change', async () => {
            const file = fileInput.files[0];
            if (file) {
                const formData = new FormData();
                formData.append('file', file);

                // Додаємо оригінальне ім'я файлу як частину запиту
                if (originalFilename) {
                    formData.append('originalFilename', originalFilename);
                }

                try {
                    // Відправляємо файл на сервер за допомогою fetch
                    const response = await fetch('./admin/uploadbg.php', {
                        method: 'POST',
                        body: formData,
                    });
                    const result = await response.json();

                    if (result.success && result.url) {
                        // Змінюємо background-image на URL, отриманий із сервера
                        targetDiv.style.backgroundImage = `url(./assets/img/${result.url}?version=${Math.random()})`;
                    } else {
                        console.error('Помилка при завантаженні файлу');
                    }
                } catch (error) {
                    console.error('Помилка при підключенні до сервера:', error);
                }
            }
        });

        // Відкриваємо діалог вибору файлу
        fileInput.click();
    }

    // Додаємо обробник події до кожного елемента з класом 'uploadbg-image'
    const images = document.querySelectorAll('.uploadbg-image');
    images.forEach(image => {
        image.addEventListener('click', changeImageOnClick);
    });
}
