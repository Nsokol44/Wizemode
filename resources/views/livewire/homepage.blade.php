<div>
    <div class="bg-gradient-to-r from-blue-600 to-teal-500 text-white py-16 text-center">
        <h1 class="text-4xl font-bold mb-4">Websites. Web Apps. PWAs.</h1>
        <p class="mb-6 text-lg">We build digital solutions for your business.</p>
        <a href="#contact" class="bg-white text-blue-700 px-6 py-2 rounded font-semibold shadow hover:bg-blue-100">Get a Free Quote</a>
        <a href="{{ route('blog.index') }}" class="text-blue-600 font-semibold mt-4 inline-block">Visit Our Blog</a>
    </div>

    <div class="max-w-5xl mx-auto py-12 px-4">
        <h2 class="text-2xl font-bold mb-6 text-center">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
            <div><span class="text-3xl">🌐</span><h3 class="font-bold mt-2">Websites & Web Apps</h3></div>
            <div><span class="text-3xl">📱</span><h3 class="font-bold mt-2">PWAs</h3></div>
            <div><span class="text-3xl">📊</span><h3 class="font-bold mt-2">Data Analytics</h3></div>
            <div><span class="text-3xl">🗺️</span><h3 class="font-bold mt-2">GIS Solutions</h3></div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto py-12 px-4">
        <h2 class="text-2xl font-bold mb-6 text-center">Recent Projects</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Replace with dynamic project cards -->
            <div class="bg-white shadow rounded p-4">Project 1</div>
            <div class="bg-white shadow rounded p-4">Project 2</div>
            <div class="bg-white shadow rounded p-4">Project 3</div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto py-12 px-4">
        <h2 class="text-2xl font-bold mb-6 text-center">Latest Blog Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($posts as $post)
                <div class="bg-white shadow rounded p-4">
                    <h3 class="font-semibold text-lg mb-2">{{ $post->title }}</h3>
                    <p class="text-gray-700">{{ Str::limit($post->description, 80) }}</p>
                    <a href="{{ route('blog.show', $post->slug) }}" class="text-blue-600 font-semibold mt-2 inline-block">Read More</a>
                </div>
            @endforeach
        </div>
    </div>

    <div id="contact" class="max-w-2xl mx-auto py-12 px-4">
        <h2 class="text-2xl font-bold mb-4 text-center">Contact Us</h2>
        <livewire:contact-form />
    </div>
</div>
