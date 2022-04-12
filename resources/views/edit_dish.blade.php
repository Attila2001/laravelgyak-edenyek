@extends("layouts.master")

@section("content")
<div class="row justify-content-center">
    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 ">
        <form class="form-control mt-3 p-3" action="/update-dish" method="post">
        @csrf
        @method("PUT")
            <input class="form-control" type="hidden" name="id" value="{{ $dish->id }}">
            <label for="name">név</label>
            <input class="form-control" type="text" name="name" value="{{ $dish->name }}">

            <label for="type" class="mt-1">tipus</label>
            <input class="form-control" type="text" name="type" value="{{ $dish->type }}">

            <label for="price" class="mt-1">Ár</label>
            <input class="form-control" type="text" name="price" value="{{ $dish->price }}">

            <button class="btn btn-outline-primary mt-3" type="submit">Küldés</button>
        </form>
    </div>
</div>
@endsection
