<x-app-layout>
    <section class="p-8">
        <div class="container mx-auto">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold mb-8 text-gray-500 dark:text-gray-300">Tambah Data Product</h1>
        
                <!-- Form -->
                <form action="{{ route('product.store') }}" method="POST" class="space-y-4">
                    @csrf
        
                    <!-- Nama -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="name" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Name<x-star-required/></label>
                        <input type="text" name="name" id="name" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100  rounded-md p-2" placeholder="Text input" required>
                    </div>
        
                    <!-- Deskripsi -->
                    <div class=" grid grid-cols-[1fr_2fr] items-kcenter">
                        <label for="description" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Description<x-star-required/></label>
                        <textarea name="description" id="description" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" rows="3" placeholder="Description" required></textarea>
                    </div>
        
                    <!-- cattegory -->
                    <div class=" grid grid-cols-[1fr_2fr] items-center ">
                        <label for="cattegory" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Cattegory<x-star-required/></label>
                        <select name="cattegory" id="cattegory" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2"  required>
                            @foreach ($cattegories as $item)
                                <option value="{{ $item->name }}" class="bg-gray-50 text-gray-500 dark:text-gray-300 hover:bg-gray-200">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- price -->
                    <div class="grid grid-cols-[1fr_2fr] items-center ">
                        <label for="price" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Price<x-star-required/></label>
                        <input type="number" name="price" id="price" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" placeholder="Price" required>
                    </div>

                    <!-- Stock -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="stock" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Stock<x-star-required/></label>
                        <input type="number" name="stock" id="stock" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" placeholder="Stock" required>
                    </div>
        
                    <!-- Tombol Submit -->
                    <div>
                        <button type="submit" class="flex items-center space-x-2 bg-blue-500 text-white py-2 px-4 rounded-md ">
                            <p>Submit</p>
                            <i class="fa-regular fa-circle-check"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>