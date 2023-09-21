<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(["resources/scss/account_overzicht.scss"])
    </head>
    <body class="antialiased">
        <header>
            <!-- here comes the logo -->
            <img class="logo" src="{{ URL('storage/Rocambolesque-logo-DEF.png') }}" alt="">

            <!-- here comes the log in button -->
            <button>Log in</button>

            <!-- profile icon -->
            <svg width="68" height="71" viewBox="0 0 68 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d_20_349)">
                <path d="M34 31.5C29.875 31.5 26.3438 29.9578 23.4062 26.8734C20.4688 23.7891 19 20.0813 19 15.75C19 11.4187 20.4688 7.71094 23.4062 4.62656C26.3438 1.54219 29.875 0 34 0C38.125 0 41.6563 1.54219 44.5938 4.62656C47.5313 7.71094 49 11.4187 49 15.75C49 20.0813 47.5313 23.7891 44.5938 26.8734C41.6563 29.9578 38.125 31.5 34 31.5ZM4 63V51.975C4 49.7438 4.54688 47.693 5.64063 45.8227C6.73438 43.9523 8.1875 42.525 10 41.5406C13.875 39.5063 17.8125 37.9805 21.8125 36.9633C25.8125 35.9461 29.875 35.4375 34 35.4375C38.125 35.4375 42.1875 35.9461 46.1875 36.9633C50.1875 37.9805 54.125 39.5063 58 41.5406C59.8125 42.525 61.2656 43.9523 62.3594 45.8227C63.4531 47.693 64 49.7438 64 51.975V63H4ZM11.5 55.125H56.5V51.975C56.5 51.2531 56.3281 50.5969 55.9844 50.0063C55.6406 49.4156 55.1875 48.9563 54.625 48.6281C51.25 46.8563 47.8438 45.5273 44.4062 44.6414C40.9688 43.7555 37.5 43.3125 34 43.3125C30.5 43.3125 27.0313 43.7555 23.5938 44.6414C20.1563 45.5273 16.75 46.8563 13.375 48.6281C12.8125 48.9563 12.3594 49.4156 12.0156 50.0063C11.6719 50.5969 11.5 51.2531 11.5 51.975V55.125ZM34 23.625C36.0625 23.625 37.8281 22.8539 39.2969 21.3117C40.7656 19.7695 41.5 17.9156 41.5 15.75C41.5 13.5844 40.7656 11.7305 39.2969 10.1883C37.8281 8.64609 36.0625 7.875 34 7.875C31.9375 7.875 30.1719 8.64609 28.7031 10.1883C27.2344 11.7305 26.5 13.5844 26.5 15.75C26.5 17.9156 27.2344 19.7695 28.7031 21.3117C30.1719 22.8539 31.9375 23.625 34 23.625Z" fill="#04BF9D"/>
                </g>
                <defs>
                <filter id="filter0_d_20_349" x="0" y="0" width="68" height="71" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="4"/>
                <feGaussianBlur stdDeviation="2"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_20_349"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_20_349" result="shape"/>
                </filter>
                </defs>
            </svg>
        </header>
        <main>
            <!-- background comes here -->
            <img class="logo" src="{{ URL('storage/background.png') }}" alt="">

            <!-- here comes the account information -->
            <div class="container">
                <!-- title-->
                <h1>Account overzicht</h1>
                
                <div class="info">
                    <!-- sub-title -->
                    <h3>Gegevens</h3>
                    <div class="input">
                        <!--her the name information will be getting from the database bij get method-->
                        <label for="">
                            Naam :
                        </label>
                        <input type="text">
                    </div>

                    <div class="input">
                        <!--her the phone number information will be getting from the database bij get method-->
                        <label for="">
                            Telefoonnummer :
                        </label>
                        <input type="text">
                    </div>
                </div>

                
                <div class="info">
                    <!-- sub-title -->
                    <h3>Account gegevens</h3>
                    <div class="input">
                        <!--her the email information will be getting from the database bij get method-->
                        <label for="">
                            Email :
                        </label>
                        <input type="text">
                    </div>
                    
                    <div class="input">
                            <!--her the password information will be getting from the database bij get method-->
                        <label for="">
                            Wachtwoord :
                        </label>
                        <input type="text">
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>