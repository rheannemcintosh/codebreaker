<div class="mt-8 flex flex-col items-center">
    <form action="">
        <textarea wire:model.live="message" name="" id="" cols="30" rows="10" class="bg-white/10 text-white py-2 px-3 rounded-xl">

        </textarea>
    </form>

    <x-code :message="$message" :letter="$this->letters" />
</div>
