<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran</title>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>
<body>

<button id="pay-button">Bayar Sekarang</button>

<script>
    document.getElementById('pay-button').onclick = function () {
        snap.pay('{{ $snapToken }}');
    };
</script>

</body>
</html>
