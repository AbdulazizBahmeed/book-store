# 📚 Book Borrowing System  

Welcome to the **Book Borrowing System**, a Laravel-based project designed to streamline book management and borrowing processes. This system features two main user flows: **Admin** and **User**, each with unique functionalities tailored to their needs.  

---

## 🌟 Features  

### User Flow  
- **Browse Books**: Users can preview all available books on the homepage.  
- **Borrow Books**: Borrow books by selecting a date range.  
- **View Borrowing History**: Check past and ongoing borrowing operations.  

### Admin Flow  
- **Dashboard Access**: Exclusive dashboard for managing system operations.  
- **User Management**: Manage user information and permissions.  
- **Category Management**: Organize books into categories.  
- **Book Management**: Add, update, or remove books from the system.  

---

## 🛠️ Technologies Used  
- **Backend**: Laravel framework  
- **Templating**: Blade templating engine  
- **Styling**: MDB package (built on Bootstrap)  

---

## 📋 Requirements  
- PHP 8.0 or higher  
- Composer  
- A database management system (e.g., MySQL, PostgreSQL)  

---

## 🚀 Getting Started  

1. **Clone the Project**  
   ```
   git clone <repository-url>
   cd <project-directory>
   ```
2. **Setup Environment**
Copy the .env.example file to .env:

- For Linux/Mac:
```
cp .env.example .env
```
- For Windows:
```
cp .env.example .env
```

3. **install php packages**
```
coposer install
```

4. **Generate a new project key**
```
php artisan key:generate
```
5. **Configure Database**
- Edit the .env file with your database credentials or use SQLite (not recommended).
- Refresh configuration:
```
php artisan optimize:clear
```

6. **Run Migrations with Seeder**
```
php artisan migrate:fresh --seed
```

7. **Link the storage folder to the public directory for static files:**
```
php artisan storage:link
```

8. **Start the Server**
- Run the local development server:
```
php artisan serve
```

### Open the project in your browser:
http://localhost:8000

🎉 Enjoy the System!