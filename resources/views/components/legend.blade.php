@props(['letters'])

<div class="flex justify-center flex-wrap mt-auto fixed bottom-0 mt-auto m-8">
    @foreach ($letters as $letter => $symbol)
        <div class="flex flex-col items-center border border-white/10 print:border-black/10 p-2">
            <span class="mb-2 font-bold">{{ ucwords($letter) }}</span>
            <span class="material-symbols-outlined character">
                {{ $symbol }}
            </span>
        </div>
    @endforeach
</div>
