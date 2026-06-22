<!DOCTYPE html>
<html>
<head>
    <title>KassEstate Dashboard</title>
</head>
<body>
    <h1>KassEstate Investor Dashboard</h1>

    <p>Total Properties: {{ $totalProperties }}</p>
    <p>Total Purchase Value: ${{ number_format($totalPurchaseValue, 2) }}</p>
    <p>Total ARV: ${{ number_format($totalArv, 2) }}</p>
    <p>Total Monthly Rent: ${{ number_format($totalRent, 2) }}</p>
</body>
</html>
