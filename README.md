# Laravel Runmaggedon API

## Wymagania
- PHP 8.1+
- Composer

## Instalacja

composer install

## Uruchomienie

php artisan serve

Aplikacja uruchomi się pod:
http://127.0.0.1:8000

---

## Endpointy

GET /health

Zwraca:
{
"status": "ok",
"time": "ISO_TIMESTAMP"
}

Ten endpoint można przetestować bezpośrednio w przeglądarce:
http://127.0.0.1:8000/health

---

POST /echo

Przyjmuje JSON
Wymaga nagłówka:
Content-Type: application/json

Przykład body:
{
"name": "Test",
"year": 2026
}

Do testowania POST polecam użyć

- Postman (najprostsza opcja)
- curl w terminalu
- narzędzi developerskich (fetch)

Polecam narzędzie:
https://www.postman.com/downloads/

W przypadku wysłania niepoprawnego JSON serwer zwróci:
400 Bad Request
