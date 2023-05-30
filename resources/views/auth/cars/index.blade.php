<x-guest-layout>

<!-- resources/views/cars.blade.php -->
<h1 class="my-4">Cars</h1>

<a href="/cars/create-car"  class="btn btn-primary" rel="noopener noreferrer">ADD CAR</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->make }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->year }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('cars.edit', $car->id) }}">Edit</a>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger bg-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</x-guest-layout>