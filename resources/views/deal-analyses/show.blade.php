<!DOCTYPE html>
<html>
<head>
    <title>Deal Analysis Results</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #111827;
            color: white;
        }

        .header {
            background: #065f46;
            padding: 20px;
        }

        .container {
            padding: 24px;
            max-width: 900px;
        }

        .card {
            background: #1f2937;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 12px;
        }

        h2 {
            color: #f59e0b;
        }

        .value {
            font-size: 32px;
            font-weight: bold;
        }

        .buy {
            color: #10b981;
            font-size: 40px;
            font-weight: bold;
        }

        .pass {
            color: #ef4444;
            font-size: 40px;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="header">
    <h1>🔥 KassEstate Deal Analysis Results</h1>
</div>

<div class="container">

    <div class="card">
        <h2>Equity Created</h2>
        <div class="value">
            ${{ number_format($dealAnalysis->equity_created, 2) }}
        </div>
    </div>

    <div class="card">
        <h2>Loan Amount</h2>
        <div class="value">
            ${{ number_format($dealAnalysis->loan_amount, 2) }}
        </div>
    </div>

    <div class="card">
        <h2>Cash Needed</h2>
        <div class="value">
            ${{ number_format($dealAnalysis->cash_needed, 2) }}
        </div>
    </div>

    <div class="card">
        <h2>Estimated Refinance Amount</h2>
        <div class="value">
            ${{ number_format($dealAnalysis->refinance_amount, 2) }}
        </div>
    </div>

    <div class="card">
        <h2>Recommendation</h2>

        @if($dealAnalysis->recommendation === 'BUY')
            <div class="buy">🟢 BUY</div>
        @else
            <div class="pass">🔴 PASS</div>
        @endif
    </div>

</div>

</body>
</html>
