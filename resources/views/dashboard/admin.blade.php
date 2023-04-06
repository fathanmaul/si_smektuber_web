<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard II</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-[#F6F8FA]">
  <span class="absolute text-white text-2xl top-5 left-0 ml-2 cursor-pointer" onclick="Open()">
    <div class="flex items-center justify-center py-2 px-2.5 bg-gray-900 rounded-md">
      <i class="bi bi-filter-left"></i>
    </div>
  </span>
  <div class="sidebar fixed top-0 bottom-0 laptop:ml-0 -ml-[280px] duration-300 ease-in-out transition-all p-2 w-[280px] overflow-y-auto text-center bg-white">
    <div class="text-gray-100 text-xl">
      <div class="p-2.5 mt-1 flex items-center">
        <i class="bi bi-app-indicator px-2 py-1 bg-slate-900 rounded-md text-white"></i>
        <h1 class="font-bold text-[20px] ml-4">Tailwindbar</h1>
        <i class="bi bi-x ml-16 cursor-pointer laptop:hidden" onclick="Open()"></i>
      </div>
      <hr class="my-2 text-grey-600">
    </div>
    <div class="p-1 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-slate-200">
      <i class="bi bi-search text-sm"></i>
      <input type="text" placeholder="Search" class="text-[15px] w-full input bg-transparent ml-4 border-none focus:ring-0">
    </div>
    <div class="p-3 mt-3 flex items-center rounded-md px-4 duration-200 cursor-pointer hover:bg-[#5DABD6] hover:text-white">
      <i class="bi bi-house-door-fill hover:text-white"></i>
      <span class="text-[14px ml-4 text-gray-200]">Home</span>
    </div>
    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
      <i class="bi bi-bookmark-fill"></i>
      <span class="text-[14px ml-4 text-gray-200]">Bookmark</span>
    </div>
    <hr class="my-4 text-gray-600">

    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600"
    onclick="dropdown()">
      <i class="bi bi-chat-left-text-fill"></i>
      <div class="flex justify-between w-full items-center">
        <span class="text-[14px ml-4 text-gray-200]">Chatbox</span>
        <span class="text-sm" id="arrow">
          <i class="bi bi-chevron-down"></i>
        </span>
      </div>
    </div>

    <div class="text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu">
      <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md">Social</h1>
      <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md">Personal</h1>
      <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md">Friends</h1>
    </div>

    <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600">
      <i class="bi bi-box-arrow-in-right"></i>
      <span class="text-[14px ml-4 text-gray-200]">Logout</span>
    </div>
  </div>
  <div class="container">
    <h1>Hello World</h1>
  </div>
</body>

<script type="text/javascript">
  function dropdown() {
    document.querySelector('#submenu').classList.toggle('hidden');
    document.querySelector('#arrow').classList.toggle('rotate-0');
  }
  function Open() {
    document.querySelector('.sidebar').classList.toggle('-ml-[280px]');
    
  }
  dropdown();
</script>
<script src="{{ asset('js/app.js') }}"></script>
</html>