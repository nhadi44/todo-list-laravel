@include('layouts.head')

<body>
    <x-navbar></x-navbar>
    <main>
        @yield('content')
    </main>
    @include('layouts.scripts')
</body>

</html>
