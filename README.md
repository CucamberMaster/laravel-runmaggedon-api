# Laravel Runmaggedon API

- GET /health
- POST /echo

---

## Wymagania

- PHP 8.1+
- Composer

---

## Instalacja

1. Wejdź do katalogu projektu:

cd laravel-runmaggedon-api

2. Zainstaluj zależności:

composer install

3. Skopiuj plik .env:

cp .env.example .env

4. Wygeneruj klucz aplikacji:

php artisan key:generate

---

## Uruchomienie

php artisan serve

Aplikacja będzie dostępna pod:

http://127.0.0.1:8000

---

## Endpointy

### GET /health

Zwraca aktualny status aplikacji oraz czas w formacie ISO.

Przykładowa odpowiedź:

{
  "status": "ok",
  "time": "2026-02-18T12:00:00.000000Z"
}

Można przetestować bezpośrednio w przeglądarce:
http://127.0.0.1:8000/health

---

### POST /echo

Przyjmuje JSON i zwraca go bez zmian.

Wymaga nagłówka:
Content-Type: application/json

Przykład body:

{
  "name": "Runmaggedon",
  "year": 2026
}

---

## Jak testować endpoint POST?

- Postman (https://www.postman.com/downloads/)
- curl w terminalu

Przykład curl:

curl -X POST http://127.0.0.1:8000/echo \
-H "Content-Type: application/json" \
-d '{"test":"ok"}'

---

## Obsługa błędów

Jeśli zostanie wysłany niepoprawny JSON,
serwer zwróci odpowiedź:

400 Bad Request
