# Laravel Chat Realtime Example

This project demonstrates a simple Laravel chat/event broadcasting setup using Laravel Reverb and Vite.

## Requirements
- PHP 8.2+
- Composer
- Node.js & npm
- SQLite (or your preferred DB)

## Setup Instructions

### 1. Clone the Repository
```sh
git clone <your-repo-url>
cd laravel
```

### 2. Install PHP Dependencies
```sh
composer install
```

### 3. Install Node Dependencies
```sh
npm install
```

### 4. Copy and Configure Environment
```sh
cp .env.example .env
```
- Edit `.env` and set your `APP_KEY`, database, and broadcasting settings as needed.
- Make sure these are set:
  ```env
  BROADCAST_CONNECTION=reverb
  QUEUE_CONNECTION=sync
  REVERB_APP_ID=973092
  REVERB_APP_KEY=your_key
  REVERB_APP_SECRET=your_secret
  REVERB_HOST="localhost"
  REVERB_PORT=8080
  REVERB_SCHEME=http
  VITE_REVERB_APP_KEY="${REVERB_APP_KEY}"
  VITE_REVERB_HOST="${REVERB_HOST}"
  VITE_REVERB_PORT="${REVERB_PORT}"
  VITE_REVERB_SCHEME="${REVERB_SCHEME}"
  ```

### 5. Generate Application Key
```sh
php artisan key:generate
```

### 6. Run Migrations
```sh
php artisan migrate
```

### 7. Build Frontend Assets
```sh
npm run build
```

### 8. Start Laravel Reverb (WebSocket) Server
```sh
php artisan reverb:start
```

### 9. Start Laravel Development Server
```sh
php artisan serve
```

### 10. Open the App
Go to [http://localhost:8000](http://localhost:8000) in your browser.

### 11. Broadcast a Message
In a new terminal, run:
```sh
php artisan send --m="Hello from command"
```
You should see the message appear in the browser console and on the page.

---

## Troubleshooting
- Make sure the Reverb server is running before broadcasting events.
- If using Brave or privacy browsers, disable shields for localhost.
- Check `.env` and config for correct WebSocket and broadcast settings.

---

## License
MIT
