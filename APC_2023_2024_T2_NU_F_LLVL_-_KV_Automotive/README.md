## Getting Started

### Prerequisites

Before you begin, make sure you have the following installed on your system:
NOTE: info_syst doesn't work use backup isntead

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
    composer require jeffgreco13/filament-breezy
    php artisan breezy:install
    composer require bezhansalleh/filament-shield
    php artisan vendor:publish --tag=filament-shield-config
    php artisan shield:install
    composer require barryvdh/laravel-dompdf
    ```

    ```bash
    npm install
    npm run build
    ```
    

2. **Run Migrations:**

    ```bash
    php artisan migrate
    ```

3. **Update User Model:**

- Copy and paste the provided code from `updatedUser.txt` into `app/models/User.php`.

5. **Run the Application:**

    ```bash
    php artisan serve
    ```

    Visit [http://localhost:8000](http://localhost:8000) in your web browser.

# Notes

- Ensure that your environment configuration is set up correctly in the `.env` file.

- **Database Setup:**
  - Delete your current `infosyst.db`.
  - Create a new `infosyst.db` using phpMyAdmin or your preferred database management tool.
  - Import the provided `infosyst.db` into the newly created database.

- For additional configuration options for Laravel and Filament, refer to their respective documentation.
