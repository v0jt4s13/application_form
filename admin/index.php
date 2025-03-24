<?php
  require("../global.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista startowa</title>
    <link async rel="stylesheet" href="<?php echo $global_domain; ?>/static/css/global.css">
    <link async rel="stylesheet" href="<?php echo $global_domain; ?>/static/css/style.css">
    <style>
    button#toggleMMA, 
    button#toggleK1 {
        font-size: 1.7em;
        padding: 7px;
    }
    .formula-button {
        /* background: aqua; */
        padding: 7px;
        margin: 0px 10px 10px 10px;
    }
    .button-toggle.active {
        background: white;
        color: black;
        border: 2px solid black;
        box-shadow: 0 0 10px rgba(255,255,255,0.6);
        text-decoration: underline;
    }
    #resultsTable {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        font-size: 16px;
        background-color: #e0dede;
        color: #333333;
        border: 1px solid #333;
        border-radius: 6px;
        overflow: hidden;
    }

    #resultsTable thead {
        background-color: #007bff;
        color: #ffffff;
        font-weight: bold;
    }

    #resultsTable th,
    #resultsTable td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #333;
    }

    #resultsTable tbody tr:nth-child(even) {
        background-color: #e0dede;
    }

    #resultsTable tbody tr:nth-child(odd) {
        background-color: #d2d7e5;
    }

    #resultsTable tbody tr:hover {
        background-color: #e1d1d1;
        transition: background-color 0.3s ease;
    }

    </style>
    <style>
        /* 
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
            justify-content: space-between;
            margin-bottom: 10px;
            margin-left: 20px;
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
            max-width: 50px;
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
        } */
    </style>
</head>
<body class="dark">
    <div class="hero-banner">
        <div class="hero-bg-img">
            <img src="<?php echo $global_domain; ?>/static/img/tlofbmma.png">
        </div>
    </div><div class="main-wrap">

        <h2 class="title">Lista startowa</h2>

        <form id="filterForm" method="GET">
            <div class="form-group">
                <div class="formula-button">
                    <button type="button" class="button-toggle" id="toggleMMA">MMA</button>
                    <button type="button" class="button-toggle" id="toggleK1">K1</button>
                </div>
                <input type="hidden" id="formula" name="formula" value="">
            </div>
            <?php
            /* <label for="formula">Formuła:</label>
            <div>
                <button type="button" class="button-toggle" id="toggleMMA">MMA</button>
                <button type="button" class="button-toggle" id="toggleK1">K1</button>
            </div>
            <input type="hidden" name="formula[]" value="MMA" <?= in_array("MMA", $formulaFilters) ? 'checked' : '' ?>> MMA
            <input type="hidden" name="formula[]" value="K1" <?= in_array("K1", $formulaFilters) ? 'checked' : '' ?>> K1 -->
            
            
            <div class="form-group">
                <label for="category">Kategoria:</label>
                <input type="text" name="category" value="<?= htmlspecialchars($categoryFilter) ?>">
            </div>
            <div class="form-group">
                <label for="ageMin">Wiek od:</label>
                <input type="number" step="1" min="12" max="99" name="ageMin" value="<?= htmlspecialchars($ageMin) ?>">
            </div>
            <div class="form-group">
                <label for="ageMax">Wiek do:</label>
                <input type="number" step="1" min="12" max="99" name="ageMax" value="<?= htmlspecialchars($ageMax) ?>">
            </div>
            <div class="form-group">
                <label for="weightMin">Waga od:</label>
                <input type="number" step="0.1" name="weightMin" value="<?= htmlspecialchars($weightMin) ?>">
            </div>
            <div class="form-group">
                <label for="weightMax">Waga do:</label>
                <input type="number" step="0.1" name="weightMax" value="<?= htmlspecialchars($weightMax) ?>">
            </div>
            */
            ?>
        </form>

    <table id="resultsTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Formuła</th>
                <th>Kategoria</th>
                <th>Waga</th>
                <th>Wiek</th>
                <th>Klub</th>
                <th>Email</th>
                <th>Telefon</th>
            </tr>
        </thead>
        <tbody>
            <tr><td colspan="6" style="text-align: center;">Wczytywanie danych...</td></tr>
        </tbody>
    </table>

    <script>
        function fetchFilteredData() {
            const formData = new FormData(document.getElementById("filterForm"));
            if (!formData.get("formula")) {
                formData.delete("formula");
            }
            console.log(formData);
            fetch("lista_startowa.json.php", {
                method: "POST",
                body: formData
            })
            .then(response => {
                console.log("Status odpowiedzi:", response.status);
                console.log("Content-Type:", response.headers.get("content-type"));

                if (!response.ok) {
                    throw new Error("Błąd HTTP: " + response.status);
                }
                return response.json();
            })
            .then(data => {
                console.log("Otrzymane dane:", data);
                if (!data.success) {
                    updateTable([]);
                    return;
                }
                updateTable(data.data);
            })
            .catch(error => {
                console.error("Błąd podczas pobierania danych:", error);
                updateTable([]);
            });
        }

        function updateTable(data) {
            const tableBody = document.querySelector("#resultsTable tbody");
            tableBody.innerHTML = "";

            if (!Array.isArray(data) || data.length === 0) {
                tableBody.innerHTML = '<tr><td colspan="6" style="text-align: center;">Brak wyników</td></tr>';
                return;
            }

            data.forEach((entry, index) => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${entry.name}</td>
                    <td>${entry.surname}</td>
                    <td>${entry.formula}</td>
                    <td>${entry.category}</td>
                    <td>${entry.weight}</td>
                    <td>${entry.age}</td>
                    <td>${entry.club}</td>
                    <td>${entry.email}</td>
                    <td>${entry.phone}</td>
                `;
                tableBody.appendChild(row);
            });
        }
        
        document.querySelectorAll("#filterForm input, #filterForm select, #filterForm button").forEach(input => {
            input.addEventListener("change", fetchFilteredData);
            input.addEventListener("blur", fetchFilteredData);
        });
        
        const buttonMMA = document.getElementById('toggleMMA');
        const buttonK1 = document.getElementById('toggleK1');
        const formulaInput = document.getElementById('formula');

        function toggleFormula(selected) {
            if (selected === 'MMA') {
                buttonMMA.classList.add("active");
                buttonK1.classList.remove("active");
                formulaInput.value = "MMA";
            } else if (selected === 'K1') {
                buttonK1.classList.add("active");
                buttonMMA.classList.remove("active");
                formulaInput.value = "K1";
            } else {
                buttonK1.classList.remove("active");
                buttonMMA.classList.remove("active");
                formulaInput.value = "";
            }

            fetchFilteredData();
        }

        // Podłączenie kliknięć
        buttonMMA.addEventListener("click", () => toggleFormula("MMA"));
        buttonK1.addEventListener("click", () => toggleFormula("K1"));

        // ⛔ Nie ustawiamy domyślnie filtra, domyślnie pokazujemy wszystko
        window.onload = () => {
            fetchFilteredData();
        };

    </script>
</body>
</html>
