<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QRSEHOGA</title>
</head>
<body>
    <p>
        Hello Admin,
        A user tried to contact you...<br>

        <strong>Name</strong>: {{$user->name}} <br>
        <strong>Email</strong>: {{$user->email}} <br>
        <strong>Contact</strong>: {{$user->phone}}<br>
        <strong>Subject</strong>: {{$user->subject}}<br>
        <strong>Message</strong>: {{$user->message}}<br>
    </p>
</body>
</html>
