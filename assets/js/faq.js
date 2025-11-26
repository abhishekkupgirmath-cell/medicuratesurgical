document.addEventListener("DOMContentLoaded", function () {
    const faqMenu = document.querySelector(".faq-menu");
    const faqItems = document.querySelector(".faq-items");
    const searchInput = document.querySelector(".faq-search");

    console.log("som tu");

    // Načítanie dát z JSON súboru
    fetch("assets/texts/faq-data.json")
        .then((response) => response.json())
        .then((data) => {
            console.log(data);
            // Zobrazenie kategórií
            data.categories.forEach((category, index) => {
                const categoryItem = document.createElement("div");
                categoryItem.classList.add("faq-menu-item");
                if (index === 0) {
                    categoryItem.classList.add("active");
                }
                categoryItem.textContent = category.name;
                categoryItem.setAttribute("data-category", category.name);
                faqMenu.appendChild(categoryItem);

                if (index === 0) {
                    // Automaticky zobraz otázky a odpovede pre prvú kategóriu
                    displayQuestionsAndAnswers(data, category.name);
                }
            });

            // Priradenie event listenera pre kliknutie na kategóriu
            faqMenu.addEventListener("click", function (event) {
                if (event.target.classList.contains("faq-menu-item")) {
                    // Odstráňte triedu "active" zo všetkých položiek v menu
                    const menuItems = faqMenu.querySelectorAll(".faq-menu-item");
                    menuItems.forEach((item) => item.classList.remove("active"));

                    // Pridajte triedu "active" k vybranej kategórii
                    event.target.classList.add("active");

                    // Získanie vybranej kategórie z atribútu "data-category"
                    const category = event.target.getAttribute("data-category");

                    // Zobrazenie otázok a odpovedí pre vybranú kategóriu
                    displayQuestionsAndAnswers(data, category);

                    // Vymažte hodnotu z vyhľadávacieho inputu
                    searchInput.value = "";
                }
            });

            // Priradenie event listenera pre kliknutie na otázku
            faqItems.addEventListener("click", function (event) {
                if (event.target.classList.contains("faq-question")) {
                    // Získajte nadradený prvok (faq-item)
                    const faqItem = event.target.closest(".faq-item");

                    // Ak sa našiel nadradený prvok, pridajte/odstráňte triedu "active" k nemu
                    if (faqItem) {
                        // Ak prvok má triedu "active", odstráňte ju
                        if (faqItem.classList.contains("active")) {
                            faqItem.classList.remove("active");
                        } else {
                            // Inak pridajte triedu "active"
                            faqItem.classList.add("active");
                        }
                    }
                }
            });

            // Priradenie event listenera pre input pre vyhľadávanie
            searchInput.addEventListener("input", function () {
                const searchTerm = searchInput.value.trim().toLowerCase();

                // Odstráňte triedu "active" zo všetkých položiek v menu
                const menuItems = faqMenu.querySelectorAll(".faq-menu-item");
                menuItems.forEach((item) => item.classList.remove("active"));

                // Filtrujte otázky a odpovede na základe vyhľadávacieho termínu
                const filteredData = data.categories.map((category) => {
                    return {
                        name: category.name,
                        questions: category.questions.filter((question) =>
                            question.question.toLowerCase().includes(searchTerm) ||
                            question.answer.toLowerCase().includes(searchTerm)
                        ),
                    };
                });

                // Zobrazte výsledky vyhľadávania
                displaySearchResults(filteredData, searchTerm);
            });
        });

    // Funkcia na zobrazenie otázok a odpovedí pre danú kategóriu
    function displayQuestionsAndAnswers(data, category) {
        const categoryData = data.categories.find((item) => item.name === category);

        // Vymazanie existujúcich otázok a odpovedí
        while (faqItems.firstChild) {
            faqItems.removeChild(faqItems.firstChild);
        }

        // Vytvorenie nových otázok a odpovedí pre danú kategóriu
        categoryData.questions.forEach((item) => {
            const faqItem = document.createElement("div");
            faqItem.classList.add("faq-item");

            const question = document.createElement("div");
            question.classList.add("faq-question");

            // Zvýraznenie vyhľadávacieho výrazu v otázce
            question.innerHTML = highlightSearchTerm(item.question, searchInput.value);

            const answer = document.createElement("div");
            answer.classList.add("faq-answer");

            const answerText = document.createElement("div");
            answerText.classList.add("faq-answer-text");

            var converter = new showdown.Converter();
            // Zvýraznenie vyhľadávacieho výrazu v odpovedi
            // answerText.innerHTML = converter.makeHtml(highlightSearchTerm(item.answer.replace(/\n/g, "<br>"), searchInput.value));
            answerText.innerHTML = converter.makeHtml(highlightSearchTerm(item.answer, searchInput.value));

            answer.appendChild(answerText);

            faqItem.appendChild(question);
            faqItem.appendChild(answer);

            faqItems.appendChild(faqItem);
        });
    }

    // Funkcia na zobrazenie výsledkov vyhľadávania
    function displaySearchResults(filteredData, searchTerm) {
        // Vymazanie existujúcich otázok a odpovedí
        while (faqItems.firstChild) {
            faqItems.removeChild(faqItems.firstChild);
        }

        // Vytvorenie nových otázok a odpovedí pre vyhľadávanie
        filteredData.forEach((categoryData) => {
            categoryData.questions.forEach((item) => {
                const faqItem = document.createElement("div");
                faqItem.classList.add("faq-item");

                const question = document.createElement("div");
                question.classList.add("faq-question");

                // Zvýraznenie vyhľadávacieho výrazu v otázce
                question.innerHTML = highlightSearchTerm(item.question, searchTerm);

                const answer = document.createElement("div");
                answer.classList.add("faq-answer");

                const answerText = document.createElement("div");
                answerText.classList.add("faq-answer-text");

                // Zvýraznenie vyhľadávacieho výrazu v odpovedi
                var converter = new showdown.Converter();
                answerText.innerHTML = converter.makeHtml(highlightSearchTerm(item.answer, searchTerm));
                // answerText.innerHTML = highlightSearchTerm(item.answer, searchTerm);

                answer.appendChild(answerText);

                faqItem.appendChild(question);
                faqItem.appendChild(answer);

                faqItems.appendChild(faqItem);
            });
        });
    }

    // Funkcia na zvýraznenie vyhľadávacieho výrazu v texte
    function highlightSearchTerm(text, searchTerm) {
        // Normalizácia textu a vyhľadávacieho výrazu
        const normalizedText = normalizeText(text);
        const normalizedSearchTerm = normalizeText(searchTerm);

        // Nájdeme index hľadaného výrazu v texte
        const index = normalizedText.indexOf(normalizedSearchTerm);

        if (index !== -1) {
            // Vytvoríme zvýrazněný text, pokud je výraz nalezen
            const before = text.substring(0, index);
            const match = text.substring(index, index + searchTerm.length);
            const after = text.substring(index + searchTerm.length);

            return `${before}<span class="faq-highlight">${match}</span>${after}`;
        }

        // Pokud výraz není nalezen, vrátíme původní text
        return text;
    }

    // Funkcia na normalizáciu textu (odstránenie diakritiky)
    function normalizeText(input) {
        return input.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
    }
});
