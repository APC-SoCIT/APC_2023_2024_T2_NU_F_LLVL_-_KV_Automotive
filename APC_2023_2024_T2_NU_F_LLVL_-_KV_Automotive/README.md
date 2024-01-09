# Information Management System Project Setup Guide

This guide provides step-by-step instructions for setting up the Information Management System project.

## Getting Started

### Prerequisites

Before you begin, make sure you have the following installed on your system:

- [PHP](https://www.php.net/) (Recommended version: [Your PHP Version])
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [NPM](https://www.npmjs.com/)

### Installation Steps

1. **Clone the Repository:**

    ```bash
    git clone [repository_url]
    cd [repository_directory]
    ```

2. **Install Dependencies:**

    ```bash
    composer install
    composer require filament/filament:"^3.1" -W
    ```

    ```bash
    composer require laravel/jetstream
    php artisan jetstream:install livewire
    ```

    ```bash
    npm install
    npm run build
    ```

3. **Run Migrations:**

    ```bash
    php artisan migrate
    ```

4. **Update User Model:**

    Copy and paste the provided code from `updatedUser.txt` into `app/models/User.php`.

5. **Run the Application:**

    ```bash
    php artisan serve
    ```

    Visit [http://localhost:8000](http://localhost:8000) in your web browser.

## User Model Customization

- Customize roles and permissions in `app/models/User.php`.

## Notes

- Ensure that your environment configuration is set up correctly in the `.env` file.
- For additional configuration options for Laravel and Filament, refer to their respective documentation.

## Contributing

If you would like to contribute to the Information Management System project, please follow our [contribution guidelines](CONTRIBUTING.md).

## License

This project is licensed under the [Your License Name] License - see the [LICENSE.md](LICENSE.md) file for details.
