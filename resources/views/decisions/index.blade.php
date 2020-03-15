@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.section-header')

        <div class="grid gap-12 py-16 lg:grid-cols-3">
            <section class="lg:col-span-2">
                <h1 class="mb-4 text-lg font-normal leading-tight lg:text-2xl xl:text-3xl">
                    Ultimele informații oficiale
                </h1>

                <div class="grid row-gap-10">
                    @foreach ($items as $item)
                        <x-content-card :item="$item" route="decisions.show" />
                    @endforeach

                    {{ $items->links('partials.pagination') }}

                    @include('partials.newsletter')
                </div>
            </section>

            @include('partials.sidebar')
        </div>
    </div>
@endsection


