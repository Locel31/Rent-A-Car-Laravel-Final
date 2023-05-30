<!-- resources/views/create-rental.blade.php -->
<x-guest-layout>

    <h1>Create Rental</h1>

    <form action="{{ route('rentals.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="car_id">Car ID:</label>
            <input type="number" name="car_id" id="car_id" class="form-control" required>
        </div>

        <div class="mb-3"> 
            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date" id="start_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" id="end_date" class="form-control" required>
        </div>

        <button class="btn btn-primary bg-primary text-black " type="submit"> <span class="text-black">Create</span>  </button>
    </form>
</x-guest-layout>
