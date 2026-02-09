<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    @props(['title', 'description', 'price'])

    <div {{ $attributes->merge(['class' => 'card border-gray-200 bg-white shadow-sm rounded-lg p-6']) }}>
        <h3 class="text-xl font-semibold mb-2">{{ $title }}</h3>
        <p class="text-gray-600 mb-4">{{ $description }}</p>
        <div class="text-lg font-bold text-gray-800">
            ${{ number_format($price, 2) }}
        </div>
    </div>
</div>