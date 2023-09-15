<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
    <link rel="canonical" href="{{route('home')}}" />
    <meta name='robots' content='index, follow'/>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{config('app.name','Laravel')}}</title>
    <meta name="description" content="Професійна розробка веб-сайтів та веб-додатків для малого та середнього бізнесу. Створення креативних та інтерактивних веб-рішень для вашого бізнесу.">
    <script src="https://www.google.com/recaptcha/api.js?render={{env('RECAPTCHA_SITE_KEY')}}"></script>
</head>
<body>
<div>
    <div class="line h-3 bg-gradient-to-r from-sky-600 to-blue-500"></div>
    <div class="wrapper text-white-theme dark:text-dark-theme transition duration-200 dark:bg-dark-theme min-h-screen">
        @if ($errors->has('blocked') || $errors->has('sending_error'))
                <x-sending-error error="{{$errors->first()}}"/>
        @endif
        @if(session('success'))
            <div class="modal bg-gray-800 rounded-2xl fixed left-1/2 z-20 top-1/2 -translate-x-1/2 -translate-y-1/2 w-96 p-6  md:mx-auto">
                <svg viewBox="0 0 24 24" class="text-green-600 w-16 h-16 mx-auto my-6">
                    <path fill="currentColor"
                          d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z">
                    </path>
                </svg>
                <div class="text-center text-white">
                    <h3 class="md:text-2xl text-base font-semibold text-center">{{__('messages.success.done')}}!</h3>
                    <p class="my-2">{{__('messages.success.message')}}</p>
                    <p>{{__('messages.success.day')}}</p>
                    <div class="py-10 text-center">
                        <a href="#" class="close px-12 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3">
                            {{__('messages.success.close')}}
                        </a>
                    </div>
                </div>
            </div>
        @endif
        <div class="container">
            @if($header)
                {{$header}}
            @endif
            {{$slot}}
        </div>
        @if($footer)
            {{$footer}}
        @endif
    </div>
</div>

<script>
    let modal = document.querySelector('.modal');
    if(modal) {
        document.querySelector('.close').addEventListener('click', function(e) {e.preventDefault(); modal.remove()})
    }
</script>
<script src="{{asset('/assets/js/script.js')}}" data-app="{{config('app.locale')}}"></script>
@stack('script')
</body>
</html>
