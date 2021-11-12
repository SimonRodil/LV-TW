@extends('layouts.dashboard')

@section('content')
<section class="w-full p-4 bg-gray-100">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 bg-white border-b border-gray-200">
              <form method="POST" action="{{route('articles.store')}}">
                @csrf
                  <div class="mb-4">
                      <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                      <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="" required>
                  </div>

                  <div class="mb-8">
                      <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                      <textarea name="content" class="border-2 border-gray-500">
                          
                      </textarea>
                  </div>

                  <div class="flex p-1">
                      {{-- <select class="border-2 border-gray-300 border-r p-2" name="action">
                          <option>Save and Publish</option>
                          <option>Save Draft</option>
                      </select> --}}
                      <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</section>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
@endsection
