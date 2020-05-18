<section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Category</h1>
      <p>
          @foreach ($categories as $category)
          <a href="{{ $category->slug }}" class="btn btn-primary my-2">{{ $category->name }}</a>
          @endforeach
      </p>
    </div>
  </section>
