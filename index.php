<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz zgłoszeniowy MMA</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 500px; margin: auto; }
        label, select, input { display: block; margin-bottom: 10px; width: 100%; }
        button { margin-top: 10px; padding: 10px; background: #007bff; color: white; border: none; cursor: pointer; }
        #debug { background: #f4f4f4; padding: 10px; margin-top: 20px; border: 1px solid #ddd; }
        .error { color: red; }
    </style>
</head>
<body>
    <h2>Formularz zgłoszeniowy</h2>
    <form id="mmaForm">
        <label for="formula">Formuła:</label>
        <select id="formula" name="formula"></select>

        <label for="category">Kategoria:</label>
        <select id="category" name="category"></select>

        <label for="weight">Kategoria wagowa:</label>
        <select id="weight" name="weight"></select>

        <label for="name">Imię i nazwisko:</label>
        <input type="text" id="name" name="name" required>

        <label for="age">Wiek:</label>
        <input type="number" id="age" name="age" required>
        <p id="ageError" class="error"></p>

        <button type="submit">Zgłoś zawodnika</button>
    </form>

    <div id="debug">
        <h3>Debug log:</h3>
        <ul id="debugLog"></ul>
    </div>

    <script>
        function logDebug(message) {
            const logList = document.getElementById("debugLog");
            const logItem = document.createElement("li");
            logItem.textContent = message;
            logList.appendChild(logItem);
        }

        const data = {
            "formula": {
                "MMA": {
                    "ages_category": [
                        {"code": "KU14", "name": "Kadeci U14", "od": 12, "do": 13},
                        {"code": "KU16", "name": "Kadeci U16", "od": 14, "do": 15},
                        {"code": "KU18", "name": "Kadeci U18", "od": 17, "do": 16},
                        {"code": "JM18", "name": "Juniorzy 18-21", "od": 18, "do": 21},
                        {"code": "JK18", "name": "Juniorki 18-21", "od": 18, "do": 21},
                        {"code": "SM21", "name": "Seniorzy 21+", "od": 21},
                        {"code": "SK21", "name": "Seniorki 21+", "od": 21},
                        {"code": "SM21PK", "name": "Seniorzy 21+ pierwszy krok", "od": 21},
                        {"code": "SK21PK", "name": "Seniorki 21+ pierwszy krok", "od": 21},
                        {"code": "SM21FC", "name": "Seniorzy 21+ full contact", "od": 21},
                        {"code": "SK21FC", "name": "Seniorki 21+ full contact", "od": 21}
                    ],
                    "scale_category": [
                        {"code": "KU14", "scale": ["31kg", "34kg", "37kg", "40kg", "44kg", "48kg", "52kg", "57kg", "62kg"]},
                        {"code": "KU16", "scale": ["40kg", "44kg", "48kg", "52kg", "57kg", "62kg", "67kg", "72kg", "77.1kg"]},
                        {"code": "KU18", "scale": ["52.2kg", "56.7kg", "61.2kg", "65.8kg", "70.3kg", "77.1kg", "83.9kg", "93kg", "120.2kg"]},
                        {"code": "JM18", "scale": ["52.2kg", "56.7kg", "61.2kg", "65.8kg", "70.3kg", "77.1kg", "83.9kg", "93kg", "120.2kg", "120.3kg-300.00kg"]},
                        {"code": "JK18", "scale": ["47.5kg", "52.2kg", "56.7kg", "61.2kg", "65.8kg", "70.3kg"]},
                        {"code": "SM21", "scale": ["52.2kg", "56.7kg", "61.2kg", "65.8kg", "70.3kg", "77.1kg", "83.9kg", "93kg", "120.2kg", "120.3kg-300.00kg"]},
                        {"code": "SK21", "scale": ["47.5kg", "52.2kg", "56.7kg", "61.2kg", "65.8kg", "70.3kg"]},
                        {"code": "SM21PK", "scale": ["52.2kg", "56.7kg", "61.2kg", "65.8kg", "70.3kg", "77.1kg", "83.9kg", "93kg", "120.2kg", "120.3kg-300.00kg"]},
                        {"code": "SK21PK", "scale": ["47.5kg", "52.2kg", "56.7kg", "61.2kg", "65.8kg", "70.3kg"]},
                        {"code": "SM21FC", "scale": ["52.2kg", "56.7kg", "61.2kg", "65.8kg", "70.3kg", "77.1kg", "83.9kg", "93kg", "120.2kg", "120.3kg-300.00kg"]},
                        {"code": "SK21FC", "scale": ["47.5kg", "52.2kg", "56.7kg", "61.2kg", "65.8kg", "70.3kg"]}
                    ]
                },
                "K1": {
                    "ages_category": [
                        {"code": "JK", "name": "Juniorzy kobiety"},
                        {"code": "JM", "name": "Juniorzy mężczyźni"},
                        {"code": "SK", "name": "Seniorzy kobiety"},
                        {"code": "SM", "name": "Seniorzy mężczyźni"} 
                    ],
                    "scale_category": [
                        {"code": "JK", "scale": ["50kg", "57kg", "64kg", "64kg+"]},
                        {"code": "JM", "scale": ["60kg", "66kg", "72kg", "78kg", "84kg", "84kg+"]},
                        {"code": "SK", "scale": ["50kg", "57kg", "64kg", "64kg+"]},
                        {"code": "SM", "scale": ["60kg", "66kg", "72kg", "78kg", "84kg", "90kg", "90kg+"]}
                    ]
                }
            }
        };

        const formulaSelect = document.getElementById("formula");
        const categorySelect = document.getElementById("category");
        const weightSelect = document.getElementById("weight");
        const ageInput = document.getElementById("age");
        const ageError = document.getElementById("ageError");

        function populateFormulas() {
            logDebug("=======>populateFormulas");
            formulaSelect.innerHTML = "";
            Object.keys(data.formula).forEach(formula => {
                let option = document.createElement("option");
                option.value = formula;
                option.textContent = formula;
                formulaSelect.appendChild(option);
            });
            updateCategories();
        }

        function updateCategories() {
            logDebug("=======>updateCategories");
            const selectedFormula = formulaSelect.value;
            categorySelect.innerHTML = "";
            data.formula[selectedFormula].ages_category.forEach(category => {
                let option = document.createElement("option");
                option.value = category.code;
                option.textContent = category.name;
                categorySelect.appendChild(option);
            });
            updateWeights();
        }

        function updateWeights() {
            logDebug("=======>updateWeights");
            const selectedFormula = formulaSelect.value;
            const selectedCategory = categorySelect.value;
            weightSelect.innerHTML = "";
            let formula_scale_categories = data.formula[selectedFormula].scale_category;
            formula_scale_categories.forEach(scale_categories => {
                if (selectedCategory && scale_categories['code'] == selectedCategory) {
                    scale_categories['scale'].forEach(scale => {
                        let option = document.createElement("option");
                        option.value = scale;
                        option.textContent = scale;
                        weightSelect.appendChild(option);
                    })
                }
            });
        }

        function validateAge() {
            const selectedFormula = formulaSelect.value;
            const selectedCategory = categorySelect.value;
            const age = parseInt(ageInput.value, 10);
            const category = data.formula[selectedFormula].ages_category.find(cat => cat.code === selectedCategory);
            if (category && (age < category.od || (category.do && age > category.do))) {
                ageError.textContent = `Wiek musi być pomiędzy ${category.od} a ${category.do || '∞'} lat.`;
                return false;
            }
            ageError.textContent = "";
            return true;
        }

        function submitForm(event) {
            event.preventDefault();
            if (!validateAge()) {
                logDebug("Błąd: Wiek nie pasuje do wybranej kategorii.");
                return;
            }

            const formData = new FormData(document.getElementById("mmaForm"));

            fetch("save.php", {
                method: "POST",
                body: formData
            })
            .then(response => {
                logDebug("Nagłówek Content-Type: " + response.headers.get("content-type"));
                if (!response.ok) {
                    throw new Error("HTTP error! Status: " + response.status);
                }
                return response.json();
            })
            .then(data => {
                logDebug("Otrzymana odpowiedź: " + JSON.stringify(data.success));
                
                if (typeof data !== "object" || data === null) {
                    throw new Error("Odpowiedź nie jest poprawnym JSON-em.");
                }

                if (data.success) {
                    logDebug("Przekierowanie do PayU: " + data.sessionId);
                    window.location.href = "https://secure.payu.com/pay?sessionId=" + encodeURIComponent(data.sessionId);
                } else {
                    logDebug("Błąd: " + (data.error || "Nieznany błąd"));
                    alert("Błąd: " + (data.error || "Nieznany błąd"));
                }
            })
            .catch(error => {
                logDebug("Błąd podczas przetwarzania: " + error.message);
                alert("Błąd: " + error.message);
            });
        }

        function submitForm_depr(event) {
            event.preventDefault();
            if (!validateAge()) {
                logDebug("Błąd: Wiek nie pasuje do wybranej kategorii.");
                return;
            }
            
            const formData = new FormData(document.getElementById("mmaForm"));
            fetch("save.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log(data);
                console.log(data.success);
                console.log(data['success']);

                logDebug("Odpowiedź z serwera: data => " + data);
                if (data.success) {
                    window.location.href = "https://secure.payu.com/pay?sessionId=" + data.sessionId;
                } else {
                    logDebug("Odpowiedź z serwera: data.success => " + data.success);
                    // alert("Błąd: " + data.error);
                }
                // alert("Odpowiedź serwera: " + data);
            })
            .catch(error => {
                logDebug("Błąd podczas wysyłania danych: " + error);
                alert("Błąd podczas wysyłania danych.");
            });
        }

        formulaSelect.addEventListener("change", updateCategories);
        categorySelect.addEventListener("change", updateWeights);
        ageInput.addEventListener("input", validateAge);

        document.getElementById("mmaForm").addEventListener("submit", submitForm);

        populateFormulas();
    </script>
</body>
</html>