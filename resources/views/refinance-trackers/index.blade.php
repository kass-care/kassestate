<!DOCTYPE html>
<html>
<head>
    <title>Refinance Tracker Dashboard</title>

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

        .btn{
            background:#f59e0b;
            color:black;
            padding:10px 20px;
            border-radius:8px;
            text-decoration:none;
            font-weight:bold;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:#1e293b;
            margin-top:20px;
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

        .approved{color:#22c55e;font-weight:bold;}
        .submitted{color:#fbbf24;font-weight:bold;}
        .closed{color:#4ade80;font-weight:bold;}
        .delayed{color:#ef4444;font-weight:bold;}
    </style>
</head>
<body>

<div class="header">
🏦 Refinance Tracker Dashboard
</div>

<div class="container">

<a href="{{ route('refinance-trackers.create') }}" class="btn">
+ Add Refinance
</a>

<table>

<tr>
    <th>Property</th>
    <th>Current Loan</th>
    <th>New Loan</th>
    <th>Cash Out</th>
    <th>Lender</th>
    <th>Status</th>
</tr>

@foreach($refinances as $refinance)

<tr>
    <td>{{ $refinance->property_name }}</td>
    <td>${{ number_format($refinance->current_loan_balance,2) }}</td>
    <td>${{ number_format($refinance->new_loan_amount,2) }}</td>
    <td>${{ number_format($refinance->cash_out_amount,2) }}</td>
    <td>{{ $refinance->lender }}</td>

    <td>
        @if($refinance->status == 'Approved')
            <span class="approved">Approved</span>
        @elseif($refinance->status == 'Submitted')
            <span class="submitted">Submitted</span>
        @elseif($refinance->status == 'Closed')
            <span class="closed">Closed</span>
        @elseif($refinance->status == 'Delayed')
            <span class="delayed">Delayed</span>
        @else
            Preparing
        @endif
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
