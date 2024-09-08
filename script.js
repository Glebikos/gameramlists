const levels = [
    { title: "Уровень 1", description: "Легкий уровень для новичков." },
    { title: "Уровень 2", description: "Сложный уровень с множеством препятствий." },
    { title: "Уровень 3", description: "Легендарный уровень с уникальным дизайном." },
    { title: "Уровень 4", description: "Уровень безумия с быстрыми реакциями." },
];

let displayedLevels = 0;

function loadLevels() {
    const levelList = document.getElementById("level-list");
    
    for (let i = displayedLevels; i < displayedLevels + 2 && i < levels.length; i++) {
        const levelCard = document.createElement("div");
        levelCard.className = "level-card";
        
        const levelTitle = document.createElement("div");
        levelTitle.className = "level-title";
        levelTitle.textContent = levels[i].title;

        const levelDescription = document.createElement("div");
        levelDescription.className = "level-description";
        levelDescription.textContent = levels[i].description;

        levelCard.appendChild(levelTitle);
        levelCard.appendChild(levelDescription);
        levelList.appendChild(levelCard);
    }

    displayedLevels += 2;

    if (displayedLevels >= levels.length) {
        document.getElementById("load-more").style.display = "none";
    }
}

// Загрузить первые уровни при загрузке страницы
loadLevels();

// Добавить обработчик события для кнопки "Загрузить еще"
document.getElementById("load-more").addEventListener("click", loadLevels);