<!DOCTYPE html>
<html>
<head>
    <title>KassEstate Properties</title>

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
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            margin: 0;
        }

        .button {
            background: #f59e0b;
            color: #111827;
            padding: 12px 18px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        .container {
            padding: 24px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #1f2937;
            border-radius: 12px;
            overflow: hidden;
        }

        th, td {
            padding: 14px;
            border-bottom: 1px solid #374151;
            text-align: left;
        }

        th {
            color: #f59e0b;
        }

        .empty {
            background: #1f2937;
            padding: 30px;
            border-radius: 12px;
        }
    </style>
</head>

<body>

<div class="header">
    <h1>🏘 KassEstate Properties</h1>
    <a class="button" href="{{ route('properties.create') }}">+ Add Property</a>
</div>

<div class="container">

    @if($properties->count())
        <table>
            <thead>
                <tr>
                    <th>Address</th>
                    <th>Purchase Price</th>
                    <th>Rehab Cost</th>
                    <th>ARV</th>
                    <th>Monthly Rent</th>
                </tr>
            </thead>
            <tbody>
                @foreach($properties as $property)
                    <tr>
                        <td>{{ $property->address }}</td>
                        <td>${{ number_format($property->purchase_price, 2) }}</td>
                        <td>${{ number_format($property->rehab_cost, 2) }}</td>
                        <td>${{ number_format($property->arv, 2) }}</td>
                        <td>${{ number_format($property->monthly_rent, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="empty">
            <h2>No properties yet</h2>
            <p>Add your first investment property to start building your portfolio.</p>
        </div>
    @endif

</div>

</body>
</html>
