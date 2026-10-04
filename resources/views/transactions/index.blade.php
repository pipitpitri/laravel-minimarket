<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Riwayat Transaksi</h1>
        <table class="min-w-full border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border p-2">Invoice</th>
                    <th class="border p-2">Kasir/Petugas</th>
                    <th class="border p-2">Total Belanja</th>
                    <th class="border p-2">Waktu</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $t)
                    <tr class="text-center">
                        <td class="border p-2 font-mono">{{ $t->invoice_number }}</td>
                        <td class="border p-2">{{ $t->user->name ?? 'Kasir' }}</td>
                        <td class="border p-2">Rp {{ number_format($t->total_amount, 0, ',', '.') }}</td>
                        <td class="border p-2">{{ $t->created_at->format('d M Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
