<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            {{ config()->get('app.name') }}
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <x-nav-link :active="request()->routeIs('home')" :href="route('home')">Home</x-nav-link>
                 <x-nav-link :active="request()->routeIs('about')" :href="route('about')">About</x-nav-link>
                 <x-nav-link :active="request()->routeIs('contact')" :href="route('contact')">Contact</x-nav-link>
                 <x-nav-link :active="request()->routeIs('posts.*')" :href="route('posts.index')">Posts</x-nav-link>
            </ul>
        </div>
    </div>
</nav>
