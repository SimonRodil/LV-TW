@extends('layouts.dashboard')

@section('content')
<section class="w-full p-4 bg-gray-100">
    <div class="w-full h-64 p-4 text-md">
      <a href="{{route('articles.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Add New Article
      </a>      
      <div class="bg-white shadow-md rounded my-6">
        <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
          <thead>
            <tr>
              <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Title</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Content</th>
              <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
            </tr>
          </thead>
          <tbody>
              @foreach($articles as $article)
              <tr class="hover:bg-grey-lighter">
                  <td class="py-4 px-6 border-b border-grey-light">{{$article->title}}</td>
                  <td class="py-4 px-6 border-b border-grey-light">{{$article->content}}</td>
                  <td class="py-4 px-6 border-b border-grey-light">
                      <a href="#" class="text-grey-lighter text-white font-bold py-1 px-3 rounded text-xs bg-blue-500 hover:bg-blue-dark">View</a>
                      <a href="#" class="text-grey-lighter text-white font-bold py-1 px-3 rounded text-xs bg-green-500 hover:bg-green-dark">Edit</a>
                      <a href="#" class="text-grey-lighter text-white font-bold py-1 px-3 rounded text-xs bg-red-500 hover:bg-green-dark">Delete</a>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
</section>
@endsection
