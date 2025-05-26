<?php
include_once ("../model/database.php");
include_once ("../model/db_functions.php");


// Sets default action to display "../model/employee_list"
$action = filter_input (INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input (INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}

// Show Employee List
if ($action === 'home'){
    $featured_products = get_4_products();
    include ('../View/index.php');
}


// Show Employee List
else if ($action === 'shop'){
    $list_products = getAllProducts();
    include ('../View/shop.php');
}

// Show Employee List
else if ($action === 'blog'){
    include ('../View/blog.php');
}

// Show Employee List
else if ($action === 'contact'){
    include ('../View/contact.php');
}

// Show Employee List
else if ($action === 'cart'){
    include ('../View/cart.php');
}

// Show Employee List
else if ($action === 'account'){
    include ('../View/account.php');
}

?>
