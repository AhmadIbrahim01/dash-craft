# DashCraft

## Table of Contents

-   [Introduction](#introduction)
-   [Project Structure](#project-structure)
-   [Installation](#installation)
-   [Usage](#usage)
-   [Configuration](#configuration)
-   [Technologies Used](#technologies-used)
-   [Contributing](#contributing)

## Introduction

DashCraft is a dynamic user-friendly dashboard featuring a variety of useful widgets like weather, daily news, etc., allowing users to customize and personalize their experience effortlessly.

## Project Structure

```
project-root/
│-- app/               # Application logic
│-- bootstrap/         # Bootstrapping files
│-- config/            # Configuration files
│-- database/          # Database migrations and seeders
│-- public/            # Public assets
│-- resources/         # Views and Livewire components
│-- routes/            # Route definitions
│-- storage/           # Storage files
│-- tests/             # Automated tests
│-- .env.example       # Environment variables example
│-- composer.json      # PHP dependencies
│-- README.md          # Project documentation
```

## Installation

```sh
# Clone the repository
git clone https://github.com/AhmadIbrahim01/dash-craft.git

# Navigate to the project directory
cd dash-craft

# Install PHP dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database in .env file and run migrations
php artisan migrate

# Install Node dependencies
npm install && npm run dev

# Start the development server
php artisan serve

# Note: you should also install livewire
```

## Usage

```sh
# Start Laravel development server
php artisan serve
```

## Configuration

```sh
# Create a .env file
OPENWEATHERMAP_API_KEY=your_api_key_here

NEWS_API_KEY=your_api_key_here

SPOTIFY_CLIENT_ID=your_spotify_client_id
SPOTIFY_CLIENT_SECRET=your_spotify_client_secret
SPOTIFY_API_URL=https://api.spotify.com/v1
```

## Technologies Used

-   Laravel
-   Livewire
-   PHP
-   Chart.js

## Contributing

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit your changes (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a Pull Request.
