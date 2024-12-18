<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подтверждение бронирования</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #4CAF50;
            font-size: 24px;
            text-align: center;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
        }
        .details {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .details table {
            width: 100%;
            border-collapse: collapse;
        }
        .details th, .details td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            font-size: 16px;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Confirmation of your booking</h1>
    <p>Hello, <strong>{{$booking->name}}</strong>!</p>
    <p>Thank you for choosing our service! We are happy to confirm your booking.</p>

    <div class="details">
        <h3>Booking Details</h3>
        <table>
             <tr>
                <th>Date</th>
                <td>{{$booking->date_time}}</td>
            </tr>

            <tr>
                <th>Number of guests</th>
                <td>{{$booking->number_of_persons}}</td>
            </tr>

        </table>
    </div>

    <p>If you have any questions or changes to the booking, do not hesitate to contact us.</p>



    <div class="footer">
        <p>If you have not made a reservation, please ignore this email.</p>
    </div>
</div>

</body>
</html>
