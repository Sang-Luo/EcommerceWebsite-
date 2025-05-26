<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart Page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>

    <!-- Navigation Bar -->
    <?php include_once "header.php" ?>

    <!-- Cart -->
    <section id="cart" class="container pt-5">
        <h2 class="font-weight-bold pt-5 mt-5">Shopping Cart</h2>
        <hr>
    </section>

    <section id="cart-container" class="container my-5">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#0"><i class="fas fa-trash-alt"></i></a></td>
                    <td><img src="assets/imgs/shoes/1.jpg" alt=""></td>
                    <td>
                        <h5>Handbag Fringilla</h5>
                    </td>
                    <td>
                        <h5>$65</h5>
                    </td>
                    <td><input class="w-25 pl-1" type="number" value="1"></td>
                    <td>
                        <h5>$130.00 </h5>
                    </td>
                </tr>
                <tr>
                    <td><a href="#0"><i class="fas fa-trash-alt"></i></a></td>
                    <td><img src="assets/imgs/shoes/2.jpg" alt=""></td>
                    <td>
                        <h5>Handbag Fringilla</h5>
                    </td>
                    <td>
                        <h5>$65</h5>
                    </td>
                    <td><input class="w-25 pl-1" type="number" value="1"></td>
                    <td>
                        <h5>$130.00 </h5>
                    </td>
                </tr>
                <tr>
                    <td><a href="#0"><i class="fas fa-trash-alt"></i></a></td>
                    <td><img src="assets/imgs/shoes/3.jpg" alt=""></td>
                    <td>
                        <h5>Handbag Fringilla</h5>
                    </td>
                    <td>
                        <h5>$65</h5>
                    </td>
                    <td><input class="w-25 pl-1" type="number" value="1"></td>
                    <td>
                        <h5>$130.00 </h5>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-bottom" class="container">
        <div class="row">
            <div class="coupon col-lg-6 col-md-6 col-12 mb-4">
                <div>
                    <h5>COUPON</h5>
                    <p>Enter your coupon code if you have one. </p>
                    <input type="text" placeholder="Coupon Code">
                    <button>APPLY COUPON</button>
                </div>
            </div>
            <div class="total col-lg-6 col-md-6 col-12">
                <div>
                    <h5>CART TOTAL</h5>
                    <div class="d-flex justify-content-between">
                        <h6>Subtotal</h6>
                        <p>$215.00 </p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6>Shipping</h6>
                        <p>$255.00</p>
                    </div>
                    <hr class="second-hr">
                    <div class="d-flex justify-content-between">
                        <h6>Total</h6>
                        <p>$215.00 </p>
                    </div>
                    <button class="ml-auto">PROCEED TO CHECKOUT</button>
                </div>

            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include_once "footer.php" ?>
        
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>