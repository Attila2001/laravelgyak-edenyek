@extends("layouts.master")

@section("content")
<div class="container mt-2">
    <div class="row">
        <div class="col-4">
            <form action="">
                <select class="form-select" name="name" id="">
                    <option selected>edények</option>
                    <option>váza</option>
                    <option>tányér</option>
                    <option>tál</option>
                </select>
                <button class="btn btn-outline-info mt-2" type="submit">Keresés</button>
            </form>
        </div>
        <div class="col-8">
            <a class="btn btn-outline-warning mb-1" href="/register">Regisztráció</a>
            <a class="btn btn-outline-warning mb-1" href="/login">Bejelentkés</a>
            <a class="btn btn-outline-danger mb-1" href="/logout">Kijelentkezés</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-10 col-md-10 col-sm-12">
            <table class="table table-striped">
                <thead>
                    <th scope="col">Id</th>
                    <th scope="col">név</th>
                    <th scope="col">tipus</th>
                    <th scope="col">Ár</th>

                </thead>
                <tbody>
                    @foreach($dishes as $dish)
                        <tr>
                            <td>{{ $dish->id }}</td>
                            <td>{{ $dish->name}}</td>
                            <td>{{ $dish->type }}</td>
                            <td>{{ $dish->price }}</td>
                            <td>
                                <a class="btn btn-outline-primary btn-sm" href="/edit-dish/{{ $dish->id }}">Szerkesztés</a>
                                <a class="btn btn-outline-danger btn-sm" href="/delete-dish/{{ $dish->id }}">Törlés</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12">
            <a class="btn btn-outline-primary" href="/new-dish">Új köcsög</a>
        </div>
    </div>
</div>
@endsection
