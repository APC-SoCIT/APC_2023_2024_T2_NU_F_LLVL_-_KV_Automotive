<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Details Form</title>
  <!-- Add the Tailwind CSS link here -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Add the Bootstrap CSS link here -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-gray-100">
  <div class="container mx-auto p-8">
    <h1 class="text-2xl font-bold mb-4">Car Details Form</h1>

    <div class="mb-4">
      @if($errors->any())
        <ul class="list-disc text-red-500">
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      @endif
    </div>

    <form method="post" action="{{ route('vehicle.store') }}" class="bg-white p-7 rounded-lg shadow-md">
      @csrf
      @method('post')

      <div class="mb-4">
        <label for="Fname" class="block text-sm font-medium text-gray-600">First Name:</label>
        <input type="text" id="Fname" name="Fname" class="form-input mt-1 block w-full" required>
      </div>

      <div class="mb-4">
        <label for="Mname" class="block text-sm font-medium text-gray-600">Middle Name:</label>
        <input type="text" id="Mname" name="Mname" class="form-input mt-1 block w-full" required>
      </div>

      <div class="mb-4">
        <label for="Lname" class="block text-sm font-medium text-gray-600">Last Name:</label>
        <input type="text" id="Lname" name="Lname" class="form-input mt-1 block w-full" required>
      </div>

      <div class="mb-4">
        <label for="model" class="block text-sm font-medium text-gray-600">Model:</label>
        <input type="text" id="model" name="model" class="form-input mt-1 block w-full" required>
      </div>

      <div class="mb-4">
        <label for="make" class="block text-sm font-medium text-gray-600">Make:</label>
        <input type="text" id="make" name="make" class="form-input mt-1 block w-full" required>
      </div>

      <div class="mb-4">
        <label for="plate_no" class="block text-sm font-medium text-gray-600">Plate Number:</label>
        <input type="text" id="plate_no" name="plate_no" class="form-input mt-1 block w-full" required>
      </div>

      <div class="mb-4">
        <label for="chassis_no" class="block text-sm font-medium text-gray-600">Chassis Number:</label>
        <input type="text" id="chassis_no" name="chassis_no" class="form-input mt-1 block w-full" required>
      </div>

      <div class="mb-4">
        <label for="engine_no" class="block text-sm font-medium text-gray-600">Engine Number:</label>
        <input type="text" id="engine_no" name="engine_no" class="form-input mt-1 block w-full" required>
      </div>

      <div class="mb-4">
        <label for="transmission" class="block text-sm font-medium text-gray-600">Transmission:</label>
        <select id="transmission" name="transmission" class="form-select mt-1 block w-full" required>
          <option value="Manual">Manual</option>
          <option value="Automatic">Automatic</option>
        </select>
      </div>

      <div class="mb-4">
        <label for="FuelType" class="block text-sm font-medium text-gray-600">Fuel Type:</label>
        <select id="FuelType" name="FuelType" class="form-select mt-1 block w-full" required>
          <option value="Gasoline">Gasoline</option>
          <option value="Diesel">Diesel</option>
          <option value="Electric">Electric</option>
          <option value="Hybrid">Hybrid</option>
        </select>
      </div>

      <div class="mb-4">
       <label for="vehicle_history" class="block text-sm font-medium text-gray-600">Vehicle History:</label>
      <textarea id="vehicle_history" name="vehicle_history" class="form-textarea mt-1 block w-full" rows="6" required>
        ex. 10/10/2023 
        change break fluid
      </textarea>
      </div>


      <div class="flex justify-between">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Save</button>
        <button type="button" class="btn btn-warning" onclick="window.location.href='{{ route('vehicle.index') }}'">Cancel</button>
      </div>
    </form>
  </div>
  <!-- Add the Bootstrap JS and Popper.js scripts here -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
