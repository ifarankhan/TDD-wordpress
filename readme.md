TDD connect
===============

TDD Connect is a WordPress plugin that will add custom fields for first name and last name to the user registration form. It also provides validation for the entered names and saves them to the user's profile.
Created this plugin to show that how we can work with wordpress Test Driven approach. Its a good example for those who want to start.

Installation
------------

1.  Download the TDD plugin ZIP file.
2.  Log in to your WordPress admin dashboard.
3.  Go to "Plugins" > "Add New".
4.  Click on the "Upload Plugin" button.
5.  Choose the TDD plugin ZIP file and click "Install Now".
6.  Once installed, click on the "Activate" button to activate the plugin.

Usage
-----

The TDD plugin automatically adds two fields, "First Name" and "Last Name," to the user registration form. When a user registers on your WordPress site, they will be prompted to enter their first name and last name.

The plugin also performs validation on the entered names. If the names are empty or contain invalid characters, an error message will be displayed. Valid names will be saved to the user's profile.

Demonstration of TDD approach.

Development
-----------

To contribute to the development of the TDD plugin, follow these steps:

1.  Clone the repository: `git clone https://github.com/ifarankhan/TDD-wordpress.git`
2.  Install the project dependencies: `composer install`
3.  Make your changes and test them locally.
4.  Submit a pull request describing your changes.

### Scripts

- `npm install` to install require dependencies.
- `npm run build` to build the plugin JavaScript file.
- `npm run test` to run tests.


Testing
-------

The TDD plugin includes unit tests to ensure the functionality is working correctly. To run the tests, follow these steps:

1.  Navigate to the plugin directory: `cd TDD`
2.  `npm run test` to run tests or you can directly Run the PHPUnit tests: `phpunit`

Credits
-------

TDD is developed and maintained by Faran Ahmed. If you have any questions or issues, please contact me at faranakhan901@gmail.com

Support
-------

For support, please open an issue on the [GitHub repository](https://github.com/ifarankhan/TDD-wordpress/issues).
