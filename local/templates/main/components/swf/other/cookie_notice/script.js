document.addEventListener('DOMContentLoaded', function() {
    const cookieNotice = document.getElementById('cookieNotice');
    const acceptBtn = document.getElementById('acceptCookies');
    
    // Проверяем, было ли уже согласие
    if (!localStorage.getItem('cookiesAccepted')) {
        // Показываем уведомление через небольшую задержку
        setTimeout(() => {
            cookieNotice.classList.add('show');
        }, 1000);
    }
    
    // Обработчик кнопки "Принять"
    acceptBtn.addEventListener('click', function() {
        // Сохраняем согласие
        localStorage.setItem('cookiesAccepted', 'true');
        
        // Прячем уведомление
        cookieNotice.classList.remove('show');
        
        // Здесь можно добавить код для активации cookie/трекеров
        console.log('Cookies accepted');
    });
});