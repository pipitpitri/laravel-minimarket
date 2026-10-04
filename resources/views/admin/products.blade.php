<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Produk (Kelola Admin)</h1>
        <table class="min-w-full border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border p-2">ID</th>
                    <th class="border p-2">Nama Produk</th>
                    <th class="border p-2">Harga</th>
                    <th class="border p-2">Stok</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $p)
                    <tr class="text-center">
                        <td class="border p-2">{{ $p->id }}</td>
                        <td class="border p-2 text-left">{{ $p->name }}</td>
                        <td class="border p-2">Rp {{ number_format($p->price, 0, ',', '.') }}</td>
                        <td class="border p-2">{{ $p->stock }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
