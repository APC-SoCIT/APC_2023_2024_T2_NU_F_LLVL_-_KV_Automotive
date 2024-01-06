<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/vue@1.0.4/dist/heroicons.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-100 text-gray-800 p-6">

<!-- Sidebar -->

<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="https://flowbite.com" class="flex ms-2 md:me-24">
          <img src="data:image/png;base64,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" class="h-8 me-3" alt="LLVL & KV Logo" />
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap">LLVL & KV</span>
        </a>
      </div>
      <div class="flex items-center">
          <div class="flex items-center ms-3 mr-4">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAADWUlEQVR4nO2WXUgUURTHx6Sij5eo8EUhql17CmQjP8jYe9dQGWfGisWUIqweKnrMB0PJelL0oTBpYyGEapcsUEJ3RUFtZtPK1zALIj8gH6Iv0zuS6Yk7m6njbrvrjDNb7IE/O8w9d+/vN2cHlmESlahE6VZZWVmbEEKlGOPHGOPXCKEpjDEsxOFw2Jl4LbvdfhwhNLoUWB2EUC8Tj4Uxvv43cJXEG4RQHcY4hYmHQghVRguvyiRC6Jip8Bjjgxjj2VUK0Gn8xBgfMU0AIdSzWvglEqM2m2294fAOhyMjWshyZx40V+XD+3us8hmix2m4AEKoJhrokfssgJ9bFu+1AnX/XTMEev/2pNXQ6qgmMWiGwFikJx0p3sVJjBgugDEm9PBYodXBwRd52gwB0EsAYwwJgVgKPBa24mS2rNcEKk/nEPBaCxmjCrzW8TlPOjRezl8Gc7vcAq5yS1jYUOu3KvJh3psO4LGOGSoAXusKQArnOhNeIOy612q4QKEi0cHOa/0JgY+do/DgsRYYJvBHxFc0rFnAzw0ZDr4owLm1T4BzmSfg5/M0C3Rw2DQBRcJX1KNBoM9UeEWgnd0Nfu7jKn46n6CT28vEQ0E7fxj83OeY4P1sLhNPBV2sBVpzIsO3ZkPcPHl1gYsBaN4B8Gg/wBME0FEYDL2m9+iaizH+j1tMAlGEideCf1GgWJq2pVZ3D2456/0xWL9rJhI87aG9aVVdL/m+qQzTwHlxOlOQ5IAgyZBa1QVJJW7IOV81G0nAfqFylvamVXcD3cuLssgHpg8YBl7gg428RO4IIpmnADSHHo5C0gm3IlF7pSAsPF2jPbQ3t2Vc2RuUIHO8RJqcr2DDmsJzA99TeEl+tnDw0lhqA0G4EjccvXQRntZa4UvjZiX0mt5bWLfW9a/YLwSnITnFyZ1rAl/84tt2QSTDoQ5WIsqQXj8Ayb8nESrJpW7Y1/Bc6Q33PbxEhljp6zZ96QGSeIl0hoVfEtT2ATJrHsCecw2wtaxJCb3OrPEAapuIuF9QQtp15RdEciq6g/UMKdMF3tkCybxE3pkg8PYqwDrNArwk5xkPLwffh4CMNAsIErlploAgkhvaJyDK/aYJSHJAhwnIEyYKTOggQGbMEyAzmgUSlaj/vH4B/ih/Ifxu3R8AAAAASUVORK5CYII=" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900" role="none">
                  Neil Sims
                </p>
                <p class="text-sm font-medium text-gray-900 truncate" role="none">
                  neil.sims@flowbite.com
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
               <svg class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
               </svg>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
               <svg class="flex-shrink-0 w-5 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
               <path d="M8 5.625c4.418 0 8-1.063 8-2.375S12.418.875 8 .875 0 1.938 0 3.25s3.582 2.375 8 2.375Zm0 13.5c4.963 0 8-1.538 8-2.375v-4.019c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353c-.193.081-.394.158-.6.231l-.189.067c-2.04.628-4.165.936-6.3.911a20.601 20.601 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244c-.053-.028-.113-.053-.165-.082v4.019C0 17.587 3.037 19.125 8 19.125Zm7.09-12.709c-.193.081-.394.158-.6.231l-.189.067a20.6 20.6 0 0 1-6.3.911 20.6 20.6 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244C.112 6.035.052 6.01 0 5.981V10c0 .837 3.037 2.375 8 2.375s8-1.538 8-2.375V5.981c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Vechicle List</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Job Orders</span>
               <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">3</span>
            </a>
         </li>
 <!-- Example: navigation menu -->
        <li>
            <a href="{{ route('admin.view-all-users') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap"> Accounts</span>
            </a>
        </li>
         <li>
              <!-- Authentication -->
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                  <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                      aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                  </svg>
                  <span class="flex-1 ms-3 whitespace-nowrap">{{ __('Log Out') }}</span>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
         </li>
      </ul>
   </div>
