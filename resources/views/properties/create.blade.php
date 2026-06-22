<!DOCTYPE html>
<html>
<head>
    <title>Add Property - KassEstate</title>

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

        input {
            width: 100%;
            padding: 14px;
            margin-bottom: 14px;
            border-radius: 8px;
            border: none;
        }

        label {
            color: #f59e0b;
            font-weight: bold;
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
    <h1>🏠 Add Investment Property</h1>
</div>

<div class="container">

    <form method="POST" action="{{ route('properties.store') }}">
        @csrf

        <label>Property Address</label>
        <input type="text" name="address" required>

        <label>Purchase Price</label>
        <input type="number" step="0.01" name="purchase_price">

        <label>Rehab Cost</label>
        <input type="number" step="0.01" name="rehab_cost">

        <label>After Repair Value (ARV)</label>
        <input type="number" step="0.01" name="arv">

        <label>Bedrooms</label>
        <input type="number" name="bedrooms">

        <label>Bathrooms</label>
        <input type="number" name="bathrooms">

        <label>Monthly Rent</label>
        <input type="number" step="0.01" name="monthly_rent">

        <label>Purchase Date</label>
        <input type="date" name="purchase_date">

        <button type="submit">Save Property</button>
    </form>

    <p><a href="{{ route('properties.index') }}">← Back to Properties</a></p>

</div>

</body>
</html>
