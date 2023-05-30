<x-guest-layout>

<!-- resources/views/edit-car.blade.php -->
<h1>Edit Car</h1>

<form action="{{ route('cars.update', $car->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="make">Make:</label>
        <input type="text" name="make"  class="form-control" id="make" value="{{ $car->make }}" required>
    </div>
    <div class="mb-3">
        <label for="model">Model:</label>
        <input type="text" name="model" class="form-control" id="model" value="{{ $car->model }}" required>
    </div>
    <div class="mb-3">
        <label for="year">Year:</label>
        <input type="number" name="year" class="form-control" id="year" value="{{ $car->year }}" required>
    </div>
    <button class="btn btn-primary bg-primary" type="submit">Update</button>
</form>
</x-guest-layout>