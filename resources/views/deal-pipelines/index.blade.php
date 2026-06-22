<!DOCTYPE html>
<html>
<head>
    <title>Deal Pipeline Dashboard</title>

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

        .lead{color:#60a5fa;font-weight:bold;}
        .analyzing{color:#fbbf24;font-weight:bold;}
        .contract{color:#a78bfa;font-weight:bold;}
        .rehab{color:#fb7185;font-weight:bold;}
        .refinance{color:#22c55e;font-weight:bold;}
        .rental{color:#14b8a6;font-weight:bold;}
        .completed{color:#4ade80;font-weight:bold;}
    </style>
</head>
<body>

<div class="header">
🏠 Deal Pipeline / Acquisition Tracker
</div>

<div class="container">

<a href="{{ route('deal-pipelines.create') }}" class="btn">
+ Add Deal
</a>

<table>

<tr>
    <th>Property</th>
    <th>Seller</th>
    <th>Purchase Price</th>
    <th>ARV</th>
    <th>Status</th>
    <th>Target Close</th>
</tr>

@foreach($deals as $deal)

<tr>
    <td>{{ $deal->property_address }}</td>
    <td>{{ $deal->seller_name }}</td>
    <td>${{ number_format($deal->purchase_price,2) }}</td>
    <td>${{ number_format($deal->arv,2) }}</td>

    <td>
        @if($deal->status == 'Lead')
            <span class="lead">Lead</span>
        @elseif($deal->status == 'Analyzing')
            <span class="analyzing">Analyzing</span>
        @elseif($deal->status == 'Under Contract')
            <span class="contract">Under Contract</span>
        @elseif($deal->status == 'Rehab')
            <span class="rehab">Rehab</span>
        @elseif($deal->status == 'Refinance')
            <span class="refinance">Refinance</span>
        @elseif($deal->status == 'Rental')
            <span class="rental">Rental</span>
        @else
            <span class="completed">Completed BRRRR</span>
        @endif
    </td>

    <td>{{ $deal->target_close_date }}</td>

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
