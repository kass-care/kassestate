<!DOCTYPE html>
<html>
<head>
    <title>Investor CRM Dashboard</title>

    <style>
        body{
            background:#0f172a;
            color:white;
            font-family:Arial;
            margin:0;
        }

        .header{
            background:#22c55e;
            padding:25px;
            font-size:36px;
            font-weight:bold;
        }

        .container{
            padding:30px;
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
            border-bottom:1px solid #475569;
        }

        .btn{
            background:#f59e0b;
            color:black;
            padding:10px 20px;
            border-radius:8px;
            text-decoration:none;
            font-weight:bold;
        }

        .money{
            color:#22c55e;
            font-weight:bold;
        }
    </style>
</head>
<body>

<div class="header">
🤝 Investor CRM Dashboard
</div>

<div class="container">

<a href="{{ route('investors.create') }}" class="btn">
+ Add Investor
</a>

<br><br>

<table>

<tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Investment Capacity</th>
    <th>Preferred Market</th>
</tr>

@foreach($investors as $investor)

<tr>
    <td>{{ $investor->name }}</td>
    <td>{{ $investor->phone }}</td>
    <td>{{ $investor->email }}</td>
    <td class="money">
        ${{ number_format($investor->investment_capacity,2) }}
    </td>
    <td>{{ $investor->preferred_market }}</td>
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
