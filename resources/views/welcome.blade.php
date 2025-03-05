<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
        /* General Layout */
        .product-page-container {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        
        .product-page-wrapper {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        
        .product-content-box {
            background-color: white;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border-radius: 0.375rem;
        }
        
        .product-content-inner {
            padding: 1.5rem;
            background-color: white;
            border-bottom: 1px solid #e5e7eb;
        }
        
        /* Page Title */
        .page-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        /* Category Filter */
        .category-filter {
            margin-bottom: 1.5rem;
        }
        
        .filter-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
        }
        
        .category-select {
            display: block;
            width: 100%;
            padding: 0.5rem 0.75rem;
            border: 1px solid #d1d5db;
            background-color: white;
            border-radius: 0.375rem;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }
        
        .category-select:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.2);
        }
        
        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1.5rem;
        }
        
        @media (min-width: 640px) {
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (min-width: 768px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        
        @media (min-width: 1024px) {
            .products-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }
        
        /* Product Card */
        .product-card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 1px solid #e5e7eb;
        }
        
        .product-image {
            width: 100%;
            height: 12rem;
            object-fit: cover;
        }
        
        .product-details {
            padding: 1rem;
        }
        
        .product-title {
            font-size: 1.125rem;
            font-weight: 600;
            color: #1f2937;
        }
        
        .product-category {
            font-size: 0.875rem;
            color: #6b7280;
        }
        
        .product-description {
            margin-top: 0.5rem;
            color: #4b5563;
            font-size: 0.875rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .product-actions {
            margin-top: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .product-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1f2937;
        }
        
        .product-buttons {
            display: flex;
            gap: 0.5rem;
        }
        
        .details-button {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            background-color: #e5e7eb;
            color: #1f2937;
            font-size: 0.875rem;
            font-weight: 500;
            border-radius: 0.25rem;
            text-decoration: none;
        }
        
        .details-button:hover {
            background-color: #d1d5db;
        }
        
        .add-to-cart-form {
            display: inline;
        }
        
        .add-to-cart-button {
            padding: 0.25rem 0.75rem;
            background-color: #4f46e5;
            color: white;
            font-size: 0.875rem;
            font-weight: 500;
            border-radius: 0.25rem;
            border: none;
            cursor: pointer;
        }
        
        .add-to-cart-button:hover {
            background-color: #4338ca;
        }
    </style>
    </head>
    <body class="antialiased">
        <!-- resources/views/products/index.blade.php -->
<x-app-layout>
    
    <div class="product-page-container">
        <div class="product-page-wrapper">
            <div class="product-content-box">
                <div class="product-content-inner">
                    <h1 class="page-title">Our Products</h1>
                    
                    <!-- Category Filter -->
                    
                    
                    <!-- Products Grid -->
                    <div class="products-grid">
                        @foreach ($products as $product)
                        <div class="product-card" data-category="{{ $product->category_id }}">
                            <img src="https://as2.ftcdn.net/jpg/03/87/95/19/1000_F_387951958_xEBphJiddszfAlcHaxOKdywRUfH2iTnW.webp" alt="{{ $product->title }}" class="product-image">
                            
                            <div class="product-details">
                                <h2 class="product-title">{{ $product->titre }}</h2>
                                <p class="product-category">{{ $product->categorie_id }}</p>
                                <p class="product-description">{{ Str::limit($product->description, 100) }}</p>
                                
                                <div class="product-actions">
                                    <span class="product-price">${{ number_format($product->prix, 2) }}</span>
                                </div>
                                <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Simple JavaScript for category filtering -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categorySelect = document.getElementById('category');
            const productCards = document.querySelectorAll('.product-card');
            
            categorySelect.addEventListener('change', function() {
                const selectedCategory = this.value;
                
                productCards.forEach(card => {
                    if (!selectedCategory || card.dataset.category === selectedCategory) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>

    
</x-app-layout>
    </body>
</html>
