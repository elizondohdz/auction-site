<div class="min-w-screen left-0 top-0 justify-center 
            items-center inset-0 z-50 outline-none 
            focus:outline-none bg-no-repeat bg-center bg-cover">

  <div class="flex flex-col">
    <div class="rounded-xl border border-gray-200 bg-white p-6 
                shadow-lg">
      <form class="">
        <div class="relative mb-10 w-full flex 
                    items-center justify-between rounded-md">
          <svg class="absolute left-2 block h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8" class=""></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65" class=""></line>
          </svg>
          <input type="text" name="search" class="h-12 w-full cursor-text rounded-md border 
                border-gray-100 bg-gray-100 py-4 pr-40 pl-12 
                shadow-sm outline-none focus:border-blue-500 focus:ring 
                focus:ring-blue-200 focus:ring-opacity-50" 
                placeholder="Search by name, category, condition, etc" />
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 
                    xl:grid-cols-4">
          <div class="flex flex-col">
            <label for="name" class="text-sm font-medium text-stone-600">Name</label>
            <input type="text" id="name" placeholder="Kitchen Table" class="mt-2 block w-full rounded-md border border-gray-100 bg-gray-100 px-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
          </div>

          <div class="flex flex-col">
            <label for="category" class="text-sm font-medium text-stone-600">Category</label>

            <select id="category" class="mt-2 block w-full rounded-md border border-gray-100 bg-gray-100 px-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
              <option>All</option>
              <option>Home</option>
              <option>Technology</option>
              <option>Cars</option>
            </select>
          </div>

          <div class="flex flex-col">
            <label for="condition" class="text-sm font-medium text-stone-600">Condition</label>

            <select id="condition" class="mt-2 block w-full rounded-md border border-gray-100 bg-gray-100 px-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
              <option>All</option>
              <option>New</option>
              <option>Used</option>
            </select>
          </div>
        </div>

        <div class="mt-6 grid w-full grid-cols-2 justify-end space-x-4 md:flex">
          <button class="rounded-lg bg-gray-200 px-8 py-2 font-medium text-gray-700 outline-none hover:opacity-80 focus:ring">Reset</button>
          <button class="rounded-lg bg-blue-600 px-8 py-2 font-medium text-white outline-none hover:opacity-80 focus:ring">Search</button>
        </div>
      </form>
    </div>
  </div>
  
</div>