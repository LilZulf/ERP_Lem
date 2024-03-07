# Glue Factory ERP Web App

Welcome to the Glue Factory ERP Web App! This application is designed to streamline the management of your glue manufacturing business operations, providing comprehensive Enterprise Resource Planning (ERP) functionalities tailored specifically for the needs of glue production.

## Features

1. **Product Management**: Efficiently manage all aspects of your products, including creation, editing, and deletion.

2. **Manufacturing Order**: Streamline the manufacturing process by creating and tracking manufacturing orders to ensure timely production.

3. **Purchasing**: Simplify procurement processes by managing purchase orders, supplier information, and inventory levels.

4. **Request for Quotation (RFQ)**: Easily request quotes from vendors for required materials and services, and compare offers to make informed purchasing decisions.

5. **Vendor Management**: Maintain a database of vendors, including contact information, performance history, and contracts.

6. **Sales Management**: Manage sales orders, customer information, and invoices to streamline the sales process and improve customer satisfaction.

7. **Bill of Materials (BOM)**: Create and manage BOMs to define the materials and components required for production, facilitating accurate inventory management and production planning.

## Installation

1. **Clone the repository**:

    ```
    git clone https://github.com/yourusername/glue-factory-erp-web-app.git
    ```

2. **Install dependencies**:

    ```
    cd glue-factory-erp-web-app
    composer install
    ```

3. **Setup environment variables**:

    Rename the `.env.example` file to `.env` and configure the necessary environment variables such as database connection details.

4. **Generate application key**:

    ```
    php artisan key:generate
    ```

5. **Run migrations and seeders**:

    ```
    php artisan migrate --seed
    ```

6. **Start the server**:

    ```
    php artisan serve
    ```

7. **Access the application**:

    Open your web browser and navigate to `http://localhost:8000`.

## Technologies Used

- **Backend**:
  - Laravel
  - PHP
  - MySQL

- **Frontend**:
  - Blade Templates
  - CSS/SCSS
  - JavaScript

## Contributing

We welcome contributions from the community to improve the Glue Factory ERP Web App. Feel free to fork the repository, make changes, and submit a pull request.

Before contributing, please review the [contributing guidelines](CONTRIBUTING.md).

## License

This project is licensed under the [MIT License](LICENSE).

## Support

For any questions or issues, please contact [support@example.com](mailto:support@example.com).

---

Feel free to customize this README.md according to your specific project details and requirements.