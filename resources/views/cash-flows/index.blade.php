<!DOCTYPE html>
<html>
<head>
    <title>KassEstate Cash Flow Analytics</title>

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

        .card{
            background:#1e293b;
            padding:20px;
            border-radius:10px;
            margin-bottom:20px;
        }

        .amount{
            color:#22c55e;
            font-size:32px;
            font-weight:bold;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:#1e293b;
        }

        th{
            background:#334155;
            color:#fbbf24;
            padding:12px;
            text-align:left;
        }

        td{
            padding:12px;
            border-top:1px solid #475569;
        }

        .btn{
            background:#f59e0b;
            color:black;
            padding:12px 18px;
            border-radius:8px;
            text-decoration:none;
            font-weight:bold;
        }
    </style>
</head>
<body>

<div class="header">
    💵 Cash Flow Dashboard
</div>

<div class="container">

<a href="{{ route('cash-flows.create') }}" class="btn">
+ Add Cash Flow
</a>

<br><br>

<div class="card">
    <h2>Total Monthly Cash Flow</h2>

    <div class="amount">
        ${{ number_format($cashFlows->sum('monthly_cashflow'),2) }}
    </div>
</div>

<table>

<tr>
    <th>Property</th>
    <th>Rent</th>
    <th>Mortgage</th>
    <th>Taxes</th>
    <th>Insurance</th>
    <th>Cash Flow</th>
</tr>

@foreach($cashFlows as $cashFlow)

<tr>
    <td>{{ $cashFlow->property_name }}</td>
    <td>${{ number_format($cashFlow->monthly_rent,2) }}</td>
    <td>${{ number_format($cashFlow->mortgage,2) }}</td>
    <td>${{ number_format($cashFlow->taxes,2) }}</td>
    <td>${{ number_format($cashFlow->insurance,2) }}</td>
    <td style="color:#22c55e;">
        ${{ number_format($cashFlow->monthly_cashflow,2) }}
    </td>
</tr>

@endforeach

</table>

<br>

<a href="{{ route('dashboard') }}">
← Back to Dashboard
</a>

</div>

</body>
</html>
