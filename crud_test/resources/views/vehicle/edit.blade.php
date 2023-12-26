<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Details Form</title>
  <!-- Add the Tailwind CSS link here -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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

    <form method="post" action="{{ route('vehicle.update', ['vehicle' => $vehicle]) }}" class="bg-white p-6 rounded-lg shadow-md">
      @csrf
      @method('put')

      <div class="mb-4">
        <label for="Fname" class="block text-sm font-medium text-gray-600">First Name:</label>
        <input type="text" id="Fname" name="Fname" class="form-input mt-1 block w-full" value="{{$vehicle->Fname}}">
      </div>

      <div class="mb-4">
        <label for="Mname" class="block text-sm font-medium text-gray-600">Middle Name:</label>
        <input type="text" id="Mname" name="Mname" class="form-input mt-1 block w-full" value="{{$vehicle->Mname}}">
      </div>

      <div class="mb-4">
        <label for="Lname" class="block text-sm font-medium text-gray-600">Last Name:</label>
        <input type="text" id="Lname" name="Lname" class="form-input mt-1 block w-full" value="{{$vehicle->Lname}}">
      </div>

      <div class="mb-4">
        <label for="model" class="block text-sm font-medium text-gray-600">Model:</label>
        <input type="text" id="model" name="model" class="form-input mt-1 block w-full" value="{{$vehicle->model}}">
      </div>

      <div class="mb-4">
        <label for="make" class="block text-sm font-medium text-gray-600">Make:</label>
        <input type="text" id="make" name="make" class="form-input mt-1 block w-full" value="{{$vehicle->make}}">
      </div>

      <div class="mb-4">
        <label for="plate_no" class="block text-sm font-medium text-gray-600">Plate Number:</label>
        <input type="text" id="plate_no" name="plate_no" class="form-input mt-1 block w-full" value="{{$vehicle->plate_no}}">
      </div>

      <div class="mb-4">
        <label for="chassis_no" class="block text-sm font-medium text-gray-600">Chassis Number:</label>
        <input type="text" id="chassis_no" name="chassis_no" class="form-input mt-1 block w-full" value="{{$vehicle->chassis_no}}">
      </div>

      <div class="mb-4">
        <label for="engine_no" class="block text-sm font-medium text-gray-600">Engine Number:</label>
        <input type="text" id="engine_no" name="engine_no" class="form-input mt-1 block w-full" value="{{$vehicle->engine_no}}">
      </div>

      <div class="mb-4">
        <label for="transmission" class="block text-sm font-medium text-gray-600">Transmission:</label>
        <select id="transmission" name="transmission" class="form-select mt-1 block w-full" value="{{$vehicle->transmission}}">
          <option value="Manual">Manual</option>
          <option value="Automatic">Automatic</option>
        </select>
      </div>

      <div class="mb-4">
        <label for="FuelType" class="block text-sm font-medium text-gray-600">Fuel Type:</label>
        <select id="FuelType" name="FuelType" class="form-select mt-1 block w-full" value="{{$vehicle->FuelType}}">
          <option value="Gasoline">Gasoline</option>
          <option value="Diesel">Diesel</option>
          <option value="Electric">Electric</option>
          <option value="Hybrid">Hybrid</option>
        </select>
      </div>

      <div class="mb-4">
  <label for="vehicle_history" class="block text-sm font-medium text-gray-600">Vehicle History:</label>
  <textarea id="vehicle_history" name="vehicle_history" class="form-textarea mt-1 block w-full" rows="6">{{$vehicle->vehicle_history}}</textarea>
</div>

      <div class="flex justify-end">
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue active:bg-blue-800">Update</button>
        <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 ml-4 rounded focus:outline-none focus:shadow-outline-yellow active:bg-yellow-800" onclick="window.location.href='{{ route('vehicle.index') }}'">Cancel</button>
      </div>
    </form>
  </div>
</body>
</html>
