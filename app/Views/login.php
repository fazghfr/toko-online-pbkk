<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokapedia</title>
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
        
        .sbmitbtn:hover {
            background-color:  rgba(69, 237, 198, 1);
            border-radius: 5px; 
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
                        <strong> Login </strong>
                    </a>
                </div>
                
                <div class="mt-5 mb-auto">
                    <div class="rounded-3 mb-1">
                        <a href="/">Home</a>
                    </div>
                </div>

                <!-- if there is a user logged in, then just show the profile picture and its name, making the account side item accessible -->
            </div>

            <div class="col-md-9 justify-content-center d-flex align-items-center">
                <div class="login-form d-flex justify-content-center align-items-center">
                    <form action="/auth" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        
                        <div class="text-center">
                            <p>Don't have an account?<a href="/register"> Register here <br></a><p>
                            <button type="submit" class="sbmitbtn btn btn-secondary">Login</button>
                        </div>
                    </form>
                </div>
            </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>