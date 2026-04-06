<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin Panel | Kelompok 4</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen bg-slate-950 text-slate-100" x-data="{ 
    showStatus: false, 
    selectedCard: null, 
    activeSection: '{{ $section }}',
    showReportModal: false 
}">
    <div class="h-screen flex flex-col lg:flex-row">
        <aside
            class="w-full lg:w-80 xl:w-72 border-b border-slate-800 bg-slate-950/95 lg:border-r lg:border-b-0 lg:sticky lg:top-0 lg:h-screen">
            <x-admin.sidebar :active="$section" />
        </aside>

        <main class="flex-1 bg-slate-950 text-slate-100 overflow-y-auto lg:h-screen flex flex-col">
            <div
                class="px-5 py-4 border-b border-slate-800 bg-blue-950/95 backdrop-blur-sm lg:px-10">
                <x-admin.header :section="$section" />
            </div>

            <div class="px-5 py-6 lg:px-10 lg:py-8">
                @if($section === 'dashboard')
                    <x-admin.dashboard />
                @elseif($section === 'users')
                    <x-admin.users />
                @elseif($section === 'reports')
                    <x-admin.reports />
                @elseif($section === 'settings')
                    <x-admin.settings />
                @elseif($section === 'products')
                    <x-admin.products />
                @elseif($section === 'orders')
                    <x-admin.orders />
                @else
                    <x-admin.dashboard />
                @endif
            </div>

            <div class="mt-auto">
                <x-admin.footer />
            </div>
        </main>
    </div>
</body>

</html>