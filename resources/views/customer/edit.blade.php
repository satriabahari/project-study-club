<x-app-layout>
    <section class="p-8">
        <div class="container mx-auto">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold mb-8 text-gray-500 dark:text-gray-300">Edit Data Customer</h1>
        
                <!-- Form -->
                <form action="{{ route('customer.update', $data->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')
        
                    <!-- Nama -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="name" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Name<x-star-required/></label>
                        <input type="text" name="name" id="name" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" placeholder="Text input" value="{{ $data->name }}" required>
                    </div>

                    <!-- Nama -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="email" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Email<x-star-required/></label>
                        <input type="text" name="email" id="email" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" placeholder="Text input" value="{{ $data->email }}" required>
                    </div>
        
                    <!-- Deskripsi -->
                    <div class=" grid grid-cols-[1fr_2fr] items-kcenter">
                        <label for="address" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Address<x-star-required/>{{ $data->address }}</label>
                        <textarea name="address" id="address" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" rows="3" placeholder="address" required></textarea>
                    </div>

                    <!-- price -->
                    <div class="grid grid-cols-[1fr_2fr] items-center ">
                        <label for="phone" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Phone<x-star-required/></label>
                        <input type="number" name="phone" id="phone" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" placeholder="phone" value="{{ $data->phone }}" required>
                    </div>
        
                    <!-- Tombol Submit -->
                    <div>
                        <button type="submit" class="flex items-center space-x-2 bg-blue-500 text-gray-50 dark:text-gray-200 py-2 px-4 rounded-md ">
                            <p>Update</p>
                            <i class="fa-regular fa-circle-check"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>