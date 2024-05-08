<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['gpu']) && isset($_POST['quantity']) && isset($_POST['payment'])) {
        $gpu = $_POST['gpu'];
        $quantity = $_POST['quantity'];
        $payment = $_POST['payment'];

        $price = 0;
        switch ($gpu) {
            case 'RTX_4090':
                $price = 100000;
                break;
            case 'RTX_3090':
                $price = 60000;
                break;
            case 'RX_6800':
                $price = 25000;
                break;
            case 'RTX_3060':
                $price = 16000;
                break;
            default:
                break;
        }

        $total_cost = $price * $quantity;
        $change = $payment - $total_cost;

        if ($change >= 0) {
            echo "<h2>Thank you for your order!</h2>";
            echo "<p>GPU: $gpu</p>";
            echo "<p>Quantity: $quantity</p>";
            echo "<p>Total Cost: $total_cost</p>";
            echo "<p>Change: $change</p>";
        } else {
            echo "<p>Insufficient payment. Please enter a valid amount.</p>";
        }
    } else {
        echo "<p>Error: All fields are required.</p>";
    }
}
?>
