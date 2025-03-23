<?php
  require("global.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista startowa</title>
    <link async rel="stylesheet" href="<?php echo $global_domain; ?>/static/css/global.css">
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
        }
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
                <label>Formuła:</label>
                <div style="width:calc(100% - 100px);min-width:200px;">
                    <button type="button" class="button-toggle" id="toggleMMA">MMA</button>
                    <button type="button" class="button-toggle" id="toggleK1">K1</button>
                </div>
                <input type="hidden" id="formulaMMA" name="formula[]" value="MMA">
                <input type="hidden" id="formulaK1" name="formula[]" value="K1">
            </div>
            <!-- <label for="formula">Formuła:</label>
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
        </form>

    <table id="resultsTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Imię i nazwisko</th>
                <th>Formuła</th>
                <th>Kategoria</th>
                <th>Waga</th>
                <th>Wiek</th>
            </tr>
        </thead>
        <tbody>
            <tr><td colspan="6" style="text-align: center;">Wczytywanie danych...</td></tr>
        </tbody>
    </table>

    <script>
        function fetchFilteredData() {
            const formData = new FormData(document.getElementById("filterForm"));

            fetch("lista_startowa.json.php", {
                method: "POST",
                body: formData
            })
            .then(response => {
                // console.log("Status odpowiedzi:", response.status);
                // console.log("Content-Type:", response.headers.get("content-type"));

                if (!response.ok) {
                    throw new Error("Błąd HTTP: " + response.status);
                }
                return response.json();
            })
            .then(data => {
                // console.log("Otrzymane dane:", data);
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
                    <td>${entry.formula}</td>
                    <td>${entry.category}</td>
                    <td>${entry.weight}</td>
                    <td>${entry.age}</td>
                `;
                tableBody.appendChild(row);
            });
        }

        document.querySelectorAll("#filterForm input, #filterForm select").forEach(input => {
            input.addEventListener("change", fetchFilteredData);
            input.addEventListener("blur", fetchFilteredData);
        });

        window.onload = fetchFilteredData;
    </script>
</body>
</html>
