<!doctype html>
<html lang="en">

{{-- Header --}}
@include('components.header')

<body>
    <main>

        {{-- Navbar --}}
        @include('components.navbar')

        {{-- Content --}}
        @yield('content')

        {{-- Footer --}}
        @include('components.footer')

    </main>

    {{-- Footer Javascript --}}
    @include('components.footerJS')

</body>

</html>
