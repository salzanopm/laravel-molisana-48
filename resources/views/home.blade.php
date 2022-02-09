@extends('layouts.app')

@section('page_title')
Products
@endsection

@section('main_content')
    <section>
        <div class="container">

            @include('components.products-list', [
                'title' => 'Le lunghe',
                'pasta_array' => $paste_lunghe
            ])

            @include('components.products-list', [
                'title' => 'Le corte',
                'pasta_array' => $paste_corte
            ])

            @include('components.products-list', [
                'title' => 'Le cortissime',
                'pasta_array' => $paste_cortissime
            ])

        </div>
    </section>
@endsection