<!DOCTYPE html>
<html>
<head>
    <title>Documents - KassEstate</title>
    <style>
        body { margin:0; font-family:Arial,sans-serif; background:#111827; color:white; }
        .header { background:#065f46; padding:20px; display:flex; justify-content:space-between; align-items:center; }
        .button { background:#f59e0b; color:#111827; padding:12px 18px; border-radius:8px; text-decoration:none; font-weight:bold; }
        .container { padding:24px; }
        table { width:100%; border-collapse:collapse; background:#1f2937; border-radius:12px; overflow:hidden; }
        th, td { padding:14px; border-bottom:1px solid #374151; text-align:left; }
        th { color:#f59e0b; }
        a { color:#f59e0b; }
        .empty { background:#1f2937; padding:30px; border-radius:12px; }
    </style>
</head>
<body>

<div class="header">
    <h1>📄 Document Vault</h1>
    <a class="button" href="{{ route('documents.create') }}">+ Add Document</a>
</div>

<div class="container">

    @if($documents->count())
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>File Path</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
                @foreach($documents as $document)
                    <tr>
                        <td>{{ $document->title }}</td>
                        <td>{{ $document->category }}</td>
                        <td>{{ $document->file_path }}</td>
                        <td>{{ $document->notes }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="empty">
            <h2>No documents yet</h2>
            <p>Add your first purchase agreement, appraisal, invoice, or insurance document.</p>
        </div>
    @endif

    <p><a href="{{ route('dashboard') }}">← Back to Dashboard</a></p>

</div>

</body>
</html>
