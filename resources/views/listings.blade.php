@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless(count($listings)==0)
    <h1>
        {{ $heading }}
    </h1>
    @foreach ($listings as $listing)
    <x-listing-card : listing="$listing" />
    @endforeach
    @else
    <p>No listings found</p>
    @endunless
</div>
@endsection
<footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2023, All Rights reserved</p>

    <a href="create.html" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
</footer>
</body>

</html>
