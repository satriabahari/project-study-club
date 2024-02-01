<x-app-layout>
    <section class="p-8">
        <div class="container mx-auto">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
                <h1 class="text-2xl font-bold mb-8 text-gray-500 dark:text-gray-300">Edit Product Keluar</h1>

                <!-- Form -->
                <form action="{{ route('product_keluar.update', $entry->id) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <!-- Product -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="product_id" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Product<x-star-required/></label>
                        <select name="product_id" id="product_id" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" required>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}" class="bg-gray-50 text-gray-500 dark:text-gray-300 hover:bg-gray-200" {{ $product->id == $entry->product_id ? 'selected' : '' }}>{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Customer -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="customer_id" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Customer<x-star-required/></label>
                        <select name="customer_id" id="customer_id" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" required>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}" class="bg-gray-50 text-gray-500 dark:text-gray-300 hover:bg-gray-200" {{ $customer->id == $entry->customer_id ? 'selected' : '' }}>{{ $customer->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Stock -->
                    <div class="grid grid-cols-[1fr_2fr] items-center ">
                        <label for="stock" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Stock<x-star-required/></label>
                        <input type="number" name="stock" id="stock" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" placeholder="Stock" value="{{ $entry->stock }}" required>
                    </div>

                    <!-- Tanggal -->
                    <div class="grid grid-cols-[1fr_2fr] items-center">
                        <label for="tanggal" class="block text-gray-500 dark:text-gray-300 font-medium mb-2">Tanggal<x-star-required/></label>
                        <input type="date" name="tanggal" id="tanggal" class="w-full border-gray-300 dark:bg-gray-700 dark:text-gray-50 bg-gray-100 rounded-md p-2" value="{{ $entry->tanggal }}" required>
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