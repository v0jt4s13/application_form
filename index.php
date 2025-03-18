<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz zgłoszeniowy MMA</title>
    <link async rel="stylesheet" href="/mma/static/css/global.css">
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #007bff; color: white; }
        /* form { margin-bottom: 20px; } */
        /* label, select, input { margin-right: 10px; } */

        .hero-banner {
            display: grid;
            min-width: 640px;
        }
        .hero-bg-img {

        }
        img {
            width: 100%;
            height: auto;
        }
        h2.title {
            text-align: center;
        }
        form.formula {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-content: flex-start;
            justify-content: space-between;
            align-items: flex-start;
        }        

        body { 
            font-family: Arial, sans-serif; 
            margin: 20px;
            background-color: #121212;
            color: white;
        }
        .main-wrap {
            min-width: 600px;
            margin: auto;
            background: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
            min-height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        @media screen and (max-width: 680px) {
            body {
                font-size: 0.9em;
            }
            .main-wrap, .hero-banner {
                min-width: 400px;
                columns: 3 100px;
                font-size: 0.9em;
            }
        }


        h2 {
            text-align: center;
        }
        .button-toggle {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            font-size: 16px;
            font-weight: bold;
            background: #333;
            color: white;
            border: 2px solid white;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }
        .button-toggle.active {
            background: white;
            color: black;
            border: 2px solid black;
        }
        form {
            display: flex;
            flex-direction: row;
            min-height: 250px;
            flex-wrap: wrap;
            align-content: flex-start;
            justify-content: flex-start;
            align-items: flex-start;
        }
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            margin-left: 20px;
            width: 100%;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: flex-start;
            justify-content: flex-start;
        }

        .form-group label {
            flex: 1;
            padding-right: 10px;
            max-width: 90px;
        }
        .form-group input,
        .form-group select {
            flex: 2;
            padding: 8px;
            border-radius: 4px;
            border: none;
            font-size: 16px;
            background: #2c2c2c;
            color: white;
            max-width: fit-content;
        }
        button {
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
        }
        button:hover {
            background: #0056b3;
        }
        #debug {
            background: #f4f4f4;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
            color: black;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body class="dark">
    <div class="hero-banner">
        <div class="hero-bg-img">
            <img src="/mma/static/img/tlofbmma.png">
        </div>
    </div><div class="main-wrap">
        
        <h2>Formularz zgłoszeniowy</h2>

        <form id="mmaForm">
            <div class="form-group">
                <label for="formula">Formuła:</label>
                <select id="formula" name="formula"></select>
            </div><div class="form-group">
                <label for="category">Kategoria:</label>
                <select id="category" name="category"></select>
            </div><div class="form-group">
                <label for="weight">Kategoria wagowa:</label>
                <select id="weight" name="weight"></select>
            </div><div class="form-group">
                <label for="name">Imię i nazwisko:</label>
                <input type="text" id="name" name="name" required>
            </div><div class="form-group">
                <label for="age">Wiek:</label>
                <input type="number" id="age" name="age" required>
            </div>
            <p id="ageError" class="error"></p>
            <button type="submit">Zgłoś zawodnika</button>
        </form>

        <div id="debug">
            <h3>Debug log:</h3>
            <ul id="debugLog"></ul>
        </div>
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