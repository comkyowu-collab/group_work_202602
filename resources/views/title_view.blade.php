<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $comic->title ?? '個別タイトル表示' }}</title>
    
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Helvetica Neue"', 'Arial', '"Hiragino Kaku Gothic ProN"', '"Hiragino Sans"', 'sans-serif'],
                    },
                    colors: {
                        'main-orange': '#FF4500',
                    },
                }
            }
        }
    </script>

    <style>
        .text-outline-white {
            text-shadow: 2px 2px 0 #fff, -2px -2px 0 #fff, -2px 2px 0 #fff, 2px -2px 0 #fff, 0px 2px 0 #fff, 0 -2px 0 #fff, -2px 0 0 #fff, 2px 0 0 #fff;
        }
        .text-outline-white-strong {
            text-shadow: 3px 3px 0 #fff, -3px -3px 0 #fff, -3px 3px 0 #fff, 3px -3px 0 #fff, 0 3px 0 #fff, 0 -3px 0 #fff, -3px 0 0 #fff, 3px 0 0 #fff;
        }
    </style>
</head>

<body 
    class="font-sans text-gray-800 min-h-screen bg-cover bg-center bg-fixed bg-no-repeat"
    style="background-image: url('{{ asset('image/bg_sp.jpg') }}');"
>

    <div class="w-full max-w-[480px] mx-auto min-h-screen relative bg-white/40 shadow-xl pb-10">

<header class="flex items-center w-full bg-white border-b border-gray-200 sticky top-0 z-50 px-4 py-3 shadow-sm">
            <a href="/" class="inline-block w-10 h-10 mr-4 transition-transform active:scale-90 bg-main-orange flex items-center justify-center rounded-sm">
                <span class="text-white font-bold text-xl">←</span>
            </a>

            <div class="flex-1 flex justify-start">
                <a href="/"><img src="{{ asset('image/logo.png') }}" alt="Site Logo" class="h-8 w-auto object-contain">
                </a>
                </div>
        </header>
        </header>

        <main class="px-6 pt-6">
            
            <div class="flex justify-center mb-8">
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gray-400 rounded-sm blur opacity-25"></div>
                    <img 
                        src="{{ asset('image/' . $comic->image_path . '.jpg') }}" 
                        alt="{{ $comic->title }}"
                        class="relative w-full max-w-[360px] h-auto border-4 border-white shadow-2xl rounded-sm"
                    >
                </div>
            </div>

            <div class="space-y-4">
                <h2 class="text-2xl font-bold text-main-orange text-outline-white-strong italic tracking-tighter">
                    {{ $comic->title }}
                </h2>

                <div class="flex gap-2">
                    <span class="bg-main-orange text-white text-xs px-3 py-1 rounded-sm font-bold shadow-sm">ジャンル</span>
                    <span class="bg-main-orange text-white text-xs px-3 py-1 rounded-sm font-bold shadow-sm">ファンタジー</span>
                    <span class="bg-main-orange text-white text-xs px-3 py-1 rounded-sm font-bold shadow-sm">掲載誌</span>
                </div>

                <div class="pt-2 text-sm leading-relaxed font-bold text-gray-700 bg-white/60 p-3 rounded-md border border-white/50 shadow-inner">
                    {{ $comic->description }}
                </div>
            </div>

        </main>
    </div>
</body>
</html>