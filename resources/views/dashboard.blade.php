<!DOCTYPE html>
<html>
<head>
    <title>KassEstate</title>

    <style>
        body {
            margin:0;
            font-family: Arial, sans-serif;
            background:#111827;
            color:white;
        }

        .header{
            background:#059669;
            padding:20px;
        }

        .header h1{
            margin:0;
        }

        .container{
            padding:20px;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:20px;
        }

        .card{
            background:#1f2937;
            border-radius:12px;
            padding:20px;
            box-shadow:0 4px 12px rgba(0,0,0,.3);
        }

        .card h3{
            color:#f59e0b;
            margin-top:0;
        }

        .number{
            font-size:32px;
            font-weight:bold;
        }
    </style>
</head>

<body>

<div class="header">
    <h1>🏠 KassEstate Command Center</h1>
</div>

<div class="container">

    <div class="cards">

        <div class="card">
            <h3>Total Properties</h3>
            <div class="number">{{ $totalProperties }}</div>
        </div>

        <div class="card">
            <h3>Purchase Value</h3>
            <div class="number">${{ number_format($totalPurchaseValue,2) }}</div>
        </div>

        <div class="card">
            <h3>Total ARV</h3>
            <div class="number">${{ number_format($totalArv,2) }}</div>
        </div>

        <div class="card">
            <h3>Monthly Rent</h3>
            <div class="number">${{ number_format($totalRent,2) }}</div>
        </div>
<div class="card">
    <h3>Total Equity</h3>
    <div class="number">
        ${{ number_format($totalEquity,2) }}
    </div>
</div>

<div class="card">
    <h3>Deals Analyzed</h3>
    <div class="number">
        {{ $totalDeals }}
    </div>
</div>

    </div>

</div>

</body>
</html>
