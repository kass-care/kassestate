<!DOCTYPE html>
<html>
<head>
    <title>Net Worth Dashboard - KassEstate</title>

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

        .card{
            background:#1e3a5f;
            padding:25px;
            border-radius:12px;
            margin-bottom:20px;
        }

        .value{
            font-size:42px;
            color:#4ade80;
            font-weight:bold;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th{
            background:#334155;
            padding:12px;
            text-align:left;
        }

        td{
            padding:12px;
            border-bottom:1px solid #334155;
        }

        .btn{
            background:#f59e0b;
            color:black;
            padding:10px 20px;
            text-decoration:none;
            border-radius:8px;
            font-weight:bold;
        }

        a{
            color:#a855f7;
        }
    </style>
</head>
<body>

<div class="header">
    💰 Net Worth Dashboard
</div>

<div class="container">

    <a href="{{ route('net-worths.create') }}" class="btn">
        + New Net Worth Entry
    </a>

    <br><br>

    <div class="card">
        <h2>Total Net Worth</h2>

        <div class="value">
            $250,000.00
        </div>
    </div>

    <table>

        <tr>
            <th>Property Value</th>
            <th>Loan Balance</th>
            <th>Cash Reserves</th>
            <th>Net Worth</th>
        </tr>

        <tr>
            <td>$320,000.00</td>
            <td>$180,000.00</td>
            <td>$110,000.00</td>
            <td style="color:#4ade80;font-weight:bold;">
                $250,000.00
            </td>
        </tr>

    </table>

    <br>

    <a href="{{ route('dashboard') }}">
        ← Back to Dashboard
    </a>

</div>

</body>
</html>
