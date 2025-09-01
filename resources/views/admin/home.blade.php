<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')
  <title>Laravel</title>
  <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!-- AOS -->
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Roboto:400,500,600&display=swap" rel="stylesheet" />
  <link href="https://fonts.bunny.net/css?family=Merriweather:400,500,600&display=swap" rel="stylesheet" />
</head>

<body class="bg-slate-300">
  <section class="w-full">
    <div class="lg:flex w-full">
      <nav class="lg:w-nav bg-white lg:h-screen overflow-y-auto sticky">
        <div class="flex flex-col lg:my-top">
          <div class="lg:h-16 text-left lg:mx-4 bg-contain bg-no-repeat"
            style="background-image: url('./images/SIDE-01.png')">
          </div>
          <div class="lg:mt-top lg:mx-4">
            <span class="lg:py-top">Menu</span>
          </div>
          <div class="lg:mx-4 lg:my-top flex flex-col gap-2 text-slate-800">
            <a href=""
              class="flex items-center  gap-2 text-md lg:p-2 transition duration-300 delay-100 bg-pup lg:rounded-sm text-white">
              <i class="fa-solid fa-th-large text-md"></i>
              <span class="text-md">Dashboard</span>
            </a>

            <a href=""
              class="flex items-center  gap-2 text-md lg:p-2 transition duration-300 delay-100 hover:bg-pup hover:text-white lg:rounded-sm">
              <i class="fa-solid fa-dashboard text-md"></i>
              <span class="text-md">Media Management</span>
            </a>

            <div class="flex flex-col gap-2">
              <div
                class="flex items-center cursor-pointer justify-between text-md lg:p-2 transition duration-300 delay-100 hover:bg-pup hover:text-white hover:text-whitelg:rounded-sm">
                <div class="flex gap-2 items-center">
                  <i class="fa-solid fa-globe text-md"></i>
                  <span class="text-md">Site Management</span>
                </div>
                <div>
                  <i class="fa-solid fa-caret-down text-hd"></i>
                </div>
              </div>

              <div class=" lg:mx-8 flex flex-col gap-2 transition duration-300 delay-100 text-slate-600">
                <a href="" class="text-md font-medium flex justify-between items-center">
                  <span>Home</span>
                  <i class="fas fa-bars"></i>
                </a>
                <a href="" class="text-md flex justify-between items-center">
                  <span>About</span>
                  <i class="fa-solid fa-info-circle"></i>
                </a>
                <a href="" class="text-md flex justify-between items-center">
                  <span>Services</span>
                  <i class="fa-solid fa-handshake"></i>
                </a>
                <a href="" class="text-md flex justify-between items-center">
                  <span>Products</span>
                  <i class="fa-solid fa-box flex justify-between items-center"></i>
                </a>
                <a href="" class="text-md flex justify-between items-center">
                  <span>Contact</span>
                  <i class="fa-solid fa-phone"></i>
                </a>
              </div>
            </div>
          </div>


          <div class="lg:my-top lg:mx-4 text-md">
            <span class="lg:py-top text-md text-slate-600">Account</span>
          </div>
          <div class="lg:mx-4 flex flex-col gap-2 text-md">
            <a href=""
              class="flex items-center  gap-2 text-md lg:p-2 transition duration-300 delay-100 hover:bg-pup hover:text-white lg:rounded-sm">
              <i class="fa-solid fa-user text-md"></i>
              <span class="text-md">User</span>
            </a>

            <a href=""
              class="flex items-center  gap-2 text-md lg:p-2 transition duration-300 delay-100 hover:bg-pup hover:text-white lg:rounded-sm">
              <i class="fa-solid fa-message text-md"></i>
              <span class="text-md">Messages</span>
            </a>

            <a href=""
              class="flex items-center  gap-2 text-md lg:p-2 transition duration-300 delay-100 hover:bg-pup hover:text-white lg:rounded-sm">
              <i class="fa-solid fa-gear text-md"></i>
              <span class="text-md">Settings</span>
            </a>

            <a href=""
              class="flex items-center  gap-2 text-md lg:p-2 transition duration-300 delay-100 hover:bg-pup hover:text-white lg:rounded-sm">
              <i class="fa-solid fa-sign-out text-md"></i>
              <span class="text-md">Log out</span>
            </a>
          </div>


          {{-- <a href=""
            class="flex items-center gap-2 text-white text-md lg:p-2 transition duration-300 delay-100 hover:bg-pup lg:rounded-sm">
            <i class="fa-solid fa-dashboard text-md"></i>
            <span class="text-md">Home</span>
          </a>

          <a href=""
            class="flex items-center gap-2 text-white text-md lg:p-2 transition duration-300 delay-100 hover:bg-pup lg:rounded-sm">
            <i class="fa-solid fa-dashboard text-md"></i>
            <span class="text-md">About</span>
          </a>

          <a href=""
            class="flex items-center gap-2 text-white text-md lg:p-2 transition duration-300 delay-100 hover:bg-pup lg:rounded-sm">
            <i class="fa-solid fa-dashboard text-md"></i>
            <span class="text-md">Services</span>
          </a>

          <a href=""
            class="flex items-center gap-2 text-white text-md lg:p-2 transition duration-300 delay-100 hover:bg-pup lg:rounded-sm">
            <i class="fa-solid fa-dashboard text-md"></i>
            <span class="text-md">Products</span>
          </a>

          <a href=""
            class="flex items-center gap-2 text-white text-md lg:p-2 transition duration-300 delay-100 hover:bg-pup lg:rounded-sm">
            <i class="fa-solid fa-dashboard text-md"></i>
            <span class="text-md">Contacts</span>
          </a> --}}
        </div>
      </nav>

      {{-- Contents --}}

      <div class="lg:w-full lg:mx-4 flex flex-col gap-4 lg:mt-4">
        <div class="lg:w-full bg-white lg:p-4 rounded-sm flex justify-between">
          <div class="flex flex-col">
            <span class="text-hd">Primary</span>
            <span class="text-hd font-medium text-md">Dashboard</span>
          </div>
          <div class="flex gap-2 items-center">
            <div class="lg:w-12 rounded-circle">
              <img src="./images/KANYASI_57.jpg">
            </div>
          </div>
        </div>

        {{-- Middle Content --}}

        <div class="bg-white rounded-sm lg:p-4 flex flex-col gap-2">
          <span class="text-hd">Today's data</span>
          <div class="grid lg:grid-cols-4 lg:gap-4 ">
            <div class="lg:p-3 flex flex-col gap-4 bg-pink-200 rounded-sm">
              <div class="flex justify-between items-center">
                <div class="flex flex-col">
                  <span>Payment amount</span>
                  <span>$500.00</span>
                </div>
                <i class="fa-solid fa-dollar bg-red-600 lg:px-4 lg:py-3 text-white rounded-circle"></i>
              </div>
              <div class="flex justify-between items-center">
                <div>****</div>
                <div>****</div>
                <div>****</div>
                <div></div>
              </div>
            </div>
            <div class="lg:p-3 flex flex-col gap-4 bg-div rounded-sm">
              <div class="flex justify-between items-center">
                <div class="flex flex-col">
                  <span>Payment amount</span>
                  <span>$500.00</span>
                </div>
                <i class="fa-solid fa-dollar bg-purple-600 lg:px-4 lg:py-3 text-white rounded-circle"></i>
              </div>
              <div class="flex justify-between items-center">
                <div>****</div>
                <div>****</div>
                <div>****</div>
                <div></div>
              </div>
            </div>  
            <div class="lg:p-3 flex flex-col gap-4 bg-green-200 rounded-sm">
              <div class="flex justify-between items-center">
                <div class="flex flex-col">
                  <span>Payment amount</span>
                  <span>$500.00</span>
                </div>
                <i class="fa-solid fa-dollar bg-green-600 lg:px-4 lg:py-3 text-white rounded-circle"></i>
              </div>
              <div class="flex justify-between items-center">
                <div>****</div>
                <div>****</div>
                <div>****</div>
                <div></div>
              </div>
            </div>  
            <div class="lg:p-3 flex flex-col gap-4  bg-purple-200 rounded-sm">
              <div class="flex justify-between items-center">
                <div class="flex flex-col">
                  <span>Payment amount</span>
                  <span>$500.00</span>
                </div>
                <i class="fa-solid fa-dollar bg-blue-800 lg:px-4 lg:py-3 text-white rounded-circle"></i>
              </div>
              <div class="flex justify-between items-center">
                <div>****</div>
                <div>****</div>
                <div>****</div>
                <div></div>
              </div>
            </div>  
          </div>
        </div>

        <div class="bg-white rounded-sm lg:p-4 flex flex-col gap-2">
          <span class="text-hd">Finance data</span>
          {{-- table --}}

          <table class="w-full">
            <tr class="bg-pup h-12 text-left text-white text-sm">
              <th class="pl-2">Date</th>
              <th>Transaction Type</th>
              <th>Description</th>
              <th>Amount</th>
              <th>Category</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            <tbody>
              <tr class="bg-slate-200 h-12">
                <td class="pl-2">2025-05-01</td>
                <td>Expenses</td>
                <td>Office Supplies</td>
                <td>$250</td>
                <td>Office expenses</td>
                <td>Pending</td>
                <td>Edit</td>
              </tr>
              <tr class="bg-white h-12">
                <td class="pl-2">2025-05-01</td>
                <td>Expenses</td>
                <td>Office Supplies</td>
                <td>$250</td>
                <td>Office expenses</td>
                <td>Pending</td>
                <td>Edit</td>
              </tr>
              <tr class="bg-slate-200 h-12">
                <td class="pl-2">2025-05-01</td>
                <td>Expenses</td>
                <td>Office Supplies</td>
                <td>$250</td>
                <td>Office expenses</td>
                <td>Pending</td>
                <td>Edit</td>
              </tr>
              <tr class="bg-white h-12">
                <td class="pl-2">2025-05-01</td>
                <td>Expenses</td>
                <td>Office Supplies</td>
                <td>$250</td>
                <td>Office expenses</td>
                <td>Pending</td>
                <td>Edit</td>
              </tr>
              <tr class="bg-slate-200 h-12">
                <td class="pl-2">2025-05-01</td>
                <td>Expenses</td>
                <td>Office Supplies</td>
                <td>$250</td>
                <td>Office expenses</td>
                <td>Pending</td>
                <td>Edit</td>
              </tr>
              <tr class="bg-white h-12">
                <td class="pl-2">2025-05-01</td>
                <td>Expenses</td>
                <td>Office Supplies</td>
                <td>$250</td>
                <td>Office expenses</td>
                <td>Pending</td>
                <td>Edit</td>
              </tr>
            </tbody>
          </table>
          <div class="w-full bg-pup p-3 text-white">
            <span>Total: $1,000</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>