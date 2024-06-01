<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potwierdzenie Rezerwacji</title>
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
            color: #007BFF;
        }
        .content {
            margin-top: 20px;
        }
        .content p {
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #eaeaea;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Potwierdzenie Rezerwacji</h1>
    </div>
    <div class="content">
        <p>Cześć {{ $reservation->name }},</p>
        <p>Twoja rezerwacja została potwierdzona.</p>
        <p><strong>Szczegóły rezerwacji:</strong></p>
        <p>Data: {{ $reservation->date }}</p>
        <p>Pokój: {{ $reservation->room }}</p>
        <p>Godzina: {{ $reservation->hour }}</p>
        <p>Dziękujemy za wybranie naszej usługi.</p>
    </div>
    <div class="footer">
        <p>Zespół FotoStudio</p>
    </div>
</div>
</body>
</html>
