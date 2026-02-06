<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form Modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center p-4">

    <!-- Modal Overlay -->
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <!-- Modal Content -->
        <div class="bg-gray-800 rounded-lg shadow-xl max-w-2xl w-full mx-4 max-h-[90vh] overflow-y-auto">
            <!-- Modal Header -->
            <div class="flex items-center justify-between p-6 border-b border-gray-700">
                <h2 class="text-2xl font-bold text-white">Update Product</h2>
                
            </div>

            <!-- Modal Body -->
            <div class="p-6">
                <form id="product-form" action="{{ route('productupdate', $product->id) }}" method="POST" enctype="multipart/form-data" class="mt-4 space-y-4">
                    @csrf
                    @method('put')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="text-sm text-gray-300">Titre</label>
                            <input name="name" type="text" required class="mt-1 w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded text-white focus:ring-2 focus:ring-indigo-500" placeholder="Nom du produit" value="{{ $product->name }}">
                        </div>
        
                        <div>
                            <label class="text-sm text-gray-300">Prix</label>
                            <input name="price" type="number" step="1" required class="mt-1 w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded text-white focus:ring-2 focus:ring-indigo-500" placeholder="Prix" value="{{ $product->price }}">
                        </div>
                        <div>
                            <label class="text-sm text-gray-300">Quantité</label>
                            <input name="quantity" type="number" required class="mt-1 w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded text-white focus:ring-2 focus:ring-indigo-500" placeholder="Quantité" value="{{ $product->quantity }}">
                        </div>
                        <div> 
                            <label class="text-sm text-gray-300">Image</label>
                            <input name="photo_path" type="file" accept="image/*" class="mt-1 w-full text-sm text-gray-300 file:bg-indigo-600 file:text-white file:py-2 file:px-3 file:rounded file:border-0"    />
                        </div>
                    </div>

                    <div class="flex items-center gap-6 mt-2">
                                    <div class="flex items-center">
                                        <input id="premium" type="radio"  value="1" name="isPremium" value="1" class="h-4 w-4 text-yellow-400 focus:ring-yellow-400" @checked($product->isPremium) />
                                      <label for="premium" class="ml-2 text-sm text-gray-300">Premium</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="standard" type="radio" value="0" name="isPremium" value="0"  class="h-4 w-4 text-blue-400 focus:ring-blue-400" @checked(!$product->isPremium) />
                                        <label for="standard" class="ml-2 text-sm text-gray-300">Standard</label>
                                    </div>
                                </div>
                    <!-- Modal Footer -->
                    <div class="flex justify-end gap-3 mt-6 pt-4 border-t border-gray-700">
                       
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">
                            Save Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>