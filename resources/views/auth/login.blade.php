@extends("moonshine::layouts.login")

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-dark text-white py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full">
            <div>
                @if(config("moonshine.logo"))
                    <img class="mx-auto h-12 w-auto" src="{{ config("moonshine.logo") }}" alt="{{ config("moonshine.title") }}">
                @else
                    <svg class="fill-current mx-auto h-12 w-auto my-4 text-pink" viewBox="0 0 1719.62 350.71" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="253.58" cy="100.75" r="27.62" transform="matrix(.16022575 -.9870804 .9870804 .16022575 -14.01 334.92)"/>
                        <circle cx="203.67" cy="179.06" r="17.83"/>
                        <circle cx="202.66" cy="268.09" r="11.17"/>
                        <circle cx="222.49" cy="120.39" r="12.08"/>
                        <circle cx="272.77" cy="184.98" r="5.1"/>
                        <circle cx="182.75" cy="79.17" r="6.04"/>
                        <circle cx="90.08" cy="159.07" r="8.03"/>
                        <circle cx="138.79" cy="201.68" r="4.79"/>
                        <circle cx="179.1" cy="128.37" r="6.04"/>
                        <g transform="translate(-127.52)">
                            <path d="m345.86 272.53a16.3 16.3 0 1 1 -30.81-10.53 186.27 186.27 0 0 1 -93.05-91.44 12.3 12.3 0 0 1 -8.88-22.95 185.46 185.46 0 0 1 -8.39-55.32 187.57 187.57 0 0 1 1.84-26.23 138.09 138.09 0 1 0 177.28 211.72 185 185 0 0 1 -37.99-5.25zm-105.2-28a8 8 0 1 1 8-8 8 8 0 0 1 -8 8.03z"/>
                            <path d="m265.84 44.27c1.83-3 .35-5.48 2.64-8.64a10.15 10.15 0 0 1 4.2-3.23c7.15-3.51 23.05-21.4 19.92-28.4-4-6.59-27.74-3.83-34.72 0a10.23 10.23 0 0 1 -5.06 1.59c-3.91.06-5.13-2.6-8.59-2.79-2.52-.14-4.47 1.28-8.36 4.12-2.87 2.08-8.87 6.47-7.87 9.41.12.38.43 1 5 3 2.7 1.17 5 2 6.73 2.63a11.36 11.36 0 0 0 5.71 14.27 10.94 10.94 0 0 0 2.13.78c-.49 1.74-1.11 4.13-1.71 7-1 4.86-.64 5.49-.4 5.81 1.86 2.47 8.85.09 12.26-1.08 4.51-1.55 6.79-2.33 8.12-4.47zm1.16-21.92a7.35 7.35 0 0 1 -3.37-3.35 7.39 7.39 0 1 1 3.37 3.35z"/>
                            <path d="m574.62 279.26h-23.72l39.35-105.81c4.89-14.5 13-23.53 29.94-23.53 18.83 0 28.24 11.11 28.24 27.68v75.12c0 4.33 2.64 7.15 6.4 7.15a7.45 7.45 0 0 0 7.17-5.27l30.88-81.14c4.89-14.5 13-23.53 29.94-23.53 18.83 0 28.24 11.11 28.24 27.68v101.67h-22.4v-100.56c0-4.52-2.64-7.34-6.4-7.34-3.2 0-5.84 2.26-7 5.46l-30.87 81.16c-4.89 14.5-13.18 23.53-30.12 23.53-18.64 0-28-11.11-28-27.86v-74.95c0-4.52-2.82-7.34-6.59-7.34-3.39 0-5.65 2.26-7 5.46z"/>
                            <path d="m851.75 152.17c36.9 0 57.42 21.09 57.42 63.82 0 42.55-20.33 63.26-57.42 63.26h-17.32c-37.09 0-57.43-20.71-57.43-63.25 0-42.74 20.52-63.82 57.42-63.82zm-17.32 22.22c-24.48 0-35.21 12.43-35.21 41.61 0 29 10.54 41 35.21 41h17.32c24.48 0 35-12.05 35-41.23 0-29-10.54-41.42-35-41.42z"/>
                            <path d="m1005.38 152.17c36.9 0 57.42 21.09 57.42 63.82 0 42.55-20.33 63.26-57.42 63.26h-17.32c-37.09 0-57.42-20.71-57.42-63.26 0-42.74 20.52-63.82 57.42-63.82zm-17.32 22.22c-24.48 0-35.21 12.43-35.21 41.61 0 29 10.54 41 35.21 41h17.32c24.48 0 35-12.05 35-41.23 0-29-10.54-41.42-35-41.42z"/>
                            <path d="m1111 279.26h-22.22v-101.67c0-16.57 9.41-27.68 29.18-27.68 17.7 0 25.6 9 30.88 23.53l37.09 81.14c1.51 3 4 5.27 8.1 5.27 4.71 0 7.53-2.82 7.53-7.15v-100.53h22.44v101.48c0 16.76-9.6 27.86-29.18 27.86-17.7 0-25.79-9-31.06-23.53l-37.09-81.14c-1.69-3.77-4-5.46-7.91-5.46-5.08 0-7.72 2.82-7.72 7.34z"/>
                            <path d="m1352.55 152.17v22.22h-65.14c-11.48 0-16.57 6.21-16.57 15.06 0 7.72 4 15.06 18.83 15.06h29.75c34.64 0 42.74 19.2 42.74 37.47 0 21.46-11.48 37.28-40.48 37.28h-70.79v-22.26h71.54c12 0 17.51-6.59 17.51-15.81 0-8.28-4.33-15.81-20-15.81h-29.56c-33.89 0-41.8-19-41.8-36.71 0-21.09 11.3-36.52 39.54-36.52h64.39z"/>
                            <path d="m1409 152.17v51.77h65v-51.77h22.4v127.08h-22.4v-53.09h-65v53.09h-22.22v-127.08z"/>
                            <path d="m1549.29 152.17v127.08h-22.22v-127.08z"/>
                            <path d="m1602 279.26h-22.22v-101.67c0-16.57 9.41-27.68 29.18-27.68 17.7 0 25.6 9 30.88 23.53l37.09 81.14c1.51 3 4 5.27 8.1 5.27 4.71 0 7.53-2.82 7.53-7.15v-100.53h22.44v101.48c0 16.76-9.6 27.86-29.18 27.86-17.7 0-25.79-9-31.06-23.53l-37.09-81.14c-1.69-3.77-4-5.46-7.91-5.46-5.08 0-7.72 2.82-7.72 7.34z"/>
                            <path d="m1847 152.17v22.22h-63.64c-13.37 0-19.2 6.21-19.2 16 0 10.35 6.59 15.06 19.39 15.06h62.45v20.14h-63.07c-12.8 0-19.39 5.08-19.39 15.44 0 10 6.21 16 19.2 16h64.39v22.22h-64.39c-30.12 0-42.36-14.87-42.36-34.64 0-14.5 6.59-24.29 18.26-29.18-11.86-4.9-17.89-14.69-17.89-28.62 0-20.33 12.61-34.64 42.55-34.64z"/>
                            <path d="m563.11 63.75a11.26 11.26 0 0 0 -.65-2.9 36.25 36.25 0 0 0 -2.39-5 150.79 150.79 0 0 0 -12.08-18 .82.82 0 0 0 -1.15-.14.82.82 0 0 0 -.14 1.15 128.86 128.86 0 0 1 11.68 17.91 29 29 0 0 1 2.13 4.75 6.69 6.69 0 0 1 .08 4.58 9.27 9.27 0 0 1 -2.89 3.76c-1.3 1.1-2.77 2.23-4.15 3.27a20.52 20.52 0 0 1 -4.33 2.56 10.56 10.56 0 0 1 -2.28.66 6.45 6.45 0 0 1 -1.17.1 9.29 9.29 0 0 1 -1.18 0c-3.15-.1-5.86-2.08-8.73-4.22a44.92 44.92 0 0 0 -4.65-3.14 22.46 22.46 0 0 0 -5.5-2.21 25.43 25.43 0 0 0 -5.88-.66 20.84 20.84 0 0 0 -6 .93 28.54 28.54 0 0 0 -5.42 2.35l-1.25.72-1.16.7-2.31 1.39-9.26 5.52c-6.17 3.69-12.38 7.31-18.6 10.93-12.44 7.22-25 14.3-37.66 21.14a7.85 7.85 0 0 0 -.89.57 6.73 6.73 0 0 0 -2.37 7.26s0 0 0 .06a6.77 6.77 0 0 0 .26.71 155.16 155.16 0 0 1 9.85 54.58c0 85-68.16 154-152.24 154s-152.18-68.98-152.18-154.01a154.18 154.18 0 0 1 80.17-135.65.74.74 0 0 0 .32-1 .74.74 0 0 0 -1-.36 165.8 165.8 0 0 0 -92.57 147.94c-.47 91.56 73.93 166.5 165.49 166.67a165.86 165.86 0 0 0 153.18-230.02q16.81-12.84 34.07-25.08c5.86-4.17 11.72-8.34 17.62-12.45l8.84-6.12 2.22-1.53 1.11-.77 1-.69a24.54 24.54 0 0 1 4.32-2.22 16.07 16.07 0 0 1 4.59-1 20 20 0 0 1 4.83.25 19.11 19.11 0 0 1 4.56 1.57 41.91 41.91 0 0 1 4.42 2.67 42.24 42.24 0 0 0 4.83 2.89 14 14 0 0 0 5.84 1.46 12.62 12.62 0 0 0 1.56-.13 9.77 9.77 0 0 0 1.51-.2 14.31 14.31 0 0 0 2.86-.94 23.49 23.49 0 0 0 4.82-3.09c1.44-1.18 2.78-2.29 4.18-3.56a11.51 11.51 0 0 0 3.37-4.86 8.39 8.39 0 0 0 .37-3.1z"/>
                        </g>
                    </svg>
                @endif
            </div>

            <form class="mt-8" action="{{ route(config('moonshine.route.prefix') . '.authenticate') }}" method="POST">
                @csrf

                <div class="rounded-md shadow-sm">
                    <div>
                        <input value="{{ old("email") }}" aria-label="{{ trans('moonshine::ui.login.email') }}" name="email" type="email" required
                               class="text-black appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 rounded-t-md focus:outline-none focus:shadow-outline-purple focus:border-purple focus:z-10 sm:text-sm sm:leading-5"
                               placeholder="{{ trans('moonshine::ui.login.email') }}">
                    </div>
                    <div class="-mt-px">
                        <input aria-label="{{ trans('moonshine::ui.login.password') }}" name="password" type="password" required
                               class="text-black appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-purple focus:border-purple focus:z-10 sm:text-sm sm:leading-5"
                               placeholder="{{ trans('moonshine::ui.login.password') }}">
                    </div>
                </div>

                @error("login")
                <span class="flex items-center font-medium tracking-wide text-pink text-xs mt-1 ml-1">
                        {{ $message }}
                    </span>
                @enderror

                <div class="mt-6 flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="hidden" name="remember" value="0">
                        <input id="remember_me" name="remember" value="1" type="checkbox" class="form-checkbox h-4 w-4 text-pink transition duration-150 ease-in-out">
                        <label for="remember_me" class="ml-2 block text-sm leading-5">
                            {{ trans('moonshine::ui.login.remember_me') }}
                        </label>
                    </div>
                </div>

                <div class="mt-6">
                    @include('moonshine::base.form.shared.btn', [
                       'type' => 'submit',
                       'class' => 'w-full',
                       'name' => trans('moonshine::ui.login.login')
                   ])
                </div>
            </form>

            @if(config('moonshine.socialite'))
                <div class="my-8 flex items-center justify-center space-x-4 space-y-2">
                    @foreach(config('moonshine.socialite') as $driver => $src)
                        <a href="{{ route(config('moonshine.route.prefix') . '.socialite.redirect', $driver) }}">
                            <img class="mx-auto h-12 w-auto" src="{{ $src }}" alt="{{ $driver }}">
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

@endsection
