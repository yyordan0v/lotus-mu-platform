export default {
    darkMode: 'selector',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./vendor/livewire/flux-pro/stubs/**/*.blade.php",
        "./vendor/livewire/flux/stubs/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'sans-serif'],
            },
            colors: {
                // Compliment variables are defined in resources/css/app.css...
                compliment: {
                    DEFAULT: 'var(--color-compliment)',
                    content: 'var(--color-compliment-content)',
                    foreground: 'var(--color-compliment-foreground)',
                },
            },
        },
    },
};
