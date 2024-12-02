<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    
    <div class="container container-fluid justify-contents-center align-items-center">
        <div class="card p-5" >
            <div class="mb-3">
            <label for="txtTitle" class="form-label">Blog Title:</label>
            <input type="text" class="form-control" id="txtTitle" placeholder="name@example.com">
            </div>
            <div class="mb-3">
            <label for="txtContent" class="form-label">Blog Content</label>
            <textarea class="form-control" id="txtContent" rows="3"></textarea>
            </div>
        </div>
    </div>
</body>
</html>
