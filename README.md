# EcommerceWebsite-
This is a project ecommerce website. The website is built around an MVC model and has many different features. (See Report PDF file for images if mentioned)

Video Displaying Website:

[![](https://markdown-videos-api.jorgenkh.no/youtube/{video_id})](https://youtu.be/b3BsouKQusc)

---

### Project Name: Uforic

---

Project Description:
Uforic is a semi functional e-commerce website designed to provide an intuitive shopping
experience for users and robust administrative tools for managing the site. The system follows
the MVC (Model-View-Controller) architecture to ensure modularity, scalability, and
maintainability.

---

## Features for Users:
- Browse Products: Users can view and search for products by category, name. As well
view descriptive information of single products.
- Cart Management: Add, update, and remove items from the cart before proceeding to
checkout.
- Checkout: Users can input their details and place orders. They receive a confirmation
message upon success.
- Order History: Users can track their past orders through the "Your Orders" section in
their account.

## Features for Admins:
- Admin Dashboard: Provides an overview of total products, orders, and users.
- Manage Products: Add, update, and delete products in the inventory.
- Manage Orders: View, update the status, and delete orders.
- Manage Users: Edit and delete user accounts.

The platform ensures secure handling of user information by encrypting passwords and
maintaining session control for both users and admins.

---

## Detailed Technical Description:
- Frontend: HTML, CSS, JS, and Bootstrap for responsive design.
- Backend: PHP (MVC pattern) for handling requests and database interactions.
- Database: MySQL for storing and retrieving user, product, and order data.

## File Structure:
The file structure of this project follows the MVC model. The controller folder has the file that will
manage actions and route requests. THe model has the database connection and database
operation. I will say for this project due to me being a bit on a time crunch and trying to finish by
the due date some of these functions I had actually just did straight into the controller file, but
can easily be transferred into the db_function.php file. If I had more time this is something I
would've done but unfortunately I didn't. The view folder handles all the forms and views. I have
an assets folder which holds all images for the website, and a css and js file. The JS folder was
actually not used as when I was watching tutorials on JS a lot of the script was just put at the
end of the files that used them. Thus, if I had some more time I would've properly managed the
js to the folder.

## Key Components
- User Authentication:
  - Passwords are hashed using password_hash() for secure storage.
  - Sessions track user login and differentiate between admin and regular users.
## Product Management:
- Admins can add, update, and delete products, orders, and users through forms connected to the database.
- Currently the main issue I had was actually with image handling. I had thought I
implemented that right in the database but when displaying the image, it would
either show up as random characters or just nothing at all. As of now each page
that does display a product is hard coded to display the assets folder path and
then the image has to be displayed as “/img_folder/img_1.png.” Which is
something I would fix in later implementations.
- Search Bar
- Users can search by product name, category, or even color.

## Database Schema
Below is the layout for each table in my database. For future implementations, this would need a
lot more tables and information to handle more features like size, and a category table, maybe
even gender. Since this site was selling clothing. However these tables were the minimum to
create orders, users, and products. Which are the main features of an ecommerce website.

---

## User Instructions:
### Regular Users:
- Register/Login: Go to the login page, register if you are new, or log in with existing
credentials.
- Browse Products: Use the shop page or search bar to find products.
- Add to Cart: Select products and click "Add to Cart." Review items in the cart before
checkout.
- Checkout: Enter shipping details and place an order.
- Order History: Access your order history through the account page.
### For Admins:
- Login: Use admin credentials to access the admin dashboard. If you import the database
there should already be an admin account with the login credentials of
admin@email.com with password, “password”
- Manage Products: Navigate to the "View Products" page to add, update, or delete
products.
- Manage Orders: Update order status or delete orders from the "Manage Orders" page.
● Manage Users: Edit or delete user accounts.

---
