<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Gateway Form</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>

<div class="payment-form">
    <h2>Payment Details</h2>
    <form action="checkout.php" method="post">
        <!-- Cardholder Name  -->
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="John Doe" required>

        <label for="number">Mobile Number</label>
        <input type="number" id="card-number" name="number" placeholder="00 00 00 00 00" required>

        <label for="Email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter Your Email " required>
        
        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Enter Your Address " required>
      
        <label for="date">Date</label>
        <input type="date" name="date" value="">
        <button name="submit" type="submit">Pay Now</button>
    </form>
</div>

</body>
</html>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Razorpay Payment Gateway</title>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
  <h1>Razorpay Payment Gateway</h1>
  <button id="rzp-button1">Pay Now</button>
  <script>
    const options = {
      "key": "rzp_test_ZgNb5waRWgX3hj", // Replace with your Test Key ID
      "amount": "50000", // Amount in paise (e.g., 50000 paise = INR 500)
      "currency": "INR",
      "name": "Caregiver",
      "description": "Test Transaction",
    //   "image": "https://yourcompanylogo.com/logo.png",
      "order_id": "//<?php echo 'OID'.rand(10,100).'END'; ?>", // Generate using Razorpay Order API
      "handler": function (response) {
          alert("Payment successful! Payment ID: " + response.razorpay_payment_id);
          // Handle the payment success event here
      },
      "prefill": {
          "name": "John Doe",
          "email": "john.doe@example.com",
          "contact": "9999999999"
      },
      "theme": {
          "color": "#3399cc"
      }
    };
    const rzp1 = new Razorpay(options);
    document.getElementById('rzp-button1').onclick = function(e){
      rzp1.open();
      e.preventDefault();
    }
  </script>
</body>
</html> -->
