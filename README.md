# eShopper
A PHP based grocery shopping website. Comes with Sign-Up & Sign-In features. Allows users to add items to the cart. 

### Getting Started:
1. Get [XAMPP](https://www.apachefriends.org/index.html).
2. Once the XAMPP Control Panel is open, start the Apache and MySQL services.
3. Open [PHPMyAdmin](http://localhost/phpmyadmin/).
4. Select the Database section and create a Database named "_dbtest_".
5. Select the Import section and upload the file "_dbtest.sql_". You will see the tables populated.
6. Download and store the project in a convenient location (C:\xampp\htdocs\eShopper-master).
7. You can now access the website at http://localhost/eShopper-master/.

### What works:
* Basic Login/Logout features:
  * Allows you to register a new user for the website using the signup page.
  * Adds a Username, Email-Id and Password entry in the "_user_" table in the database. Password is hashed using SHA-256.
  * Sign-in based on Email-Id and Password.
  * Prevents potential SQL Injections.
* Dynamic Product Cells:
  * Loads product cells dynamically based on database entries in the database table "_products_". 
* Add to Cart:
  * Allows you to add items to cart which stay as long as the session active. Cart is cleared when the user logs out.
  
### What doesn't work:
* Requires you to go to the Sign In page in order to go to the Register page.
* Doesn't allow you to add multiple quantities of the same item in cart. 
* Storing more personalized user information.
* Payment Portal set-up.
* Requires manual entry of products to the database. No Admin page for product entry.
* Product search not implemented.
 
## Home Page
![alt text](https://github.com/anish391/eShopper/blob/master/screenshots/home1.png)
![alt text](https://github.com/anish391/eShopper/blob/master/screenshots/home3.png)
## Individual Category Page
![alt text](https://github.com/anish391/eShopper/blob/master/screenshots/categorypage.png)
## Registration Page
![alt text](https://github.com/anish391/eShopper/blob/master/screenshots/registerpage.png)
## Cart Page
![alt text](https://github.com/anish391/eShopper/blob/master/screenshots/cart.png)
