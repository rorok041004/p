<?php
// login.php
?>
<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>BOLD - Login atau Registrasi</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#00A99D",
                        "secondary": "#0E2954",
                        "background-light": "#F8F9FA",
                        "background-dark": "#102222",
                        "neutral-400": "#A0AEC0",
                        "neutral-200": "#E2E8F0"
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="font-display">
<div class="relative flex h-auto min-h-screen w-full flex-col bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden">
<main class="flex w-full grow flex-col px-6 py-8 sm:px-8 md:px-12 lg:px-16">
<!-- Logo and Tagline -->
<div class="flex flex-col items-center pt-8 text-center">
<div class="relative w-24 h-24 mb-4 flex items-center justify-center bg-secondary dark:bg-primary/20 rounded-xl">
<span class="material-symbols-outlined text-primary dark:text-primary text-6xl">bolt</span>
</div>
<h1 class="text-secondary dark:text-white tracking-tight text-4xl font-extrabold leading-tight">BOLD</h1>
<p class="text-neutral-400 dark:text-neutral-400 text-base font-normal leading-normal pt-2">Solusi Listrik Terpercaya di Ujung Jari Anda</p>
</div>
<!-- Role Selection -->
<div class="flex flex-col items-center pt-10">
<p class="text-secondary dark:text-white/80 text-sm font-medium mb-3">Masuk sebagai:</p>
<div class="flex w-full max-w-sm px-4 py-3">
<div class="flex h-12 flex-1 items-center justify-center rounded-lg bg-neutral-200/60 dark:bg-background-dark p-1.5">
<label class="flex cursor-pointer h-full grow items-center justify-center overflow-hidden rounded-md px-2 has-[:checked]:bg-white dark:has-[:checked]:bg-secondary has-[:checked]:shadow-md has-[:checked]:text-secondary dark:has-[:checked]:text-white text-neutral-400 text-sm font-bold leading-normal">
<span class="truncate">Pelanggan</span>
<input checked="" class="invisible w-0" name="role_selection" type="radio" value="Pelanggan"/>
</label>
<label class="flex cursor-pointer h-full grow items-center justify-center overflow-hidden rounded-md px-2 has-[:checked]:bg-white dark:has-[:checked]:bg-secondary has-[:checked]:shadow-md has-[:checked]:text-secondary dark:has-[:checked]:text-white text-neutral-400 text-sm font-bold leading-normal">
<span class="truncate">Kontraktor</span>
<input class="invisible w-0" name="role_selection" type="radio" value="Kontraktor"/>
</label>
</div>
</div>
</div>
<!-- Social Login -->
<div class="flex px-4 py-3 pt-4 w-full max-w-sm mx-auto">
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 flex-1 bg-white dark:bg-secondary text-secondary dark:text-white gap-3 text-base font-bold leading-normal tracking-[0.015em] border border-neutral-200 dark:border-neutral-200/20 shadow-sm">
<img alt="Google logo" class="w-6 h-6" src="https://lh3.googleusercontent.com/COxitqgJr1sJnIDe8-jiKhxDx1FrYbtRHKJ9z_hELisAlapwE9LUPh6fcXIfb5vwpbMl4xl9H9TRFPc5NOO8Sb3VSgIBrfRYvW6cUA"/>
<span class="truncate">Masuk dengan Google</span>
</button>
</div>
<!-- Divider -->
<div class="flex items-center gap-4 px-4 py-4 w-full max-w-sm mx-auto">
<hr class="flex-1 border-t border-neutral-200 dark:border-neutral-200/20"/>
<p class="text-sm text-neutral-400 dark:text-neutral-400">atau</p>
<hr class="flex-1 border-t border-neutral-200 dark:border-neutral-200/20"/>
</div>
<!-- Email & Password Form -->
<div class="flex flex-col gap-4 px-4 w-full max-w-sm mx-auto">
<div class="relative">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-neutral-400">mail</span>
<input class="w-full h-12 rounded-lg border border-neutral-200 dark:border-neutral-200/20 bg-white dark:bg-secondary dark:text-white pl-12 pr-4 text-secondary placeholder:text-neutral-400 focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all" placeholder="Alamat Email" type="email"/>
</div>
<div class="relative">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-neutral-400">lock</span>
<input class="w-full h-12 rounded-lg border border-neutral-200 dark:border-neutral-200/20 bg-white dark:bg-secondary dark:text-white pl-12 pr-12 text-secondary placeholder:text-neutral-400 focus:ring-2 focus:ring-primary/50 focus:border-primary transition-all" placeholder="Password" type="password"/>
<button class="absolute right-4 top-1/2 -translate-y-1/2 text-neutral-400">
<span class="material-symbols-outlined">visibility_off</span>
</button>
</div>
<div class="text-right">
<a class="text-sm font-medium text-primary hover:underline" href="#">Lupa Password?</a>
</div>
</div>
<!-- CTA Button -->
<div class="flex px-4 py-3 mt-4 w-full max-w-sm mx-auto">
<a href="dashboard.php" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 flex-1 bg-primary text-white gap-2 text-base font-bold leading-normal tracking-[0.015em] shadow-lg shadow-primary/30 hover:shadow-xl hover:shadow-primary/40 transition-shadow">
<span class="truncate">Masuk</span>
</a>
</div>
<!-- Registration Link -->
<div class="mt-auto pt-8 pb-4 text-center">
<p class="text-sm text-secondary dark:text-neutral-400">
                    Belum punya akun? <a class="font-bold text-primary hover:underline" href="index.php">Daftar Sekarang</a>
</p>
</div>
</main>
</div>
</body></html>