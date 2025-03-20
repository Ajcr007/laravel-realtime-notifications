# Laravel Real-Time Notifications with Reverb

## Description
This Laravel 11 project demonstrates real-time notifications using WebSockets with Reverb. When a user creates a task with a description, the admin receives an instant notification.

## Features
- Real-time notifications via WebSockets.
- WebSocket implementation using **Reverb**.
- Task creation with descriptions.
- Laravel broadcasting and event handling.
- Redis queue support for scalability.
- Bootstrap-based authentication system.

## Installation

### Prerequisites
- PHP 8.2 or later
- Composer
- Laravel 11
- Node.js & npm
- Redis (for broadcasting)
- Reverb (for WebSockets)
- Pusher (if applicable)

### Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/YOUR_GITHUB_USERNAME/laravel-realtime-notifications.git
   cd laravel-realtime-notifications
   ```

2. Create a new Laravel project (if not cloned):
   ```bash
   composer create-project laravel/laravel laravel-realtime-notifications
   ```

3. Navigate to the project directory:
   ```bash
   cd laravel-realtime-notifications
   ```

4. Install dependencies:
   ```bash
   composer install
   npm install
   ```

5. Run database migrations:
   ```bash
   php artisan migrate
   ```

6. Install Laravel UI and Bootstrap authentication:
   ```bash
   composer require laravel/ui
   php artisan ui bootstrap --auth
   npm install
   npm run build
   ```

7. Set up environment variables:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

8. Configure WebSockets and Broadcasting in `.env`:
   ```ini
   BROADCAST_DRIVER=redis
   QUEUE_CONNECTION=redis
   ````

9. Install Pusher SDK (if using Pusher instead of Reverb):
   ```bash
   composer require pusher/pusher-php-server
   ```

10. Update `.env` with Pusher details:
   ```ini
   PUSHER_APP_ID=your-app-id
   PUSHER_APP_KEY=your-app-key
   PUSHER_APP_SECRET=your-app-secret
   PUSHER_HOST=
   PUSHER_PORT=443
   PUSHER_SCHEME=https
   PUSHER_APP_CLUSTER=mt1
   ```

11. Start the Reverb WebSocket server:
   ```bash
   php artisan reverb:start
   ```

12. Serve the Laravel application:
   ```bash
   php artisan serve
   npm run dev
   ```

## Technologies Used
- **Laravel 11**  
- **Reverb** for WebSockets  
- **Redis** for broadcasting  
- **Pusher** for real-time notifications  
- **Laravel Echo** for client-side real-time updates  
- **Bootstrap** for authentication UI  

## References
- [Laravel 11 Real-Time Notifications Using Pusher](https://www.itsolutionstuff.com/post/laravel-11-real-time-notifications-using-pusher-exampleexample.html)

## Contributing
Pull requests are welcome. For major changes, please open an issue first.

## License
[MIT](LICENSE)

