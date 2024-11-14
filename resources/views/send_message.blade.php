<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Message</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <form action="{{ route('send_message') }}" method="POST">
        @csrf
        <input type="text" name="message" placeholder="Enter your message">
        <button type="submit">Send</button>
    </form>

    <ul id="message">
        
    </ul>
</body>
</html>