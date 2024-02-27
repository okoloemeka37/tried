<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Book Added</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #333;
    }

    p {
      color: #666;
    }

    .book-info {
      margin-bottom: 20px;
    }

    .footer {
      background-color: #f4f4f4;
      padding: 10px;
      border-top: 1px solid #ddd;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>New Book Added</h1>

    <div class="book-info">
      <p><strong>Title:</strong> {{ $data['title'] }}</p>
      <p><strong>Author:</strong> {{  auth()->user()->name }}</p>
      <p><strong>Slug:</strong> {{ $data['slug'] }}</p>
     
    </div>

    <div class="footer">
      <p>&copy; {{date('Y')}} <a class="non" href="{{route('home')}}">BookLib</a>. All rights reserved.</p>
    </div>
  </div>
</body>
</html>
