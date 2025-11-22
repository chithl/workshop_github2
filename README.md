# Coffee Shop Admin Template

A Bootstrap 5 admin template for managing a coffee shop, built with PHP following the MVC (Model-View-Controller) pattern.

## Features

- 🎨 **Modern UI**: Built with Bootstrap 5 and Bootstrap Icons
- 📊 **Dashboard**: Statistical charts using Chart.js
- 📝 **Product Management**: List, create, edit, and delete products
- 📋 **Forms**: Comprehensive form examples with validation
- 🔐 **Authentication**: Login and registration pages
- 📱 **Responsive Design**: Mobile-friendly interface
- 🏗️ **MVC Architecture**: Organized code structure for PHP integration

## Pages Included

1. **Dashboard** (`index.php?page=dashboard`)
   - Sales overview chart
   - Product category chart
   - Statistics cards
   - Recent orders table

2. **Products List** (`index.php?page=products`)
   - Product table with filters
   - Search functionality
   - CRUD operations
   - Pagination

3. **Forms** (`index.php?page=forms`)
   - Basic form inputs
   - Advanced form controls
   - Product information form
   - Form validation examples

4. **Login** (`index.php?page=login`)
   - Clean login interface
   - Social login options

5. **Register** (`index.php?page=register`)
   - Registration form with validation
   - Feature highlights

## Project Structure

```
workshop_github2/
├── app/
│   ├── controllers/          # Controller classes
│   │   └── ProductController.php
│   ├── models/               # Model classes
│   │   ├── Database.php
│   │   └── Product.php
│   └── views/                # View templates
│       ├── layouts/          # Layout components
│       │   ├── header.php
│       │   ├── navbar.php
│       │   ├── sidebar.php
│       │   └── footer.php
│       ├── dashboard/        # Dashboard pages
│       │   └── index.php
│       ├── products/         # Product pages
│       │   └── index.php
│       ├── forms/            # Form pages
│       │   └── index.php
│       └── auth/             # Authentication pages
│           ├── login.php
│           └── register.php
├── config/
│   └── config.php            # Configuration file
├── public/
│   ├── css/
│   │   └── style.css         # Custom styles
│   ├── js/
│   │   └── script.js         # Custom JavaScript
│   └── images/               # Image assets
├── index.php                 # Main entry point
├── .gitignore
└── README.md
```

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/chithl/workshop_github2.git
   cd workshop_github2
   ```

2. **Configure the application**
   - Edit `config/config.php` to set your database credentials and base URL
   ```php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'coffee_shop');
   define('DB_USER', 'your_username');
   define('DB_PASS', 'your_password');
   define('BASE_URL', 'http://localhost/workshop_github2/');
   ```

3. **Set up the database** (Optional - for full functionality)
   ```sql
   CREATE DATABASE coffee_shop;
   
   USE coffee_shop;
   
   CREATE TABLE products (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       category VARCHAR(100) NOT NULL,
       price DECIMAL(10, 2) NOT NULL,
       stock INT NOT NULL DEFAULT 0,
       status VARCHAR(50) NOT NULL DEFAULT 'available',
       image VARCHAR(255),
       description TEXT,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
       updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   );
   ```

4. **Start your web server**
   - Using PHP built-in server:
     ```bash
     php -S localhost:8000
     ```
   - Or use XAMPP/WAMP/MAMP and access through `http://localhost/workshop_github2/`

5. **Access the application**
   - Open your browser and navigate to `http://localhost:8000` or your configured URL

## Usage

### Navigation

- Use the sidebar menu to navigate between different pages
- Click on the user dropdown in the navbar for profile and settings

### Pages Access

- **Dashboard**: `index.php?page=dashboard` (default)
- **Products**: `index.php?page=products`
- **Forms**: `index.php?page=forms`
- **Login**: `index.php?page=login`
- **Register**: `index.php?page=register`

### Customization

- **Styling**: Modify `public/css/style.css` for custom styles
- **JavaScript**: Edit `public/js/script.js` for custom functionality
- **Colors**: Update CSS variables in `style.css` for theme customization
- **Configuration**: Change settings in `config/config.php`

## Technologies Used

- **Bootstrap 5.3.2**: Frontend framework
- **Bootstrap Icons**: Icon library
- **Chart.js 4.4.0**: Data visualization
- **PHP**: Backend logic
- **MySQL**: Database (optional)
- **HTML5/CSS3**: Markup and styling
- **JavaScript**: Client-side functionality

## Features to Implement

The template provides the UI structure. You can extend it by implementing:

- ✅ User authentication and session management
- ✅ Database CRUD operations (models and controllers included)
- ✅ File upload handling
- ✅ Form validation and processing
- ✅ API endpoints for AJAX operations
- ✅ Search and filtering functionality
- ✅ Report generation

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Contributing

Feel free to submit issues and enhancement requests!

## License

This project is open source and available under the MIT License.

## Credits

Built with ❤️ using Bootstrap 5 and PHP

## Contact

For questions or support, please open an issue on GitHub.