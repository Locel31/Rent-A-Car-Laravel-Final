<x-guest-layout>

<!-- resources/views/edit-rental.blade.php -->
<h1>Edit Rental</h1>

<form action="{{ route('rentals.update', $rental->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="car_id">Car ID:</label>
        <input type="number" name="car_id" class="form-control"  id="car_id" value="{{ $rental->car_id }}" required>
    </div>
    <div class="mb-3">
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" class="form-control" id="start_date" value="{{ $rental->start_date }}" required>
    </div>
    <div class="mb-3">
        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" class="form-control" id="end_date" value="{{ $rental->end_date }}" required>
    </div>
    <button class="btn btn-primary bg-primary" type="submit">Update</button>
</form>
</x-guest-layout>