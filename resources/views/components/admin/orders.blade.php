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