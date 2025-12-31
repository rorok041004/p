<?php
// dashboard.php
?>
<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>BOLD - Beranda</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#00A99D", // Teal Green
                        "secondary": "#0A2E5D", // Navy Blue
                        "background-light": "#F0F2F5",
                        "background-dark": "#102222",
                        "text-light": "#111818",
                        "text-dark": "#E5E7EB",
                        "subtext-light": "#6c757d",
                        "subtext-dark": "#9CA3AF"
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem", // 8px
                        "lg": "0.75rem", // 12px
                        "xl": "1rem", // 16px
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="font-display bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark">
<div class="relative mx-auto flex h-auto min-h-screen w-full max-w-md flex-col bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden pb-28">
<!-- Top App Bar -->
<header class="sticky top-0 z-10 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm">
<div class="flex items-center p-4">
<span class="material-symbols-outlined text-secondary dark:text-primary mr-2 text-2xl">location_on</span>
<h2 class="text-secondary dark:text-text-dark text-lg font-bold leading-tight tracking-[-0.015em] flex-1">Jakarta Selatan</h2>
<div class="flex w-12 items-center justify-end">
<button class="flex h-12 w-12 cursor-pointer items-center justify-center overflow-hidden rounded-full bg-transparent text-secondary dark:text-primary">
<span class="material-symbols-outlined text-2xl">notifications</span>
</button>
</div>
</div>
</header>
<main class="flex-grow">
<!-- Headline Text -->
<h1 class="text-secondary dark:text-text-dark tracking-tight text-[32px] font-bold leading-tight px-4 pb-2">Selamat pagi, Budi!</h1>
<!-- Search Bar -->
<div class="px-4 py-3">
<label class="flex flex-col min-w-40 h-14 w-full">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full">
<div class="text-subtext-light dark:text-subtext-dark flex border-none bg-white dark:bg-gray-800 items-center justify-center pl-4 rounded-l-lg border-r-0">
<span class="material-symbols-outlined">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-r-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-0 border-none bg-white dark:bg-gray-800 h-full placeholder:text-subtext-light dark:placeholder:text-subtext-dark px-4 pl-2 text-base font-normal leading-normal" placeholder="Cari jasa kelistrikan..." value=""/>
</div>
</label>
</div>
<!-- Hero/Banner Section -->
<div class="px-4 py-3">
<div class="w-full bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden rounded-xl min-h-[160px] p-5 text-white" data-alt="Promotional banner showing a special discount for electrical services" style='background-image: linear-gradient(to right, rgba(10, 46, 93, 0.8), rgba(10, 46, 93, 0.2)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAl5_Kq-nm9m97wCw4O0rXrqazSbqH0j_lro0YzFmOh54nKJMeBf4SERB7uU_7AbnuEKIojZV15vMmPTfni18HD1PtVSy1WmMurerAPzBQ6BgGW3SL6p_RhWgRnMUduJgrdfeW36UhzHUb-C0O4JOodVrwQM4yMHnbBFpu6SqB_9QE96Pl_akJQGkBDqtH37MICKTpJHTTmwJVU8uWaMb4v0iZw5VKyoB3m9T9AtyNzEWbxghWMfleYOJ6COBsQfoZKVWBEH1VwOW68");'>
<h3 class="text-lg font-bold">Diskon 20% Jasa Instalasi</h3>
<p class="text-sm">Pesan sekarang dan nikmati penawaran terbatas!</p>
</div>
</div>
<!-- Quick Access Icons -->
<div class="grid grid-cols-4 gap-3 p-4">
<div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-white dark:bg-gray-800 p-3 aspect-square">
<div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary/20 text-primary">
<span class="material-symbols-outlined">add_circle</span>
</div>
<h2 class="text-center text-sm font-semibold leading-tight text-secondary dark:text-text-dark">Instalasi Baru</h2>
</div>
<div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-white dark:bg-gray-800 p-3 aspect-square">
<div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary/20 text-primary">
<span class="material-symbols-outlined">build</span>
</div>
<h2 class="text-center text-sm font-semibold leading-tight text-secondary dark:text-text-dark">Perbaikan</h2>
</div>
<div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-white dark:bg-gray-800 p-3 aspect-square">
<div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary/20 text-primary">
<span class="material-symbols-outlined">support_agent</span>
</div>
<h2 class="text-center text-sm font-semibold leading-tight text-secondary dark:text-text-dark">Konsultasi</h2>
</div>
<div class="flex flex-col items-center justify-center gap-2 rounded-lg bg-white dark:bg-gray-800 p-3 aspect-square">
<div class="flex h-12 w-12 items-center justify-center rounded-full bg-primary/20 text-primary">
<span class="material-symbols-outlined">electric_bolt</span>
</div>
<h2 class="text-center text-sm font-semibold leading-tight text-secondary dark:text-text-dark">Darurat</h2>
</div>
</div>
<!-- Rekomendasi Jasa Section -->
<div class="flex flex-col gap-4 py-3">
<h2 class="text-xl font-bold text-secondary dark:text-text-dark px-4">Rekomendasi Untuk Anda</h2>
<div class="flex gap-4 overflow-x-auto px-4 pb-4" style="scrollbar-width: none; -ms-overflow-style: none;">
<style>
                        .hide-scrollbar::-webkit-scrollbar {
                            display: none;
                        }
                    </style>
