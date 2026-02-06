<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100 d-flex align-items-center justify-content-center">
        <!-- <div class="col-lg-6 col-md-8 col-sm-12 "> -->
        <div class="card admin-card">
            <div class="card-body">
                <form action="" method="POST">
                    <!-- material -->
                    <div class="text-center mb-4">
                        <img src="logo.png" class="img-fluid mb-2 admin-logo" alt="school-logo">
                        <h4 class="fw-bold mb-0">E-Campus Admin</h4>
                    </div>
                    <div class="md-form mb-3">
                        <input type="email" id="email" class="form-control" placeholder="admin_email@gmail.com">
                    </div>
                    <div class="md-form mb-3">
                        <input type="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <!-- acdameic year -->
                    <div class="mb-3">
                        <select class="form-select">
                            <option selected disabled>Select Academic Year</option>
                            <option>2024 - 2025</option>
                            <option>2025 - 2026</option>
                            <option>2026 - 2027</option>
                            <option>2027 - 2028</option>
                        </select>
                    </div>
                    <button class="btn btn-login w-100" name="login">Login</button>
                </form>
            </div>
            <!-- </div> -->
        </div>
    </section>
</body>

</html>