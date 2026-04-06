<div class="rounded-[30px] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-slate-950/20"
    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform translate-y-4"
    x-transition:enter-end="opacity-100 transform translate-y-0">
    <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
        <div>
            <p class="text-sm uppercase tracking-[0.24em] text-slate-400">Halaman</p>
            <h1 class="mt-2 text-2xl font-semibold text-white">Pesanan</h1>
            <p class="mt-2 max-w-2xl text-sm text-slate-400">Halo Administrator!, lihat
                ringkasan dan kelola
                pesanan Anda di sini.</p>
        </div>
        <div class="flex gap-3">
            <select
                class="rounded-2xl border border-slate-600 bg-slate-800 px-4 py-2 text-sm text-slate-100 focus:border-slate-400 focus:outline-none">
                <option>Semua Status</option>
                <option>Pending</option>
                <option>Diproses</option>
                <option>Dikirim</option>
                <option>Selesai</option>
                <option>Dibatalkan</option>
            </select>
        </div>
    </div>
</div>

<div class="mt-8 rounded-[30px] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-slate-950/20">
    <h2 class="mb-6 text-xl font-semibold text-white">
        Ringkasan Status Pesanan
    </h2>

    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <x-admin.summary-card
            title="Menunggu Konfirmasi"
            value="23"
            accent="amber"
        >
            <x-slot:icon>
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </x-slot:icon>
        </x-admin.summary-card>

        <x-admin.summary-card
            title="Sedang Diproses"
            value="45"
            accent="blue"
        >
            <x-slot:icon>
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </x-slot:icon>
        </x-admin.summary-card>

        <x-admin.summary-card
            title="Sedang Dikirim"
            value="12"
            accent="purple"
        >
            <x-slot:icon>
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                </svg>
            </x-slot:icon>
        </x-admin.summary-card>

        <x-admin.summary-card
            title="Selesai"
            value="1.179"
            accent="green"
        >
            <x-slot:icon>
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 13l4 4L19 7" />
                </svg>
            </x-slot:icon>
        </x-admin.summary-card>
    </div>
</div>

<div
    class="mt-8 overflow-hidden rounded-[30px] border border-slate-800 bg-slate-900 text-slate-100 shadow-xl shadow-slate-950/20">
    <div class="border-b border-slate-700 px-6 py-5 flex items-center justify-between">
        <div>
            <h2 class="text-xl font-semibold text-white">Daftar Pesanan</h2>
            <p class="mt-1 text-sm text-slate-400">Kelola semua pesanan marketplace Anda.</p>
        </div>
        <div class="flex gap-3">
            <input type="text" placeholder="Cari pesanan..."
                class="rounded-lg border border-slate-600 bg-slate-800 px-3 py-2 text-sm text-slate-100 focus:border-slate-400 focus:outline-none">
            <input type="date"
                class="rounded-lg border border-slate-600 bg-slate-800 px-3 py-2 text-sm text-slate-100 focus:border-slate-400 focus:outline-none">
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-slate-700 text-left text-sm">
            <thead class="bg-slate-800 text-slate-400 uppercase tracking-[0.16em] text-[11px]">
                <tr>
                    <th class="px-6 py-4">ID Pesanan</th>
                    <th class="px-6 py-4">Pelanggan</th>
                    <th class="px-6 py-4">Produk</th>
                    <th class="px-6 py-4">Total</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Tanggal</th>
                    <th class="px-6 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-700 bg-slate-900 text-slate-300">
                <tr class="hover:bg-slate-800">
                    <td class="px-6 py-4 font-medium">#ORD-2024-001</td>
                    <td class="px-6 py-4">
                        <div>
                            <p class="font-medium">John Doe</p>
                            <p class="text-xs text-slate-500">john@example.com</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div>
                            <p class="font-medium">iPhone 15 Pro</p>
                            <p class="text-xs text-slate-500">Qty: 1</p>
                        </div>
                    </td>
                    <td class="px-6 py-4 font-medium">Rp 18.999.000</td>
                    <td class="px-6 py-4">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                            Pending
                        </span>
                    </td>
                    <td class="px-6 py-4">15 Apr 2024</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <button class="p-1 text-slate-400 hover:text-slate-600">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                            <button class="p-1 text-slate-400 hover:text-slate-600">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-800">
                    <td class="px-6 py-4 font-medium">#ORD-2024-002</td>
                    <td class="px-6 py-4">
                        <div>
                            <p class="font-medium">Jane Smith</p>
                            <p class="text-xs text-slate-500">jane@example.com</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div>
                            <p class="font-medium">Nike Air Max 270</p>
                            <p class="text-xs text-slate-500">Qty: 2</p>
                        </div>
                    </td>
                    <td class="px-6 py-4 font-medium">Rp 4.998.000</td>
                    <td class="px-6 py-4">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            Diproses
                        </span>
                    </td>
                    <td class="px-6 py-4">14 Apr 2024</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <button class="p-1 text-slate-400 hover:text-slate-600">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                            <button class="p-1 text-slate-400 hover:text-slate-600">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-slate-800">
                    <td class="px-6 py-4 font-medium">#ORD-2024-003</td>
                    <td class="px-6 py-4">
                        <div>
                            <p class="font-medium">Bob Johnson</p>
                            <p class="text-xs text-slate-500">bob@example.com</p>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <div>
                            <p class="font-medium">MacBook Pro 16"</p>
                            <p class="text-xs text-slate-500">Qty: 1</p>
                        </div>
                    </td>
                    <td class="px-6 py-4 font-medium">Rp 32.999.000</td>
                    <td class="px-6 py-4">
                        <span
                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            Selesai
                        </span>
                    </td>
                    <td class="px-6 py-4">13 Apr 2024</td>
                    <td class="px-6 py-4">
                        <div class="flex gap-2">
                            <button class="p-1 text-slate-400 hover:text-slate-600">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </button>
                            <button class="p-1 text-slate-400 hover:text-slate-600">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>