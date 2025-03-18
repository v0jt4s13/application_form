# Formularz zgłoszeniowy MMA

## Opis projektu
Ten projekt to dynamiczny formularz zgłoszeniowy dla zawodników MMA, umożliwiający rejestrację na zawody. Aplikacja pozwala użytkownikom na wybór formuły (MMA lub K1), kategorii wagowej oraz wieku, a następnie przesyła zgłoszenie do serwera. Zawiera również wbudowany system walidacji oraz możliwość przekierowania do płatności.

## Technologie
- HTML, CSS (nowoczesny, responsywny design)
- JavaScript (obsługa formularza, dynamiczne przełączanie opcji, walidacja danych)
- Fetch API (komunikacja z serwerem)
- PHP (przetwarzanie danych na serwerze)

## Jak uruchomić projekt?
1. **Sklonuj repozytorium**:
   ```bash
   git clone https://github.com/twoje-repozytorium/mma-form.git
   cd mma-form
   ```

2. **Uruchom serwer lokalny (np. w XAMPP lub wbudowany serwer PHP)**:
   ```bash
   php -S localhost:8000
   ```
   Lub, jeśli używasz XAMPP, umieść pliki w folderze `htdocs` i uruchom `Apache`.

3. **Otwórz w przeglądarce**:
   ```
   http://localhost:8000/index.html
   ```
   lub jeśli korzystasz z XAMPP:
   ```
   http://localhost/mma-form/index.html
   ```

4. **Testowanie zgłoszeń**:
   - Wypełnij formularz i kliknij „Zgłoś zawodnika”
   - Dane zostaną przesłane do `save.php`
   - Jeśli zgłoszenie się powiedzie, zostaniesz przekierowany na stronę płatności

## Struktura projektu
```
/mma-form
│── index.html          # Formularz zgłoszeniowy
│── save.php            # Obsługa zgłoszeń po stronie serwera
│── styles.css          # Stylizacja strony
│── script.js           # Obsługa dynamicznych funkcji formularza
│── README.md           # Dokumentacja projektu
```

## Dalsze kroki
- Implementacja bazy danych dla zgłoszeń
- Rozbudowa interfejsu użytkownika
- Integracja z systemem powiadomień e-mail

## Autor
Projekt został stworzony w celu ułatwienia rejestracji zawodników na wydarzenia MMA. Wszelkie sugestie i propozycje poprawek są mile widziane!

