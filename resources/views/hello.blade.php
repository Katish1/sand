<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tailwind demo</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-green-300">
    <h1 class="bg-orange-300">
        POOPS: {{ $count }}
    </h1>
    <form method="POST" action="/">
        <button class="px-4 py-2 bg-gray-400 hover:bg-gray-600 rounded" onclick="alert('Pooped')">Made a dumpy</button>
    </form>
  </body>
</html>