<div class="mb-8 flex flex-col gap-4 md:flex-row md:items-end md:justify-between px-2">
    <div>
        <nav class="flex mb-2" aria-label="Breadcrumb">
            <span class="text-[20px] uppercase tracking-widest text-emerald-500 font-bold">Manajemen</span>
        </nav>
        <h1 class="text-3xl font-bold tracking-tight text-white">Data Pengguna</h1>
        <p class="mt-1 text-sm text-slate-400">Selamat datang kembali, <span class="text-slate-200 font-medium">Admin</span>. Anda memiliki kontrol penuh atas akses akun.</p>
    </div>
    
    <div class="flex items-center gap-3">
        <button class="flex items-center gap-2 rounded-xl bg-slate-800 px-4 py-2.5 text-sm font-medium text-white transition-all hover:bg-slate-700 border border-slate-700">
            Export CSV
        </button>
        <button class="flex items-center gap-2 rounded-xl bg-emerald-600 px-4 py-2.5 text-sm font-medium text-white shadow-lg shadow-emerald-900/20 transition-all hover:bg-emerald-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
            Tambah User
        </button>
    </div>
</div>

<div class="mt-8 grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
    <x-admin.stat-card title="Total pengguna" value="100" description="Terdaftar di sistem" accent="emerald" />
    <x-admin.stat-card title="Baru hari ini" value="24" description="Pendaftaran baru" accent="sky" />
    <x-admin.stat-card title="Verifikasi" value="98%" description="Email terverifikasi" accent="amber" />
    <x-admin.stat-card title="Masalah" value="3" description="Akun bermasalah" accent="rose" />
</div>

<div class="mt-10 overflow-hidden rounded-2xl border border-slate-800 bg-slate-900/50 backdrop-blur-md shadow-2xl">
    <div class="flex items-center justify-between border-b border-slate-800/60 px-6 py-5">
        <div>
            <h2 class="text-lg font-semibold text-white">Daftar Pengguna</h2>
            <p class="text-xs text-slate-500">Menampilkan 5 dari 100 total entri</p>
        </div>
        <div class="relative">
            <input type="text" placeholder="Cari nama..." class="w-64 rounded-lg border border-slate-700 bg-slate-800/50 px-4 py-1.5 text-xs text-slate-300 focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500">
        </div>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm border-separate border-spacing-0">
            <thead class="bg-slate-800/30 text-[11px] uppercase tracking-wider text-slate-500">
                <tr>
                    <th class="px-6 py-4 font-semibold">Profil Pengguna</th>
                    <th class="px-6 py-4 font-semibold">Tanggal Registrasi</th>
                    <th class="px-6 py-4 font-semibold">Status Akun</th>
                    <th class="px-6 py-4 font-semibold text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800/50">
                @php
                    $staticUsers = [
                        ['name' => 'Ahmad Fauzi', 'email' => 'ahmad.fauzi@gmail.com', 'date' => '15 Jan 2023', 'status' => 'Aktif', 'initials' => 'AF'],
                        ['name' => 'Siti Nurhaliza', 'email' => 'siti.nurhaliza@gmail.com', 'date' => '22 Feb 2023', 'status' => 'Aktif', 'initials' => 'SN'],
                        ['name' => 'Budi Santoso', 'email' => 'budi.santoso@gmail.com', 'date' => '10 Mar 2023', 'status' => 'Aktif', 'initials' => 'BS'],
                        ['name' => 'Dewi Lestari', 'email' => 'dewi.lestari@gmail.com', 'date' => '05 Apr 2023', 'status' => 'Aktif', 'initials' => 'DL'],
                        ['name' => 'Rizky Pratama', 'email' => 'rizky.pratama@gmail.com', 'date' => '18 Mei 2023', 'status' => 'Aktif', 'initials' => 'RP'],
                    ];
                @endphp
                
                @foreach($staticUsers as $user)
                <tr class="group transition-all duration-200 hover:bg-slate-800/40">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 items-center justify-center rounded-full bg-linear-to-br from-slate-700 to-slate-800 text-xs font-bold text-emerald-400 ring-1 ring-slate-700 shadow-inner">
                                {{ $user['initials'] }}
                            </div>
                            <div>
                                <div class="font-medium text-slate-200 group-hover:text-white">{{ $user['name'] }}</div>
                                <div class="text-xs text-slate-500">{{ $user['email'] }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-slate-400 font-mono text-[13px]">{{ $user['date'] }}</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center gap-1.5 rounded-full bg-emerald-500/10 px-2.5 py-1 text-[11px] font-medium text-emerald-500 ring-1 ring-inset ring-emerald-500/20">
                            <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                            {{ $user['status'] }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <button class="text-slate-500 hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="border-t border-slate-800/60 px-6 py-4 bg-slate-800/10">
        <div class="flex items-center justify-between">
            <span class="text-xs text-slate-500 font-medium">Halaman 1 dari 20</span>
            <div class="flex gap-2">
                <button class="rounded-lg border border-slate-700 px-3 py-1 text-xs text-slate-400 hover:bg-slate-800 transition-colors disabled:opacity-50">Prev</button>
                <button class="rounded-lg border border-slate-700 px-3 py-1 text-xs text-slate-400 hover:bg-slate-800 transition-colors">Next</button>
            </div>
        </div>
    </div>
</div>