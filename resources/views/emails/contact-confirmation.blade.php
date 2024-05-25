<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
        }
        .header h1 {
            margin: 0;
        }
        .content {
            margin-top: 20px;
        }
        .content p {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Dziękujemy za Twoją wiadomość!</h1>
    </div>
    <div class="content">
        <p>Cześć {{ $messageData['name'] }},</p>
        <p>Otrzymaliśmy Twoją wiadomość i wkrótce na nią odpowiemy.</p>
        <p><strong>Twoje pytanie:</strong></p>
        <p>{{ $messageData['question'] }}</p>
        <p>Dziękujemy,</p>
        <p>Zespół FotoStudio</p>
    </div>
</div>
</body>
</html>
