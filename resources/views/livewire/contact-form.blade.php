@if (session()->has('success'))
    <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif
<form wire:submit.prevent="submit" class="space-y-4">
    <input type="text" wire:model="name" placeholder="Name" class="w-full border p-2 rounded" required>
    @error('name') <span class="text-red-600">{{ $message }}</span> @enderror

    <input type="email" wire:model="email" placeholder="Email" class="w-full border p-2 rounded" required>
    @error('email') <span class="text-red-600">{{ $message }}</span> @enderror

    <textarea wire:model="message" placeholder="Your message" class="w-full border p-2 rounded" required></textarea>
    @error('message') <span class="text-red-600">{{ $message }}</span> @enderror

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Send</button>
</form>
