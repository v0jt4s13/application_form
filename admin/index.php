<?php
  require("../global.php");
  $page_title = "Lista startowa";
  require("../head.php");
?>
  <link async rel="stylesheet" href="<?php echo $global_domain; ?>/static/css/global.css">
    
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

    .filter-form.row1 {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }
    label {
        font-size: 1.7em;
        padding: 0px 7px;
    }
    .filter-form.row2 input[type="text"] {
        width: 4em;
    }
    .filter-form.row2 .form-group.number input {
        width: 2em;
    }
    .filter-form.row2 input {
        height: 2em;
        font-size: 1.7em;
        padding: 0px 7px;
        justify-items: center;
        text-transform: uppercase;
    }
    .filter-form.row2 {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        flex-direction: row;
        padding: 7px;
        background: antiquewhite;
    }
  </style>

</head>
<body class="dark">
<?php
    require("../menu-nav.php");
?>
    <div class="hero-banner">
        <div class="hero-bg-img">
            <img src="<?php echo $global_domain; ?>/static/img/tlofbmma.png">
        </div>
    </div><div class="main-wrap">

        <h2 class="title">Lista startowa</h2>

        <form id="filterForm" method="GET">
          <div class="filter-form row1">
            <div class="form-group">
                <div class="formula-button">
                    <button type="button" class="button-toggle" id="toggleMMA">MMA</button>
                    <button type="button" class="button-toggle" id="toggleK1">K1</button>
                </div>
                <input type="hidden" id="formula" name="formula" value="">
            </div>
          </div><div class="filter-form row2">
            <div class="form-group">
                <label for="category">Kategoria:</label>
                <input type="text" name="category" value="">
            </div>
            <div class="form-group number">
                <label for="ageMin">Wiek od:</label>
                <input type="text" name="ageMin" value="">
                <label for="ageMax">Wiek do:</label>
                <input type="text" name="ageMax" value="">
            </div>
            <div class="form-group number">
                <label for="weightMin">Waga od:</label>
                <input type="text" name="weightMin" value="">
                <label for="weightMax">Waga do:</label>
                <input type="text" name="weightMax" value="">
            </div>
            <!-- <div class="form-group">
                <label for="ageMin">Wiek od:</label>
                <input type="number" step="1" min="12" max="99" name="ageMin" value="">
                <label for="ageMax">Wiek do:</label>
                <input type="number" step="1" min="12" max="99" name="ageMax" value="">
            </div>
            <div class="form-group">
                <label for="weightMin">Waga od:</label>
                <input type="number" step="0.1" name="weightMin" value="">
                <label for="weightMax">Waga do:</label>
                <input type="number" step="0.1" name="weightMax" value="">
            </div> -->
          </div>
            <?php
            /**/
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
                <th>Data zgłoszenia</th>
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
            console.log('formData');
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
                    <td>${entry.sysdate}</td>
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
