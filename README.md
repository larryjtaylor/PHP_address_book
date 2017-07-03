# Address Book

##### _Collection of contact information, June 30, 2017_

#### By Larry Taylor

## Description

This web application allows users to input information about contacts and have that information displayed and stored in a session. This is a practice in using object-oriented PHP with the Silex micro framework and twig templates. it is the first week's solo project in the PHP section of the PHP/React track at Epicodus.

## Setup

* Open GitHub site on your browser: https://github.com/Larryjtaylor/PHP_address_book
* Select the dropdown (green box) "Clone or download"
* Copy the link for the GitHub repository
* Open Terminal on your computer
* In Terminal, perform the following steps:
    * type 'cd desktop' and press enter
    * type 'git clone' then copy the repository link and press enter
    * type 'cd php-ping-pong' to access the document root (project folder) on your computer
    * type 'composer install' to download dependencies (Silex & Twig)
    * type 'cd web' to access web folder, then type 'php -S localhost:8000' to open local server
* Open browser and type 'localhost:8000' to view address book.

## Specifications
* The program will accept inputted information from the input form on the homepage.
    * Input: Larry Taylor
    * Stored: Larry Taylor
* Upon submitting, the program will redirect to a viewing page where the user can see their input displayed.
    * Input: Larry Taylor
    * Display: Larry Taylor
* Upon submitting on viewing page, the program will redirect back to the home page.
* Upon return to the home page, the user's inputted info will be displayed below the input fields.
* If the user submits the delete button, the program will be redirected to a delete page where the user will be informed their contacts have been deleted.
* Upon clicking the home button on the delete page, the program will redirect back to the home page.


## Technologies Used

PHP, Silex, Twig, CSS, HTML5

### License
This software is licensed under the MIT license.

Copyright &copy; 2017 **_Larry Taylor_**
