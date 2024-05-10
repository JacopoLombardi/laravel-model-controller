
    @extends('layout.main')

    @section('content')

        <div class="container  mt-5">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Original Title</th>
                        <th scope="col">Nationality</th>
                        <th scope="col">date</th>
                        <th scope="col">Vote</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($movies as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->title}}</td>
                            <td>{{ $item->original_title }}</td>
                            <td>{{ $item->nationality }}</td>
                            <td>{{ $item->date }}</td>
                            <td>{{ $item->vote }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    @endsection
