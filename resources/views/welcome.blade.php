<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Royal Caps</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="bg-gray-50 text-black/50 dark:bg-white dark:text-white/50">
            <div class="relative min-h-screen">
                <header class="flex justify-between items-center py-4 px-6 lg:px-8">
                    <div class="text-xl font-bold text-black lg:text-2xl">Royal Caps</div>
                    <nav class="flex space-x-4">
                        <a href="/" class="text-black hover:text-gray-300">Home</a>
                        <a href="/products" class="text-black hover:text-gray-300">Products</a>
                        <a href="/customize" class="text-black hover:text-gray-300">Customize</a>
                        <a href="/promotions" class="text-black hover:text-gray-300">Promotions</a>
                    </nav>
                    <div class="flex space-x-4">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-black hover:text-gray-300">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-black hover:text-gray-300">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-black hover:text-gray-300">Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </header>
                <main class="mt-0">
                    <!-- Slideshow -->
                    <div class="slideshow-container" style="position: relative; max-width: 100%; overflow: hidden;">
                        <div class="mySlides fade" style="display: none;">
                            <img src="images/slide1.jpg" style="width: 100%; height: 400px; object-fit: cover;">
                        </div>
                        <div class="mySlides fade" style="display: none;">
                            <img src="images/slide4.jpg" style="width: 100%; height: 400px; object-fit: cover;">
                        </div>
                        <div class="mySlides fade" style="display: none;">
                            <img src="images/slide3.jpg" style="width: 100%; height: 400px; object-fit: cover;">
                        </div>
                    </div>
                    <br>
                    <div style="text-align: center;">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
                    </div>
                </main>
                
                </div>
            </div>
        </div>
        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 3000); 
            }
        </script>
    </body>
</html>