@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
<div class="px-4 w-full max-w-lg mx-auto text-grey-darkest transition-sm md:px-0">
    <h1 class="font-light">About</h1>

    <p class="leading-loose mb-2"><img src="https://images.unsplash.com/photo-1532560460156-99a8b937ee8c?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=300&h=300&fit=crop&ixid=eyJhcHBfaWQiOjF9&s=8490222c3ca7a048fcdbfed66fe454b5" class="rounded-full w-48 float-right ml-2 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo natus, amet molestiae! Quod cum laudantium, aperiam in omnis similique! Voluptate sit suscipit aperiam distinctio laudantium maiores eveniet in, inventore recusandae.</p>
    <p class="leading-loose">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum officia dolorem accusantium veniam quae, possimus, temporibus explicabo magni voluptas. Molestiae fugit natus deserunt atque veniam possimus earum harum itaque est!</p>
</div>
@endsection
