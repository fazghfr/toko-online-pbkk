<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $loggedin; ?>'s Order</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .sidebar a {
            color: black;
            display: block;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color:  rgba(69, 237, 198, 1);
            color: white;
            border-radius: 10px; 
        }

        .searchbar button:hover {
            background-color:  rgba(69, 237, 198, 1);
            border-radius: 5px; 
        }

        .container-fluid {
            margin: 10;
        }

        .product-frame {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 10px; 
            margin-bottom: 10px;
        }

        .product-frame:hover {
            transform: scale(1.05);
            background-color:  rgba(69, 237, 198, 0.245);
        }
        .product-image {
            width: 100%;
            height: auto;
        }

        .product-name {
            font-weight: bold;
            margin-top: 5px;
        }

        .product-price {
            color: green;
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar d-flex flex-column bg-light" style="height: 100vh;">
                <!-- Sidebar content goes here -->
                <!-- add if statement, login would be displayed only if the user is not logged in or there is no user authenticated in the current state -->
                <div class="mt-2 mb-5" bis_skin_checked="1">
                    <a href="/login" class="d-flex align-items-center link-dark text-decoration-none" aria-expanded="false">
                        <img src="https://static.vecteezy.com/system/resources/previews/020/765/399/non_2x/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                        <?php if (!isset($loggedin) || !$loggedin): ?>
                            <strong>Login</strong>
                        <?php else: ?>
                            <?php echo $loggedin; ?>
                            <a href="/logout">Logout</a> <!-- Added logout link -->
                        <?php endif; ?>
                    </a>
                </div>

                
                
                <div class="mt-5 mb-auto">
                    <div class="rounded-3 mb-1">
                        <a href="/">Home</a>
                    </div>
                    <div class="rounded-3 mb-1">
                    <?php if (!isset($loggedin) || !$loggedin): ?>
                        <a href="/login">My Order</a>
                    <?php else: ?>
                        <a href="/order?loggedin=<?php echo $loggedin; ?>">My Order</a>
                    <?php endif; ?>
                    </div>
                </div>

                <!-- if there is a user logged in, then just show the profile picture and its name, making the account side item accessible -->
            </div>
            <div class="col-md-9 justify-content-center">
                <!-- Main content goes here -->
                <div class="text-center mt-5 mb-5">
                    <h1><?php echo $loggedin; ?>'s Order</h1>
                </div>


                <div class="input-group searchbar mt-5 mb-5">
                    <input type="text" class="form-control" placeholder="Search for a Product">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Search</button>
                    </div>
                </div>

                
                <hr>

                <!-- Add this HTML code for the notification popup -->
            <div id="notification-popup" class="notification-popup"></div>

            <div class="product-container mt-5">
                <!-- todo: for loop will loop until 2 or 3 rows. Each row will have 4-5 products -->
                <!-- todo: create an item for each product -->
                <div class="row">
                <?php foreach ($products as $product): ?>
                    <div class="col-md-3">
                        <div class="product-frame">
                            <img src="<?php echo $product->product_image; ?>" alt="" class="product-image">
                            <div class="product-name"><?php echo $product->product_name; ?></div>
                            <div class="product-price"><?php echo $product->product_price; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>

                </div>                    
            </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>\

</body>
</html>