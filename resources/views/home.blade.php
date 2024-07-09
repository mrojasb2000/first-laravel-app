<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">
        <h1>Welcome to home page</h1>
        <x-alert type="dark">
            <x-slot name="title">Info </x-slot>
            Change a few things up and try submitting again.
        </x-alert>
    </div>
</body>
</html>