<div {{ $attributes->merge([
    'class' => 'flex flex-row'
]) }}>
    <div class= 'w-1/3 dark:text-white text-center pt-10'>
        <h1 class='font-extrabold text-2xl'> Herdlyfe</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
    <x-homepage.carousel class='w-2/3' />
</div>