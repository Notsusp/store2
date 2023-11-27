<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn-primary bg-yellow-400 hover:bg-yellow-500 active:bg-yellow-600 w-full']) }}>
    {{ $slot }}
</button>
