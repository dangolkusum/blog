<x-layout>
@section('content')
    <section class="px-5 py-8">
        <main class="max-w-lg mx-auto bg-gray-200 border border-gray-300 p-7 rounded-xl">
        <form method="POST" action="/register" class="mt-10">
            @csrf

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">
                Name
            </label>

            <input class="border border-gray-300 rounded-xl p-2 u-full w-80"
                type="text"
                name="name"
                id="name" 
                required
            >
        </div>
            
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">
                Username
            </label>

            <input class="border border-gray-300 rounded-xl p-2 u-full w-80"
                type="text"
                name="username"
                id="username" 
                required
            >
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                Password
            </label>

            <input class="border border-gray-300 rounded-xl p-2 u-full w-80"
                type="password"
                name="password"
                id="password" 
                required
            >
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                Email
            </label>

            <input class="border border-gray-300 rounded-xl p-2 u-full w-80"
                type="email"
                name="email"
                id="email" 
                required
            >
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Submit
            </button>
        </div>

        </form>
    </main>

  
      
    
    </section>
    @endsection
</x-layout>