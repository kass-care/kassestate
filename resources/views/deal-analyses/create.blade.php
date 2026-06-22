<!DOCTYPE html>
<html>
<head>
    <title>Deal Analyzer - KassEstate</title>

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
            max-width: 700px;
        }

        label {
            color: #f59e0b;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 14px;
            margin-bottom: 14px;
            border-radius: 8px;
            border: none;
        }

        button {
            background: #f59e0b;
            color: #111827;
            padding: 14px 20px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        a {
            color: #f59e0b;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>🔥 KassEstate Deal Analyzer</h1>
</div>

<div class="container">

    <form method="POST" action="{{ route('deal-analyses.store') }}">
        @csrf

        <label>Purchase Price</label>
        <input type="number" step="0.01" name="purchase_price" required>

        <label>Rehab Cost</label>
        <input type="number" step="0.01" name="rehab_cost" required>

        <label>After Repair Value (ARV)</label>
        <input type="number" step="0.01" name="arv" required>

        <label>Hard Money Loan %</label>
        <input type="number" step="0.01" name="loan_percent" value="90">

        <label>Closing Costs</label>
        <input type="number" step="0.01" name="closing_costs" value="0">

        <label>Expected Monthly Rent</label>
        <input type="number" step="0.01" name="monthly_rent" required>

        <button type="submit">Analyze Deal</button>
    </form>

    <p><a href="{{ route('dashboard') }}">← Back to Dashboard</a></p>

</div>

</body>
</html>
