<x-layout>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div>
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Login into your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="{{ route('auth.store') }}" method="POST">
      @csrf
      <div>
        <x-label for="email" :required="true">Email address</x-label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <x-label for="password" :required="true">Password</x-label>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <x-button>Sign in</x-button>
      </div>
    </form>

    <p class="mt-10 text-center text-sm text-gray-500">
      Need an account?
      <a href="{{ route('user.create') }}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Register here!</a>
    </p>
  </div>    

    </div>
</div>
</x-layout>