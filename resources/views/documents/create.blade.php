<!DOCTYPE html>
<html>
<head>
    <title>KassEstate Document Vault</title>

    <style>
        body{
            background:#0f172a;
            color:white;
            font-family:Arial;
            padding:40px;
        }

        .container{
            max-width:900px;
            margin:auto;
        }

        h1{
            background:#22c55e;
            padding:20px;
            border-radius:10px;
        }

        input, textarea{
            width:100%;
            padding:12px;
            margin-top:10px;
            margin-bottom:20px;
            border-radius:8px;
            border:none;
        }

        button{
            background:#f59e0b;
            border:none;
            padding:12px 20px;
            border-radius:8px;
            font-weight:bold;
            cursor:pointer;
        }

        a{
            color:#fbbf24;
        }
    </style>
</head>
<body>

<div class="container">

<h1>📁 KassEstate Document Vault</h1>

<form method="POST" action="{{ route('documents.store') }}">
@csrf

<label>Document Title</label>
<input type="text" name="title">

<label>Category</label>
<input type="text" name="category">

<label>File Path</label>
<input type="text" name="file_path">

<label>Notes</label>
<textarea name="notes"></textarea>

<button type="submit">
Save Document
</button>

</form>

<br>

<a href="{{ route('dashboard') }}">
← Back to Dashboard
</a>

</div>

</body>
</html>
