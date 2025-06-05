@props('article')
<div class=" p-2 rounded-2xl border bg-gradient-to-b from-gray-300 to-gray-400 flex flex-col gap-2">
    <img src="{{ $article->image }}" class=" rounded-2xl h-32 w-full object-cover">
    <div class=' flex justify-between  gap-1 py-2 px-1'>
        <h3 class=" text-lg font-bold">{{ \Str::limit($article->title , 10) }}</h3>
        <p class=" text-sm truncate">{{ \Str::limit($article->context , 30) }}</p>
    </div>

</div>
