<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT PAGE</title>
    <script src="https://unpkg.com/intasend-inlinejs-sdk@3.0.2/build/intasend-inline.js"></script>

</head>
<body>
    <button class="btn btn-primary btn-lg intaSendPayButton" data-amount="10" data-currency="KES">Pay Now</button>


new window.IntaSend({
    publicAPIKey: "REPLACE-WITH-YOUR-PUBLISHABLE-KEY",
    live: false // set to true when going live
})
.on("COMPLETE", () => alert("Do something on success"))
.on("FAILED", () => alert("Do something on failure"))
.on("IN-PROGRESS", () => console.log("Payment in progress status"))
</body>
</html>