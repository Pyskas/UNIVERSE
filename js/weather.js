document.addEventListener('DOMContentLoaded', function () { 
    const apiKey = '27eeb0d1b927855a904250420f895aec'; // Вставьте ваш ключ OpenWeather 
    const city = 'Ufa'; // Можно изменить на любой город 
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