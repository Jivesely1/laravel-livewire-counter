<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-purple-500 via-pink-500 to-red-500">
    <div class="bg-white rounded-3xl shadow-2xl p-8 max-w-md w-full mx-4">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Livewire Counter</h1>
            <p class="text-gray-600 mb-8">Interaktivní počítadlo s Tailwind CSS</p>

            <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl p-8 mb-8 shadow-lg">
                <div class="text-7xl font-bold text-white mb-2">
                    {{ $count }}
                </div>
                <div class="text-white text-sm uppercase tracking-wider">
                    Aktuální počet
                </div>
            </div>

            <div class="flex gap-4 mb-6">
                <button
                    wire:click="decrement"
                    class="flex-1 bg-red-500 hover:bg-red-600 text-white font-bold py-4 px-6 rounded-xl transition duration-200 transform hover:scale-105 active:scale-95 shadow-lg">
                    <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                    </svg>
                </button>

                <button
                    wire:click="increment"
                    class="flex-1 bg-green-500 hover:bg-green-600 text-white font-bold py-4 px-6 rounded-xl transition duration-200 transform hover:scale-105 active:scale-95 shadow-lg">
                    <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                </button>
            </div>

            <button
                wire:click="resetCount"
                class="w-full bg-gray-700 hover:bg-gray-800 text-white font-bold py-3 px-6 rounded-xl transition duration-200 transform hover:scale-105 active:scale-95 shadow-lg">
                Reset
            </button>

            <div class="mt-6 text-xs text-gray-500">
                Vytvořeno s Laravel + Livewire + Tailwind CSS
            </div>
        </div>
    </div>
</div>
