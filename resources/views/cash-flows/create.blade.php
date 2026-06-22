<!DOCTYPE html>
<html>
<head>
    <title>KassEstate Cash Flow Dashboard</title>

    <style>
        body{
            background:#0f172a;
            color:white;
            font-family:Arial, sans-serif;
            margin:0;
        }

        .header{
            background:#22c55e;
            padding:25px;
            font-size:40px;
            font-weight:bold;
        }

        .container{
            padding:30px;
        }

        label{
            display:block;
            margin-top:15px;
            margin-bottom:5px;
            color:#fbbf24;
            font-weight:bold;
        }

        input{
            width:100%;
            padding:12px;
            border-radius:8px;
            border:none;
        }

        button{
            margin-top:20px;
            background:#f59e0b;
            color:black;
            border:none;
            padding:12px 25px;
            border-radius:8px;
            font-weight:bold;
            cursor:pointer;
        }

        a{
            color:#fbbf24;
            display:block;
            margin-top:20px;
        }
    </style>
</head>
<body>

<div class="header">
    💵 KassEstate Cash Flow Dashboard
</div>

<div class="container">

<form method="POST" action="{{ route('cash-flows.store') }}">
    @csrf

    
    <label>Property Name</label>
<input type="text" name="property_name" required>

<label>Monthly Rent Income</label>
<input type="number" step="0.01" name="monthly_rent">

    <label>Mortgage Payment</label>
    <input type="number" step="0.01" name="mortgage">

    <label>Property Taxes</label>
    <input type="number" step="0.01" name="taxes">

    <label>Insurance</label>
    <input type="number" step="0.01" name="insurance">

    <label>Maintenance</label>
    <input type="number" step="0.01" name="maintenance">

    
    <label>Other Expenses</label>
<input type="number" step="0.01" name="other_expenses">

    <button type="submit">
        Calculate Cash Flow
    </button>

</form>

<a href="/">← Back to Dashboard</a>

</div>

</body>
</html>
