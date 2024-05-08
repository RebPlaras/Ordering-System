<!DOCTYPE html>
<html>
<head>
    <title>PHP ordering system</title>
</head>
<body>
    <h2>Reb's GPU Shop</h2>
    <ul>
        <li>NVIDIA GeForce RTX 4090 - PHP 100,000.00</li>
        <li>NVIDIA GeForce RTX 3090 - PHP 60,000.00</li>
        <li>AMD Radeon RX 6800 - PHP 25,000.00</li>
        <li>NVIDIA GeForce RTX 3060 - PHP 16,000</li>
    </ul>
    <form method="post" action="order.php">
        <label for="gpu">Choose a GPU:</label>
        <select id="gpu" name="gpu">
            <option value="RTX_4090">NVIDIA GeForce RTX 4090 </option>
            <option value="RTX_3090">NVIDIA GeForce RTX 3090 </option>
            <option value="RX_6800">AMD Radeon RX 6800 </option>
            <option value="RTX_3060">NVIDIA GeForce RTX 3060 </option>
        </select><br><br>
        <label for="quantity">Enter quantity:</label>
        <input type="text" id="quantity" name="quantity"><br><br>
        <label for="payment">Enter payment amount:</label>
        <input type="text" id="payment" name="payment"><br><br>
        <input type="submit" name="submit" value="Place Order">
    </form>
</body>
</html>
