<div class="min-w-screen left-0 top-0 justify-center 
            items-center inset-0 z-50 outline-none 
            focus:outline-none bg-no-repeat bg-center bg-cover">

  <div class="flex flex-col">
    <div class="rounded-xl border border-gray-200 bg-white p-6 
                shadow-lg">
      <form class="" action="{{ route('item.index') }}" method="GET">
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
                placeholder="Search by name, category, condition, etc" value="{{ old('search') ?? request('search') }}" />
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 
                    xl:grid-cols-4">
          <div class="flex flex-col">
            <label for="name" class="text-sm font-medium text-stone-600">Name</label>
            <input type="text" id="name" name="name" placeholder="Kitchen Table" class="mt-2 block w-full rounded-md border border-gray-100 bg-gray-100 px-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                    value="{{ old('name') ?? request('name') }}" />
          </div>

          <div class="flex flex-col">
            <label for="location" class="text-sm font-medium text-stone-600">Location</label>
            <input type="text" id="location" name="location" placeholder="Delhi" class="mt-2 block w-full rounded-md border border-gray-100 bg-gray-100 px-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" 
                    value="{{ old('location') ?? request('location') }}" />
          </div>

          <div class="flex flex-col">
            <label for="category" class="text-sm font-medium text-stone-600">Category</label>

            <select id="category" name="category" class="mt-2 block w-full rounded-md border border-gray-100 bg-gray-100 px-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
              <option value="" @selected('' === (old('category') ?? request('category')))>All</option>
              <option value="home" @selected('home' === (old('category') ?? request('category')))>Home</option>
              <option value="technology" @selected('technology' === (old('category') ?? request('category')))>Technology</option>
              <option value="cars" @selected('cars' === (old('category') ?? request('category')))>Cars</option>
            </select>
          </div>

          <div class="flex flex-col">
            <label for="condition" class="text-sm font-medium text-stone-600">Condition</label>

            <select id="condition" name="condition" class="mt-2 block w-full rounded-md border border-gray-100 bg-gray-100 px-2 py-2 shadow-sm outline-none focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
              <option value="" @selected('' === (old('condition') ?? request('condition')))>All</option>
              <option value="new" @selected('new' === (old('condition') ?? request('condition')))>New</option>
              <option value="used" @selected('used' === (old('condition') ?? request('condition')))>Used</option>
            </select>
          </div>
        </div>

        <div class="mt-6 grid w-full grid-cols-2 justify-end space-x-4 md:flex">
          <a href="{{ route('item.index') }}" class="text-center rounded-lg bg-gray-200 px-8 py-2 font-medium text-gray-700 outline-none hover:opacity-80 focus:ring">Reset</a>
          <button class="rounded-lg bg-blue-600 px-8 py-2 font-medium text-white outline-none hover:opacity-80 focus:ring">Search</button>
        </div>
      </form>
    </div>
  </div>
  
</div>