</aside>



    <!-- Content with z-50 to ensure it is on top of the sidebar -->
<div class="ml-64 z-50"> <!-- Added left margin equal to the sidebar width -->
    <h1 class="text-3xl font-bold mb-6 mt-20">Vehicle List</h1>

        @if(session()->has('success'))
            <div class="bg-green-200 text-green-800 p-3 mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-4 flex justify-end">
            <a href="{{ route('vehicle.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Add Vehicle
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-500 shadow-md rounded-md">
                <thead>
                    <tr>
                        <th class="py-1 px-1 border-b">ID</th>
                        <th class="py-1 px-2 border-b">First Name</th>
                        <th class="py-1 px-2 border-b">Middle Name</th>
                        <th class="py-1 px-2 border-b">Last Name</th>
                        <th class="py-1 px-2 border-b">Model</th>
                        <th class="py-1 px-2 border-b">Make</th>
                        <th class="py-1 px-2 border-b">Plate No.</th>
                        <th class="py-1 px-2 border-b">Chassis No.</th>
                        <th class="py-1 px-2 border-b">Engine No.</th>
                        <th class="py-1 px-2 border-b">Transmission</th>
                        <th class="py-1 px-2 border-b">Fuel Type</th>
                        <th class="py-1 px-2 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vehicle as $vehicle)
                        <tr>
                            <td class="py-1 px-2 border-b text-center">{{ $vehicle->id }}</td>
                            <td class="py-1 px-1 border-b text-center">{{ $vehicle->Fname }}</td>
                            <td class="py-1 px-2 border-b text-center">{{ $vehicle->Mname }}</td>
                            <td class="py-1 px-2 border-b text-center">{{ $vehicle->Lname }}</td>
                            <td class="py-1 px-2 border-b text-center">{{ $vehicle->model }}</td>
                            <td class="py-1 px-2 border-b text-center">{{ $vehicle->make }}</td>
                            <td class="py-1 px-2 border-b text-center">{{ $vehicle->plate_no }}</td>
                            <td class="py-1 px-2 border-b text-center">{{ $vehicle->chassis_no }}</td>
                            <td class="py-1 px-2 border-b text-center">{{ $vehicle->engine_no }}</td>
                            <td class="py-1 px-2 border-b text-center">{{ $vehicle->transmission }}</td>
                            <td class="py-1 px-2 border-b text-center">{{ $vehicle->FuelType }}</td>
                            <td class="py-1 px-2 border-b text-center">
                                <div class="flex items-center">
                                    <div class="flex">
                                        <a href="{{ route('vehicle.edit', ['vehicle' => $vehicle]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold w-7 h-7 rounded flex items-center justify-center">
                                            <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 20c0-2.666 2-4 4-4h12c2 0 4 1.334 4 4"></path>
                                            </svg>
                                        </a>

                                        <div class="flex items-center ml-2">
                                            <form method="post" action="{{ route('vehicle.destroy', ['vehicle' => $vehicle]) }}" class="inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold w-7 h-7 rounded flex items-center justify-center">
                                                    <svg class="w-40 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    
</body>
</html>
