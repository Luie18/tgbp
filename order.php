<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order - Luigie's Feeds Store</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
</head>
<body>

    <?php
        const PAGE = 'order';
        require_once 'partials/navbar.php';
    ?>

    <div class="container mt-3">
        <div class="mb-4">
            <h2>Order</h2>
            <p>Bili na Kayo Para sa alaga nyo!</p>
        </div>

        <form method="POST" action="invoice.php">
            <!-- Full Name -->
            <div class="mb-3">
                <label class="text-secondary fw-bold" for="full-name">Full Name:</label>
                <input type="text" class="form-control" id="full-name" name="full-name" required>
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label class="text-secondary fw-bold" for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>

            <!-- Mode -->
            <div class="mb-3">
                <label class="text-secondary fw-bold">Mode:</label>
                <br>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="pickup" name="mode" value="Pickup" checked>
                    <label for="pickup" class="form-check-label">Pickup</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="delivery" name="mode" value="Delivery">
                    <label for="delivery" class="form-check-label">Delivery</label>
                </div>
            </div>

            <!-- Item and Weight -->
            <div class="mb-3">
                <div class="row">
                    <!-- Item -->
                    <div class="col-sm-6">
                        <label class="text-secondary fw-bold" for="civil-status">Item:</label>
                        <select class="form-control" id="item" name="item">
                            <option value="Starter feeds">Starter feeds</option>
                            <option value="Pre-Starter feeds">Pre-Starter feeds</option>
                            <option value="Grower feeds">Grower feeds</option>
                            <option value="Finisher feeds">Finisher feeds</option>
                        </select>
                    </div>

                    <!-- Kilograms -->
                    <div class="col-sm-6 mt-3 mt-sm-0">
                        <label class="text-secondary fw-bold" for="full-name">Kilograms:</label>
                        <input type="number" class="form-control" id="kilograms" name="kilograms" value="1" min="1" max="20">
                    </div>
                </div>

            </div>

            <!-- Preparation -->
            <div class="mb-3">
                <label class="text-secondary fw-bold mb-2">Preparation:</label>
                <br>
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="piolo" name="preparations[]" value="Naka sako">
                    <label for="piolo" class="form-check-label">Naka sako</label>
                </div>
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="liza" name="preparations[]" value="Naka Plastic">
                    <label for="liza" class="form-check-label">Naka Plastic</label>
                </div>
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="daniel" name="preparations[]" value="Naka Eco Bag">
                    <label for="daniel" class="form-check-label">Naka Eco Bag</label>
                </div>
            </div>

            <!-- Buttons -->
            <div class="mb-3 pt-2">
                <button type="submit" class="btn btn-secondary btn-lg" name="checkout">Checkout</button>
            </div>
        </form>
    </div>



    <!-- Bootstrap JS -->
    <script src="dist/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>