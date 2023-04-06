@extends('dashboard.layouts.main')

@section('container')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
    </div>

    <div class="row">
        <div class="col-lg-8">

          <form action="/dashboard/posts" method="post" class="mb-5" enctype="multipart/form-data" >
            @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input value="{{ old('title') }}" required  autofocus type="text" class="form-control @error('title') is-invalid  @enderror" id="title" name="title">
            @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
                
            @enderror
          </div>
          <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input id="slug" name="slug" value="{{ old('slug') }}" required type="text" class="form-control @error('slug') is-invalid  @enderror">
            <p>
              {{ old('slug') }}
            </p>
            @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">

              @foreach ($categories as $category)
              @if (old('category_id') == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>                 
              @endif
                  
              @endforeach
            </select>
          </div>
          <div class="mb-3">
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <label for="image" class="form-label">Post image</label>
            <input class="form-control @error('image') is-invalid  @enderror" type="file" id="image" name="image" onchange="previewImage()">
             @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            @error('body')
            <p class="text-danger">{{ $message }}</p>    
            @enderror
              <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
          </div>
      
          <button type="submit" class="btn btn-primary">Create post</button>
        </form>
        </div>
    </div>


<script>
    const title= document.querySelector('#title');
    const slug= document.querySelector('#slug');

    title.addEventListener('change',function(){
       
        fetch('/dashboard/posts/checkSlug?title='+title.value)
            .then(response=> response.json())
            .then(data=>slug.value = data.slug)
    });
     
    // disable file accept
    document.addEventListener('trix-file-accept',function(e){
        e.preventDefault();
    });

    const previewImage=()=>{
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display ='block';

      const oFReader= new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = oFRevent =>{
        imgPreview.src = oFRevent.target.result;
      }
    }

</script>

@endsection
