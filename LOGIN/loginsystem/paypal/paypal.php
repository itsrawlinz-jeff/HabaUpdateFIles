<html lang="en">

<?php
$paypalClientId = 'Ab_lI6S1a2cxOXLZc8nLSyXm5bO9I4sK8CulUuG4vSWj3ua5w24D5uicAOZQqW15OdEUuFx0ylJYvOAj';
$amount = isset($_GET['amount']) ? $_GET['amount'] : 50;
$invoiceNo = isset($_GET['invoiceNo']) ? $_GET['invoiceNo'] : 'INV-'.time();
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Payment method</title>

    <link rel="stylesheet" href="/LOGIN/loginsystem/css/bootstrap.min.css">
    <style>
        .row {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 90vh;
        }
    </style>
    <!-- Paypal SDK -->
    <?php
    echo '<script src="https://www.paypal.com/sdk/js?client-id=' . $paypalClientId . '&currency=USD"></script>'
    ?>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color:maroon !important">
            <a class="navbar-brand" href="#" style="color:white;">Haba Dating Club</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/" style="color:white;">HOME </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="main">
        <div class="container">
            <div class="row">
                <div class=" col-xs-6 text-center">
                    <div id="paypal-button-container"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let amount = <?php echo $amount ?>;
        let invoiceNo = '<?php echo $invoiceNo ?>';
        let custom_id = '<?php echo $user_id ?>';

        paypal.Buttons({
            // Sets up the transaction when a payment button is clicked
            createOrder: (data, actions) => {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: amount // Can also reference a variable or function
                        },
                        invoice_id: invoiceNo,
                        custom_id: custom_id
                    }]
                });
            },
            // Finalize the transaction after payer approval
            onApprove: (data, actions) => {
                return actions.order.capture().then(function(orderData) {
                    // Successful capture! For dev/demo purposes:
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                    const transaction = orderData.purchase_units[0].payments.captures[0];
                    // alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                    // When ready to go live, remove the alert and show a success message within this page. For example:
                    const element = document.getElementById('paypal-button-container');
                    element.innerHTML = '<h3>Thank you for your payment!</h3>';
                    // redirect to user page
                    actions.redirect('/user/' + custom_id);
                    // Or go to another URL:  actions.redirect('thank_you.html');
                });
            }
        }).render('#paypal-button-container');
    </script>
</body>

</html>
