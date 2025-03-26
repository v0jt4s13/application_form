<?php
file_put_contents(__DIR__ . "/debug_post.log", "index.php działa\n", FILE_APPEND);
  require("../global.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Time Of Masters</title>
  <link rel="stylesheet" href="<?php echo $global_domain; ?>/static/css/style.css">
  <script src="<?php echo $global_domain; ?>/static/js/script.js" defer></script>

  <style>
        body {
            transition: background 0.5s ease-in-out, color 0.5s ease-in-out, font-family 0.5s ease-in-out;
            font-size: 18px;
            text-align: center;
        }
        .btn-container {
            position: fixed;
            top: 120px;
            left: -10px;
            display: flex;
            flex-direction: row;
            gap: 10px;
            width: 100%;
            z-index: 111;
            justify-content: flex-end;
        }
        .btn-style {
            padding: 5px;
            font-size: 1em;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            border: none;
            border-radius: 5px;
            width: min-content;
            text-align: center;
        }
        .btn-style:hover {
            background: rgba(0, 0, 0, 1);
        }



        h2.title {
            text-align: center;
        }
        h2 {
            text-align: center;
        }
        /* form {
            min-height: 250px;
            flex-wrap: wrap;
            flex-direction: column;
            padding: 20px;
            background: whitesmoke;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        } */
        .form-group {
            display: flex;
            align-items: center;
            margin: 10px 0px;
            margin-right: 40px;
            width: 100%;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: flex-start;
            justify-content: flex-start;
        }

        .form-group label {
            flex: 1;
            padding-right: 10px;
            max-width: 160px;
            white-space: nowrap;
            text-align: end;
            width: 130px;
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
        form.formula {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-content: flex-start;
            justify-content: space-between;
            align-items: flex-start;
        }
        #debug {
            background: repeating-linear-gradient(178deg, #0c2103, transparent 540px);
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
            color: #eee;
            font-size: 0.6em;
            width: -webkit-fill-available;
        }
        .error {
            color: red;
        }
        button {
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
            width: 100%;
        }
        button:hover {
            background: #0056b3;
        }
        .mmaForm {
            min-height: 250px;
            flex-wrap: wrap;
            flex-direction: column;
            padding: 20px;
            background: whitesmoke;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        }

        @media screen and (max-width: 680px) {
            div.mmaForm {
                /* width: 300px; */
                /* background: red; */
                /* width: 50%; */
                /* min-width: 450px; */
                /* display: flex; */
            }
            .form-group {
                display: flex;
                font-size: 1.2em;
                flex-direction: column;
                align-content: center;
                align-items: flex-start;
            }
            .form-group label {
                display: block;
                width: 100%;
                max-width: 100%;
                padding: 7px;
                text-align: left;
                /* background: blue; */
            }
        }


            /* flex: 1;
            padding-right: 10px;
            max-width: 160px;
            white-space: nowrap;
            text-align: end;
            width: 130px; */
  </style>
</head>
<body>
  <?php
    require("../header.php");
  ?>
    <div class="hero" style="background-image: url('<?php echo $global_domain; ?>/static/img/thewinneris.png');">
      <div class="hero-content">
        <?php if (1==1) { ?>
            <div class="hero-bg-img">
                <a href="zgloszenie-udzialu.php"><img src="<?php echo $global_domain; ?>/static/img/tlofbmma.png"></a>
            </div>
        <?php } else { ?>
            <h1></h1>
            <p></p>
        <?php } ?>
      </div>
    </div>
    <div class="btn-container">
        <button class="btn-style" onclick="changeBackground()">Zmień tło</button>
        <button class="btn-style" onclick="changeFontColor()">Zmień kolor tekstu</button>
        <button class="btn-style" onclick="changeFontStyle()">Zmień czcionkę</button>
    </div>

    <div class="main-wrap">
        
        <h2>Formularz zgłoszeniowy</h2>
        <form id="mmaForm">
          <div class="mmaForm">
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
                <label for="name">Imię:</label>
                <input type="text" id="name" name="name" required value="W">
            </div><div class="form-group">
                <label for="name">Nazwisko:</label>
                <input type="text" id="surname" name="surname" required value="W">
            </div><div class="form-group">
                <label for="age">Wiek:</label>
                <input type="number" id="age" name="age" required value="12">
            </div><div class="form-group">
                <label for="club">Nazwa klubu:</label>
                <input type="text" id="club" name="club" list="clubs" value="kubusie">
                <datalist id="clubs">
                    <option value="niezrzeszony">
                </datalist>
            </div><div class="form-group">
                <label for="email">Adres e-mail:</label>
                <input type="email" id="email" name="email" required value="t@marzec.eu">
            </div><div class="form-group">
                <label for="phone">Numer telefonu:</label>
                <input type="tel" id="phone" name="phone" placeholder="np. 501234567" required value="784151737">
            </div>
            Kwota opłaty: <input type="text" name="amount" value="10000">
            <p id="ageError" class="error"></p>
            <button type="submit">Zgłoś zawodnika</button>
          </div>
        </form>

        <div id="debug">
            <h3>Debug log:</h3>
            <ul id="debugLog"></ul>
            
            <script>
                const backgrounds = [
                    "background-color: #f9f470;",
                    "background: repeating-radial-gradient(#44491a, #0d3110 130px);",
                    "background: linear-gradient(179deg, #44491a, #0d3110);",
                    "background: linear-gradient(268deg, #0c2103, transparent 620px);"
                ];

                const fontColors = ["#ff5733", "#33ff57", "#3357ff", "#f1c40f", "#8e44ad"];
                const fontStyles = ["Arial, sans-serif", "Courier New, monospace", "Georgia, serif", "Times New Roman, serif", "Verdana, sans-serif"];

                let bgIndex = 0;
                let colorIndex = 0;
                let fontIndex = 0;

                function changeBackground() {
                    document.body.style = backgrounds[bgIndex];
                    bgIndex = (bgIndex + 1) % backgrounds.length;
                }

                function changeFontColor() {
                    document.body.style.color = fontColors[colorIndex];
                    colorIndex = (colorIndex + 1) % fontColors.length;
                }

                function changeFontStyle() {
                    document.body.style.fontFamily = fontStyles[fontIndex];
                    fontIndex = (fontIndex + 1) % fontStyles.length;
                }
            </script>
        </div>
    </div>

    <?php
    require("../footer.php");
    ?>

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
                logDebug("save.php -> Nagłówek Content-Type: " + response.headers.get("content-type"));
                if (!response.ok) {
                    throw new Error("HTTP error! Status: " + response.status);
                }
                return response.json();
            })
            .then(data => {
                logDebug("Otrzymana odpowiedź: " + JSON.stringify(data));

                if (typeof data !== "object" || data === null) {
                    throw new Error("Odpowiedź nie jest poprawnym JSON-em.");
                }

                if (data.success) {
                    logDebug("Zapisano zgłoszenie, przygotowanie do płatności...");
                    logDebug("name: "+formData.get("name")+" amount: "+formData.get("amount")+" email: "+formData.get("email"));

fetch("create_order.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
        sessionId: data.sessionId,
        name: formData.get("name"),
        amount: formData.get("amount"),
        email: formData.get("email")
    })
})
.then(response_co => {
    console.log("Nagłówki:", response_co.headers.get("content-type"));
    return response_co.text(); // pobierz jako tekst
})
.then(text => {
    console.log("Surowa odpowiedź:", text);
    try {
        let data_co = JSON.parse(text);
        console.log("data =", data_co);
        if (data_co.status === "success") {
            window.location.href = data_co.redirect;
        } else {
            throw new Error("Błąd przy tworzeniu płatności: " + (data_co.message || "Nieznany błąd"));
        }
    } catch (e) {
        throw new Error("Błąd parsowania JSON: " + e.message);
    }
})
.catch(error_co => {
    console.error("Błąd podczas przetwarzania:", error_co.message);
    logDebug("Błąd podczas przetwarzania: " + error_co.message);
    alert("Błąd: " + error_co.message);
});


                    // fetch("create_order.php", {
                    //     method: "POST",
                    //     headers: { "Content-Type": "application/json" },
                    //     body: JSON.stringify({
                    //         sessionId: data.sessionId,
                    //         name: formData.get("name"),
                    //         amount: formData.get("amount"), // Przykładowa kwota w groszach (100 PLN)
                    //         email: formData.get("email")
                    //     })
                    // })
                    // .then(response_co => {
                    //     console.log('response_co');
                    //     console.log(response_co);
                    //     console.log('response_co.ok', response_co.ok);
                        
                    //     logDebug("create_order.php -> Nagłówek Content-Type: " + response_co.headers.get("content-type"));
                    //     if (!response_co.ok) {
                    //         throw new Error("HTTP error! Status: " + response_co.status);
                    //     }
                    //     return response_co.json();
                    // })
                    // .then(data_co => {
                    //     console.log("data =", data_co);
                    //     logDebug("Odpowiedź JSON:", data_co);
                        
                    //     if (data_co.status === "success") {
                    //         logDebug("Przekierowanie do PayU: " + data_co.redirect);
                    //         window.location.href = data_co.redirect;
                    //     } else {
                    //         throw new Error("Błąd przy tworzeniu płatności: " + (data_co.message || "Nieznany błąd"));
                    //     }
                    // })
                    // .catch(error_co => {
                    //     logDebug("Błąd podczas przetwarzania: " + error_co.message);
                    //     alert("Błąd: " + error_co.message);
                    // });


                } else {
                    throw new Error(data.error || "Nieznany błąd zapisu zgłoszenia.");
                }
            })
            .catch(error => {
                logDebug("Błąd podczas przetwarzania: " + error.message);
                alert("Błąd: " + error.message);
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