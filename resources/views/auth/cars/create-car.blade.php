<x-guest-layout>

<!-- resources/views/create-car.blade.php -->
<h1>Create Car</h1>

<form action="{{ route('cars.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="make">Make:</label>
        <input type="text" name="make" class="form-control" id="make" required>
    </div>
    <div class="mb-3">
        <label for="model">Model:</label>
        <input type="text" name="model" class="form-control" id="model" required>
    </div>
    <div class="mb-3">
        <label for="year">Year:</label>
        <input type="number" name="year" class="form-control" id="year" required>
    </div>
    <button class="btn btn-primary bg-primary text-black " type="submit"> <span class="text-black">Create</span>  </button>
</form>
</x-guest-layout>
