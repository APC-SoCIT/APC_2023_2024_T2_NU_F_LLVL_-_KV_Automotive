<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="dashboard">
        <div class="sidebar">
            <div class="user-info">
                <h2>User Information</h2>
                <p>Name: John Doe</p>
                <p>Email: john@example.com</p>
                <p>Role: User</p>
                <button onclick="toggleUserInfo()">Toggle User Info</button>
            </div>
        </div>

        <div class="content">
            <div class="widget">
                <h2>Sample Widget</h2>
                <div class="widget-content">
                    <p>This is a sample widget. You can customize and add more widgets as needed.</p>
                </div>
            </div>

            <div class="widget vehicle-info-form">
                <h2>Vehicle Information Form</h2>
                <form action="{{ route('submit_vehicle_info') }}" method="post">
                    @csrf
                    <label for="make">Make:</label>
                    <input type="text" id="make" name="make" required>

                    <label for="model">Model:</label>
                    <input type="text" id="model" name="model" required>

                    <label for="year">Year:</label>
                    <input type="number" id="year" name="year" required>

                    <label for="license_plate">License Plate:</label>
                    <input type="text" id="license_plate" name="license_plate" required>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function toggleUserInfo() {
            const userInfo = document.querySelector('.user-info');
            userInfo.style.opacity = (userInfo.style.opacity === '0') ? '1' : '0';
        }
    </script>

</x-app-layout>

<style>
    .dashboard {
        max-width: 1200px;
        margin: 20px auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .sidebar {
        min-width: 300px;
    }

    .content {
        flex: 1;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }

    .user-info,
    .widget {
        min-width: 300px;
        margin: 10px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: opacity 0.3s;
    }

    .user-info button,
    .widget button {
        background-color: #3498db;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .widget-content {
        margin-top: 10px;
    }

    .vehicle-info-form {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 300px;
    }

    .vehicle-info-form label {
        display: block;
        margin-bottom: 8px;
    }

    .vehicle-info-form input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
    }

    .vehicle-info-form button {
        background-color: #3498db;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
