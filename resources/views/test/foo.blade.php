<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>foo</title>
</head>
<body>
    <h1>Hello World !!</h1>
    <div class="p-6 text-gray-900 dark:text-gray-100">
        {{ auth()->user()->notifications->count() }}
        @foreach (auth()->user()->unreadNotifications as $notification )
               {{ $notification->markAsRead() }}
        @endforeach
       </div>
</body>
</html>
