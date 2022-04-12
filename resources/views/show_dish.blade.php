@extends("layouts.master")

@section("content")
<div class="container">
    <div class="row">
        <div class="col-8">
            <table class="table table-stripped">
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
                            <td>{{ $dish->name }}</td>
                            <td>{{ $dish->type }}</td>
                            <td>{{ $dish->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-2">
            <a class="btn btn-outline-primary" href="/new-dish">Új köcsög</a>
        </div>
    </div>
</div>
@endsection
