Laravel Project Setup for Assignment
Below is the complete setup for a Laravel project that meets the assignment requirements. The project includes Blade templates, migrations, form submission with file upload, logging, cookie handling, and a README with a placeholder for the video link. Follow the instructions to set up the repository and push to GitHub.

## Project Structure
```
laravel-project/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── ContactController.php
│   │   └── Requests/
│   │       └── ContactFormRequest.php
│   └── Models/
        ├── Contact.php
│       └── Submission.php
├── database/
│   ├── migrations/
│   │   ├── 2025_08_26_000001_create_users_table.php
        ├── 2025_08_26_000001_create_cache_table.php
        ├── 2025_08_26_000001_create_contacts_table.php
        ├── 2025_08_26_000001_create_jobs_table.php
        ├── 2025_08_26_000001_create_categories_table.php
        ├── 2025_08_26_000001_create_customers_table.php
        ├── 2025_08_26_000001_create_products_table.php
        ├── 2025_08_26_000001_create_invoices_table.php
        ├── 2025_08_26_000001_create_products_table.php
        ├── 2025_08_26_000001_create_contacts_table.php
        ├── 2025_08_26_000001_create_submission_table.php
│   │   └── 2025_08_26_000002_create_invoice_product_table.php
│ 
├── public/
│   ├── css/
│   │   └── app.css
│   ├── js/
│   │   └── app.js
│   └── storage/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   ├── partials/
│   │   │   ├── header.blade.php
│   │   │   └── footer.blade.php
│   │   ├── contact/
│   │   │   ├── form.blade.php
│   │   │   └── confirmation.blade.php
        ├── contact.blade.php
        ├── index.blade.php
        ├── contact.blade.php
        ├── projects.blade.php
        ├── resume.blade.php
├── routes/
│   └── web.php
├── .gitignore
├── composer.json
├── package.json
├── README.md
```
Setup Instructions

Create a Laravel Project
composer create-project laravel/laravel laravel-project
cd laravel-project


Initialize Git Repository
git init
git add .
git commit -m "Initial Laravel project setup"


Create GitHub Repository

Go to GitHub, create a new repository (e.g., laravel-assignment).
Link the local repository:git remote add origin https://github.com/your-username/laravel-assignment.git
git branch -M main
git push -u origin main




Update .gitignoreEnsure .gitignore excludes unnecessary files:
/node_modules
/public/storage
/vendor
/.vscode
/.idea
/storage/*.key
.env
Homestead.yaml
Homestead.json
npm-debug.log
yarn-error.log



# Laravel Assignment

This is a Laravel project implementing a contact form with file upload, database migrations, and Blade templating.

## Setup
1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/laravel-assignment.git
   cd laravel-assignment
   ```
2. Install dependencies:
   ```bash
   composer install
   npm install
   npm run build
   ```
3. Set up environment:
   - Copy `.env.example` to `.env`
   - Generate app key: `php artisan key:generate`
   - Configure database in `.env`
4. Run migrations:
   ```bash
   php artisan migrate
   ```
5. Create storage link:
   ```bash
   php artisan storage:link
   ```
6. Serve the application:
   ```bash
   php artisan serve
   ```

## Features
- **Blade Templating**: Converted Bootstrap template to Blade with master layout, header, and footer.
- **Database**: Migrations for `contacts` and `submissions` tables, with SQL dump (`project.sql`).
- **Form Submission**: Contact form with validation, logging, and success message.
- **File Upload**: Supports JPEG, PNG, DOC, PDF, ZIP; stores files in `storage/app/public/uploads`.
- **Cookie**: Sets `file_uploaded=true` cookie on successful file upload.

## Project Presentation
Watch the project presentation video (3–3.5 minutes) explaining all functionalities:
[Google Drive Video Link](https://drive.google.com/your-video-link)

## GitHub Repository
[https://github.com/your-username/laravel-assignment](https://github.com/your-username/laravel-assignment)