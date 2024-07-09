@extends('frontend.app.app')

@section('content')
    <main class="main">
        <div class="container mb-80 mt-50">
            @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif

            <!-- Display message directly -->
            <div class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                <p>Thanks for shopping... Your order has been placed successfully.</p>
            </div>
        </div>
    </main>
@endsection
