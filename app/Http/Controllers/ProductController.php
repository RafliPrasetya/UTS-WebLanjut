<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
            'jumlah' => 'integer',
        ]);
    
        $data = $request->all();
    
        // Mengunggah gambar
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/storage');
            $data['image'] = $imagePath;
        }
    
        Product::create($data);
    
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit(Product $product)
{
    return view('products.edit', compact('product'));
}


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
            'jumlah' => 'integer',
        ]);
        

        $data = $request->all();

        // Mengunggah gambar jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

            $imagePath = $request->file('image')->store('products', 'public');
            $data['image'] = $imagePath;
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy(Product $product)
    {
        // Hapus gambar terkait sebelum menghapus produk
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.');
    }
}
