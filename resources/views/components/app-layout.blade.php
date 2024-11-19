<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'MHArmory')</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <header class="flex justify-center items-center h-20 bg-gray-100">
        <nav class="flex justify-between" aria-label="Breadcrumb">
            <ol class="inline-flex items-center mb-3 sm:mb-0">
              <li>
                <div class="flex items-center">
                  <button id="dropdownProject" data-dropdown-toggle="dropdown-project" class="inline-flex items-center px-3 py-2 text-sm font-normal text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:text-white dark:focus:ring-gray-700">
                Items
                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg></button>
                  <div id="dropdown-project" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                      <li>
                        <a href="/items" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Read</a>
                      </li>
                      <li>
                        <a href="/items/create" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Create</a>
                      </li>
                    </ul>
                  </div> 
                </div>
              </li>
              <span class="mx-2 text-gray-400">/</span>
              <li aria-current="page">
                <div class="flex items-center">
                  <button id="dropdownDatabase" data-dropdown-toggle="dropdown-database" class="inline-flex items-center px-3 py-2 text-sm font-normal text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-900 dark:hover:bg-gray-800 dark:text-white dark:focus:ring-gray-700">
                    Armors<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg></button>
                  <div id="dropdown-database" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                      <li>
                        <a href="/armors" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Read</a>
                      </li>
                      <li>
                        <a href="/armors/create" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Create</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ol>
          </nav>
    </header>
    {{$slot}}

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
