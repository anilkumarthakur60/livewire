{{-- @include('partials.header')


<body class="font-sans antialiased">

    <x-jet-banner />


    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
</div>
</header>
@endif

<!-- Page Content -->
<main>
    {{ $slot }}
</main>
</div>

@stack('modals')

@livewireScripts
</body>

</html> --}}

<x-backend.header></x-backend.header>
@livewire('backend.layout.navbar')
@livewire('backend.layout.sidebar')

<main id="main" class="main">
    {{ $slot }}


</main>
<x-backend.footer></x-backend.footer>