<div class="hide-scrollbar flex gap-4">
<div class="flex w-64 shrink-0 flex-col gap-3 rounded-xl bg-white dark:bg-gray-800 p-3">
<img class="h-32 w-full rounded-lg object-cover" data-alt="Portrait of an electrician" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgtYl5zwPyhwbi9RVfI-yMzoRnSCE8i5zfOzz8qVSEBZ3imsSjv509K8vNJoyZ7y_K5R23O3Aprq7jgEg8G4uTTHBpRKnTLl3acFOmxA60kEWVop_G9q7MuPn6cPWkXC1skOr9Frs1eTUGFOpv2U-3tXEqvODlHraJjVNAOoBuHnXAXtuVhAFz1e8yiEiwkOmId9DWK4J_h9NW6urVN-a3zth73hUn-I-ze1NKnNq876ARW5Q6Z59dUKFPjXEGHlCqkkjSML92xnzO"/>
<div class="flex flex-col">
<h3 class="font-bold text-secondary dark:text-text-dark">Andi Listrik Pro</h3>
<p class="text-sm text-subtext-light dark:text-subtext-dark">Spesialis Instalasi Rumah</p>
<div class="mt-2 flex items-center gap-2">
<span class="material-symbols-outlined text-yellow-500 text-base" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-sm font-bold text-secondary dark:text-text-dark">4.9</span>
<span class="text-sm text-subtext-light dark:text-subtext-dark">(120 ulasan)</span>
</div>
</div>
</div>
<div class="flex w-64 shrink-0 flex-col gap-3 rounded-xl bg-white dark:bg-gray-800 p-3">
<img class="h-32 w-full rounded-lg object-cover" data-alt="Electrician working on a circuit breaker" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCD7UJhHASCGxGC6zjCtMIaPQhvwS59yLTH8zMh8gCbucs4yDRKDu9Puo2T2ZyLVubif4kXnSgIUKCTzNixlShdScpVUskOwtHRGltvhAAmsphEIL12bHI3qRDb4Stwf0I85WAds8iTo2EwyQZiH3R9IIdZKGOI_rl8NW-8cou5zHFYu7j18NvTHCrLXeDpcS-Mgf8KwkPxNQ1aQypg8LOwN85FAZG2PbvbU56_QyGs60_V9IGwLpVq_jDxK0zGM4ZNnV1RNV1WAPZq"/>
<div class="flex flex-col">
<h3 class="font-bold text-secondary dark:text-text-dark">Jaya Elektrikal</h3>
<p class="text-sm text-subtext-light dark:text-subtext-dark">Perbaikan &amp; Konsleting</p>
<div class="mt-2 flex items-center gap-2">
<span class="material-symbols-outlined text-yellow-500 text-base" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-sm font-bold text-secondary dark:text-text-dark">4.8</span>
<span class="text-sm text-subtext-light dark:text-subtext-dark">(88 ulasan)</span>
</div>
</div>
</div>
<div class="flex w-64 shrink-0 flex-col gap-3 rounded-xl bg-white dark:bg-gray-800 p-3">
<img class="h-32 w-full rounded-lg object-cover" data-alt="An electrician inspecting an electrical panel" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2tqkV-gWzL9Z8z0j4o-PvHL4PQ8RmDOsaYb3YbO1Lu7Oe1DL4KBd05lRe9a2vJHAix-40NkP2Wjr62HDqPdz739ro9yPQnIc05Oehz9IsrRRW4iUkfyfAO_p48Hpo5oXNYfv7IGbj_B3banoMtbdT79GrMBH34Dbnv9NVmPNChaAwX2_RLzVMzaR4RkO3ztihd1XUC3vXZDeaaTJFICksT_uaZG0VNdQoDiH4SU13iRW3vclnxoBlOX9UrilxjFFE5DcjICr0k8Oa"/>
<div class="flex flex-col">
<h3 class="font-bold text-secondary dark:text-text-dark">Sinar Terang Servis</h3>
<p class="text-sm text-subtext-light dark:text-subtext-dark">Layanan Darurat 24 Jam</p>
<div class="mt-2 flex items-center gap-2">
<span class="material-symbols-outlined text-yellow-500 text-base" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-sm font-bold text-secondary dark:text-text-dark">5.0</span>
<span class="text-sm text-subtext-light dark:text-subtext-dark">(54 ulasan)</span>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Bottom Navigation Bar -->
<nav class="fixed bottom-0 left-0 right-0 z-10 mx-auto max-w-md border-t border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-800">
<div class="grid h-16 grid-cols-4">
<a class="flex flex-col items-center justify-center gap-1 text-primary" href="dashboard.php">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span>
<span class="text-xs font-bold">Beranda</span>
</a>
<a class="flex flex-col items-center justify-center gap-1 text-subtext-light dark:text-subtext-dark" href="#">
<span class="material-symbols-outlined">receipt_long</span>
<span class="text-xs font-medium">Booking</span>
</a>
<a class="flex flex-col items-center justify-center gap-1 text-subtext-light dark:text-subtext-dark" href="#">
<span class="material-symbols-outlined">chat_bubble</span>
<span class="text-xs font-medium">Pesan</span>
</a>
<a class="flex flex-col items-center justify-center gap-1 text-subtext-light dark:text-subtext-dark" href="#">
<span class="material-symbols-outlined">person</span>
<span class="text-xs font-medium">Profil</span>
</a>
</div>
</nav>
</div>
</body></html>