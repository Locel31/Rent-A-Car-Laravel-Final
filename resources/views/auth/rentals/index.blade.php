<x-guest-layout>
<!-- resources/views/rentals.blade.php -->
<h1 class="my-4">Rentals</h1>
<a href="/rentals/create-rental"  class="btn btn-primary" rel="noopener noreferrer">Create Rental</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Car ID</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rentals as $rental)
            <tr>
                <td>{{ $rental->id }}</td>
                <td>{{ $rental->car_id }}</td>
                <td>{{ $rental->start_date }}</td>
                <td>{{ $rental->end_date }}</td>
                <td>
                    <a class="btn btn-primary"  href="{{ route('rentals.edit', $rental->id) }}">Edit</a>
                    <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST" style="display: inline;">
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