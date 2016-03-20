<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    {{ get_title() }}
    {{ stylesheet_link('components/semantic/dist/semantic.min.css') }}
</head>
<body>

    Dashboard<br>
    {{ get_content() }}

    {{ javascript_include('components/semantic/dist/semantic.min.js') }}
</body>
</html>