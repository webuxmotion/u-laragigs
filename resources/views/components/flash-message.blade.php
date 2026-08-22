@if(session()->has('message'))
<div x-data="{ open: true }" x-show="open"
  class="fixed top-0 left-1/2 transform -translate-x-1/2 flex items-center justify-between gap-4 bg-laravel text-white px-3 w-[700px] max-w-[80%] py-3">
  <p>{{ session('message') }}</p>
  <button
    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors"
    @click="open = false">Close</button>
</div>
@endif