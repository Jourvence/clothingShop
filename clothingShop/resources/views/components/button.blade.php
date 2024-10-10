<button {{ $attributes->merge(['class' => 'ms-3 bg-black text-white hover:bg-gray-800 font-bold py-2 px-4 rounded']) }}>
    {{ $slot }}
</button>
