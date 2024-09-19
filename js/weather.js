document.addEventListener('DOMContentLoaded', function () { 
    const apiKey = 'c2f422042d76c9b7ca5e7c9ecf92b394'; // Вставьте ваш ключ OpenWeather 
    const city = '479561'; // Можно изменить на любой город 
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey}`; 
 
    // Запрос данных о погоде 
    fetch(url) 
        .then(response => response.json()) 
        .then(data => { 
            const temperature = data.main.temp; 
            const weatherElement = document.getElementById('weather'); 
            const weatherIcon = '<img src="/img/Sun.png" alt="Sun Icon" width="15" height="15">';  // Выводим иконку и температуру 
            weatherElement.innerHTML = `${weatherIcon} ${temperature}°C`; 
        }) 
        .catch(error => { 
            console.error('Ошибка получения данных о погоде:', error); 
        }); 
});