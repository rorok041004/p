<?php
// code.php
?>
<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>BOLD Onboarding</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#13ecec",
            "background-light": "#f6f8f8",
            "background-dark": "#102222",
          },
          fontFamily: {
            "display": ["Inter", "sans-serif"]
          },
          borderRadius: {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
        },
      },
    }
  </script>
<style>
    .material-symbols-outlined {
      font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24
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
<header class="flex h-14 w-full shrink-0 items-center justify-end px-4">
<button class="font-medium text-slate-600 dark:text-slate-300">Lewati</button>
</header>
<main class="flex-1 px-4 py-3">
<div class="flex h-full flex-col items-center">
<div class="w-full bg-center bg-no-repeat bg-contain flex flex-col justify-end overflow-hidden bg-background-light dark:bg-background-dark min-h-80" data-alt="Ilustrasi perisai dengan simbol petir dan panel surya dengan daun, melambangkan keselamatan listrik dan energi hijau." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDL6rhxBesFeVhO7S6o8I-lQuqyZJnd7X_MbaWr0sIlqIP3u784nlYj72YdK_rSf6Caj2LtaaYRktMcLCWu-E15D64dHQtnGatmmSpMCUwHhT8uplGWnT7k-yG3GN40vydKRZ0kXZrPCOIyQt7FBm5PILMGQLtjtnaKwMG6z80NzlqJDxiNkYi2b3KJMjh7L4MxFsEpISivkyELLYVkaGh1eDbCdQCKzW3sWTiWixFos007_hMvI8TzdYIyiX-0wILX0R9mEL2WmYWI"); background-size: cover; border-radius: 0.5rem;'></div>
<div class="flex w-full flex-row items-center justify-center gap-3 py-5">
<div class="h-2 w-2 rounded-full bg-slate-300 dark:bg-slate-600"></div>
<div class="h-2 w-2 rounded-full bg-slate-300 dark:bg-slate-600"></div>
<div class="h-2 w-2 rounded-full bg-primary"></div>
</div>
<div class="flex flex-1 flex-col items-center justify-center">
<h2 class="text-slate-900 dark:text-white tracking-tight text-[28px] font-bold leading-tight text-center pb-3">Keselamatan Anda &amp; Masa Depan Bumi Adalah Prioritas Kami</h2>
<p class="text-slate-600 dark:text-slate-300 text-base font-normal leading-normal pb-3 pt-1 text-center">Semua kontraktor di BOLD telah terverifikasi dan bekerja sesuai standar keselamatan tertinggi untuk melindungi keluarga dan properti Anda.</p>
<p class="text-slate-600 dark:text-slate-300 text-base font-normal leading-normal text-center">BOLD juga mendukung transisi ke energi terbarukan dan siap membantu pemasangan solusi energi hijau seperti panel surya.</p>
</div>
</div>
</main>
<footer class="w-full px-4 py-6">
<a href="login.php" class="flex h-12 w-full items-center justify-center rounded-lg bg-primary font-bold text-background-dark shadow-md transition-colors hover:bg-primary/90">
        Mulai Sekarang
      </a>
</footer>
</div>
</body></html>