# SupportDesk

A Help Desk and Ticket Management System built with **Laravel, Blade, Tailwind CSS, and MySQL**.

SupportDesk aims to simplify customer support operations by providing a centralized platform for managing support tickets, assigning agents, tracking ticket statuses, and communicating with customers.

> **Project Status:** Under Development

## Tech Stack

- **Backend:** Laravel 13, PHP
- **Frontend:** Blade, Tailwind CSS, JavaScript
- **Database:** MySQL
- **Version Control:** Git & GitHub

## User Roles

The system is designed around three user roles:

- **Admin:** Manage users, agents, departments, and support operations.
- **Agent:** Handle assigned tickets and communicate with customers.
- **Customer:** Create support tickets and track their progress.

## Features

### Implemented

- Responsive dashboard UI
- User registration
- Server-side form validation
- Secure password hashing
- Customer role assigned by default

### Planned

- User authentication and logout
- Role-based access control
- Admin, Agent, and Customer dashboards
- Ticket creation and management
- Ticket assignment
- Ticket status tracking
- Comments and conversations
- File attachments
- Email notifications
- Dashboard statistics and reports

## Installation

### Prerequisites

- PHP
- Composer
- MySQL
- Node.js and npm

### Setup

1. Clone the repository:

   ```bash
   git clone https://github.com/YOUR_USERNAME/supportdesk-laravel.git
   ```

2. Navigate to the project directory:

   ```bash
   cd supportdesk-laravel
   ```

3. Install PHP dependencies:

   ```bash
   composer install
   ```

4. Install frontend dependencies:

   ```bash
   npm install
   ```

5. Create your environment file:

   ```bash
   cp .env.example .env
   ```

6. Generate the application key:

   ```bash
   php artisan key:generate
   ```

7. Configure your database credentials in `.env`.

8. Run database migrations:

   ```bash
   php artisan migrate
   ```

9. Start the development servers:

   ```bash
   php artisan serve
   ```

   In another terminal:

   ```bash
   npm run dev
   ```

## Project Structure

```text
app/
  Http/
    Controllers/
resources/
  views/
    layouts/
    auth/
    components/
    dashboard/
  css/
  js/
database/
  migrations/
  seeders/
routes/
  web.php
```



