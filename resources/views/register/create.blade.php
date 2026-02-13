<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>漫画新規登録</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Helvetica Neue"', 'Arial', '"Hiragino Kaku Gothic ProN"', '"Hiragino Sans"',
                            'sans-serif'
                        ],
                    },
                    colors: {
                        'main-orange': '#FF4500',
                    },
                }
            }
        }
    </script>
</head>

<body class="font-sans text-gray-800 min-h-screen bg-cover bg-center bg-fixed bg-no-repeat"
    style="background-image: url('{{ asset('image/bg_sp.jpg') }}');">

    <div class="w-full max-w-[480px] mx-auto min-h-screen relative bg-white/40 shadow-xl pb-10">

        <header class="flex items-center w-full bg-white border-b border-gray-200 sticky top-0 z-50 px-4 py-3 shadow-sm">
            <a href="{{ route('login') }}"
                class="inline-block w-10 h-10 mr-4 transition-transform active:scale-90 bg-main-orange flex items-center justify-center rounded-sm text-white font-bold text-xl hover:bg-orange-600">
                ←
            </a>
            <div class="flex-1 flex justify-start items-center">
                {{-- <img src="{{ asset('image/logo.png') }}" alt="Site Logo" class="h-8 w-auto object-contain"> --}}
                <span class="font-bold text-lg text-gray-700">漫画新規登録</span>
            </div>
        </header>

        <main class="px-6 pt-6">

            <div class="bg-white/80 p-6 rounded-md shadow-lg border border-white/50">

                <h2 class="text-xl font-bold text-main-orange mb-6 text-center border-b-2 border-main-orange pb-2">
                    作品情報を入力</h2>

                {{-- エラーメッセージの表示 --}}
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6 relative"
                        role="alert">
                        <strong class="font-bold">入力内容を確認してください。</strong>
                        <ul class="mt-2 list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- 登録フォーム --}}
                <form action="#" method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf

                    <div>
                        <label for="title" class="block text-sm font-bold text-gray-700 mb-1">タイトル <span
                                class="text-red-500">*</span></label>
                        <input type="text" name="title" id="title" value="{{ old('title') }}" required
                            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-main-orange focus:border-transparent"
                            placeholder="例：ONE PIECE">
                    </div>

                    <div>
                        <label for="author" class="block text-sm font-bold text-gray-700 mb-1">作者</label>
                        <input type="text" name="author" id="author" value="{{ old('author') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-main-orange focus:border-transparent"
                            placeholder="例：尾田栄一郎">
                    </div>

                    <div>
                        <label for="genre_id" class="block text-sm font-bold text-gray-700 mb-1">ジャンルID (数値)</label>
                        <input type="number" name="genre_id" id="genre_id" value="{{ old('genre_id') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-main-orange focus:border-transparent"
                            placeholder="1">
                    </div>

                    <div>
                        <label for="setting_id" class="block text-sm font-bold text-gray-700 mb-1">設定ID (数値)</label>
                        <input type="number" name="setting_id" id="setting_id" value="{{ old('setting_id') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-main-orange focus:border-transparent"
                            placeholder="1">
                    </div>

                    <div>
                        <label for="magazine_id" class="block text-sm font-bold text-gray-700 mb-1">掲載誌ID (数値)</label>
                        <input type="number" name="magazine_id" id="magazine_id" value="{{ old('magazine_id') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-main-orange focus:border-transparent"
                            placeholder="1">
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-bold text-gray-700 mb-1">表紙画像</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="image"
                                class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="text-sm text-gray-500"><span class="font-semibold">クリックしてアップロード</span></p>
                                    <p class="text-xs text-gray-500">SVG, PNG, JPG (MAX. 2MB)</p>
                                </div>
                                <input id="image" name="image" type="file" class="hidden" />
                            </label>
                        </div>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-bold text-gray-700 mb-1">あらすじ</label>
                        <textarea name="description" id="description" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-main-orange focus:border-transparent"
                            placeholder="あらすじを入力...">{{ old('description') }}</textarea>
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                            class="w-full bg-main-orange text-white font-bold py-3 px-4 rounded shadow-md hover:bg-orange-600 transition duration-300 transform active:scale-95">
                            この内容で登録する
                        </button>
                    </div>

                </form>
            </div>

        </main>
    </div>
</body>

</html>
