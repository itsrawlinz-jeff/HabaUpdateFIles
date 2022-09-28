<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Payment method</title>

    <link rel="stylesheet" href="/LOGIN/loginsystem/css/bootstrap.min.css">
</head>

<?php
    $getAmount = isset($_GET['amount']) ? $_GET['amount'] : null;
    $postAmount = isset($_POST['amount']) ? $_POST['amount'] : 0;

    $getInvoice = isset($_GET['invoice']) ? $_GET['invoice'] : null;
    $postInvoice = isset($_POST['invoice']) ? $_POST['invoice'] : '';

    $getUser = isset($_GET['user']) ? $_GET['user'] : null;
    $postUser = isset($_POST['user']) ? $_POST['user'] : '';

    $amount = $getAmount ? $getAmount : $postAmount;
    $invoice = $postInvoice ? $postInvoice : $getInvoice;
    $user = $postUser ? $postUser : $getUser;
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="text-center">Choose Payment Method</h3>
            </div>
            <div class="col-xs-6 text-center">
                <a class="btn btn-primary" href="https://paystack.com/pay/z6ds7mwuhg">PayStalk</a>
            </div>
            <div class=" col-xs-6 text-center">
                <form action="/LOGIN/loginsystem/paypal.php?amount=<?php echo $amount ?>&invoiceNo=<?php echo $invoice ?>" method="POST">
                    <input type="hidden" name="amount" value="<?php echo $amount; ?>">
                    <input type="hidden" name="invoiceNo" value="<?php echo $invoice; ?>">
                    <input type="hidden" name="user_id" value="<?php echo $user; ?>">
                    <input type="submit" class="btn btn-primary" value="PayPal">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
