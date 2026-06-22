<!DOCTYPE html>
<html>
<head>
    <title>Lender CRM Dashboard</title>

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
            background:#1e3a5f;
        }

        th{
            background:#334155;
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

        a{
            color:#a855f7;
        }
    </style>
</head>
<body>

<div class="header">
🏦 Lender CRM Dashboard
</div>

<div class="container">

<a href="{{ route('lenders.create') }}" class="btn">
+ Add Lender
</a>

<br><br>

<table>

<tr>
    <th>Name</th>
    <th>Company</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Rate</th>
    <th>Max Loan</th>
</tr>

<tr>
    <td>John Smith</td>
    <td>ABC Capital</td>
    <td>(555) 123-4567</td>
    <td>john@abccapital.com</td>
    <td>8.50%</td>
    <td>$500,000</td>
</tr>

</table>

<br>

<a href="{{ route('dashboard') }}">
← Back to Dashboard
</a>

</div>

</body>
</html>
