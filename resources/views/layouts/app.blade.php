<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/codemirror@5.59.2/lib/codemirror.min.css" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script>
        function alpine(name, data) {

            document.addEventListener('alpine:init', () => {
                Alpine.data(name, () => (data))
            })
        }
    </script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style type="text/css">
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .CodeMirror-focused {
            border-radius: .375rem;
            outline: 2px solid transparent;
            outline-offset: 2px;
            --tw-ring-opacity: 0.5;
            --tw-ring-color: rgba(199, 210, 254, var(--tw-ring-opacity));
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
        }

        .CodeMirror {
            padding: 0.75rem;
            font-family: inherit;
            font-size: inherit;
            border-bottom-left-radius: .375rem;
            border-bottom-right-radius: .375rem;
            --tw-border-opacity: 1;
            border: 1px solid rgba(209, 213, 219, var(--tw-border-opacity));
        }

        .CodeMirror.CodeMirror-focused {
            --tw-border-opacity: 1;
            border-color: rgba(165, 180, 252, var(--tw-border-opacity));
        }

        .cm-s-default .cm-header,
        .cm-s-default .cm-variable-2 {
            color: rgb(31, 41, 55);
        }
    </style>


    @livewireStyles
</head>

<body class="select-none selection:bg-primary overflow-hidden h-screen selection:text-white bg-gray-0 text-gray-4">

    {{ $slot }}


</body>

@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/codemirror@5.59.2/lib/codemirror.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/codemirror@5.59.2/mode/markdown/markdown.js"></script>
<script src="https://cdn.jsdelivr.net/npm/turndown@7.0.0/dist/turndown.min.js"></script>
<script src="https://unpkg.com/marked@0.3.6/lib/marked.js"></script>

</html>
