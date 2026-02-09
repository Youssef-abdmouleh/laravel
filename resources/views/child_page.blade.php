<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    @php
        $products = [
            ['name' => 'Product 1', 'price' => '$10.00', 'description' => 'Description for product 1', 'image' => 'https://via.placeholder.com/150'],
            ['name' => 'Product 2', 'price' => '$20.00', 'description' => 'Description for product 2', 'image' => 'https://via.placeholder.com/150'],
            ['name' => 'Product 3', 'price' => '$30.00', 'description' => 'Description for product 3', 'image' => 'https://via.placeholder.com/150'],
        ];
    @endphp

    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        @foreach ($products as $product)
            @component('components.card', ['product' => $product])
            @endcomponent
        @endforeach
    </div>
</div>
