<!-- component -->

<div class="relative mx-auto my-10 w-1/2 md:w-1/6"><img class="rounded-full" src="{{asset('/assets/img/my.webp')}}" alt="">
    <svg class="absolute left-0" width="170px" height="170px">
        <use xlink:href="#dots-triangle"></use>
    </svg>
</div>
<div class="flex overflow-x-hidden relative items-top justify-center sm:items-center mt-10 mb-10 sm:pt-0">
    <div class="z-10 max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6 mr-2 sm:rounded-lg">
                    <h1 class="text-4xl sm:text-4xl font-bold">{{__('messages.contact.info.connection')}}</h1>
                    <p class="text-normal text-lg sm:text-2xl font-medium text-gray-600 dark:text-dark-theme mt-2">
                        {{__('messages.contact.info.fill')}}
                    </p>

                    <div class="flex items-center mt-8">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold w-40"><a class="underline"
                                                                                      href="">{{__('messages.contact.info.city')}}</a>
                            - 81405
                        </div>
                    </div>

                    <div class="flex items-center mt-4">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold w-40">
                            <a href="tel:+380981205481">+380981205481</a>
                        </div>
                    </div>

                    <div class="flex items-center mt-2">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="1.5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <div class="ml-4 text-md tracking-wide font-semibold w-40">
                            <a href="mailto:vetall995995@gmail.com">vetall995995@gmail.com</a>
                        </div>
                    </div>
                </div>

                <form action="{{route('form')}}" id="form" method="POST" class="p-6 flex flex-col justify-center">
                    @csrf
                    <div class="flex flex-col">
                        <label for="name" class="hidden">Full Name</label>
                        <input type="text" name="name" value="{{old('name')}}" id="name" placeholder="{{__('messages.contact.form.ful_name')}}"
                               class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:text-dark-theme text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none @error('name')is-invalid @enderror">
                        <x-is-invalid :messages="$errors->first('name')"/>
                    </div>

                    <div class="flex flex-col mt-2">
                        <label for="email" class="hidden">Email</label>
                        <input type="email" value="{{old('email')}}" name="email" id="email" placeholder="Email"
                               class="w-100 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:text-dark-theme text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none @error('email')is-invalid @enderror">
                        <x-is-invalid :messages="$errors->first('email')"/>
                    </div>

                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

                    <div class="flex flex-col mt-2">
                        <label for="phone" class="hidden">phone</label>
                        <input type="text" id="phone" name="phone" placeholder="{{__('messages.contact.form.phone')}}"
                               class="w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:text-dark-theme text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none @error('phone')is-invalid @enderror">
                        <x-is-invalid :messages="$errors->first('phone')"/>
                    </div>
                    <div class="flex flex-col mt-2">
                        <label for="text" class="hidden">textarea</label>
                        <textarea name="text" placeholder="{{__('messages.contact.form.info')}}"
                                  class="resize-y max-h-64 mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:text-dark-theme text-gray-800 font-semibold focus:border-indigo-500 focus:outline-none @error('text')is-invalid @enderror">{{old('text')}}</textarea>
                        <x-is-invalid :messages="$errors->first('text')"/>
                    </div>

                    <button type="button" onclick="onClick(event)"
                            class="w-1/2 disabled:bg-gray-400 bg-sky-500 hover:bg-sky-700 transition text-white font-medium py-3 px-6 rounded-lg mt-3">
                        Відправити
                    </button>
                    <x-is-invalid :messages="$errors->first('g-recaptcha-response')"/>
                </form>
            </div>
        </div>
    </div>
    <div class="absolute bottom-0">
        <svg width="725" height="166" xmlns="http://www.w3.org/2000/svg" class="z-0">
            <g fill="#1C75BC" fill-rule="evenodd">
                <g opacity=".515">
                    <path
                        d="M1.848 165.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 162a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 162a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 162a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.523 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                        opacity=".503"></path>
                </g>
                <g opacity=".9">
                    <g opacity=".515">
                        <path
                            d="M1.848 147.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 144a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 144a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 144a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.523 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503"></path>
                    </g>
                </g>
                <g opacity=".8">
                    <g opacity=".515">
                        <path
                            d="M1.848 129.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 126a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 126a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 126a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.523 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503"></path>
                    </g>
                </g>
                <g opacity=".7">
                    <g opacity=".515">
                        <path
                            d="M1.848 111.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 108a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 108a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 108a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.523 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503"></path>
                    </g>
                </g>
                <g opacity=".6">
                    <g opacity=".515">
                        <path
                            d="M1.848 93.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 90a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM38.804 90a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM57.283 90a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 90a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM94.24 90a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 90a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM260.76 90a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503"></path>
                    </g>
                </g>
                <g opacity=".5">
                    <g opacity=".515">
                        <path
                            d="M1.848 75.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 72a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM38.804 72a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM57.283 72a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 72a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM94.24 72a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 72a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM260.76 72a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503"></path>
                    </g>
                </g>
                <g opacity=".4">
                    <g opacity=".515">
                        <path
                            d="M1.848 57.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 54a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM38.804 54a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM57.283 54a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 54a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM94.24 54a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 54a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM260.76 54a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503"></path>
                    </g>
                </g>
                <g opacity=".3">
                    <g opacity=".515">
                        <path
                            d="M1.848 39.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 36a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM38.804 36a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM57.283 36a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 36a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM94.24 36a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 36a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM260.76 36a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503"></path>
                    </g>
                </g>
                <g opacity=".2">
                    <g opacity=".515">
                        <path
                            d="M1.848 21.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 18a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM38.804 18a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM57.283 18a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 18a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM94.24 18a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.305 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 18a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM260.76 18a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.52 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.521 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm-351.522 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503"></path>
                    </g>
                </g>
                <g opacity=".1">
                    <g opacity=".515">
                        <path
                            d="M1.848 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM20.326 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM38.804 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM57.283 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM75.76 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM94.24 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM112.718 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM131.197 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM149.675 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM168.153 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM186.848 3.696a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zm370 0a1.848 1.848 0 1 1 0-3.696 1.848 1.848 0 0 1 0 3.696zM205.326 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM223.804 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM242.283 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM260.76 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM279.24 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM297.718 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM316.197 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM334.675 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zM353.153 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696zm370 0a1.848 1.848 0 1 1 0 3.696 1.848 1.848 0 0 1 0-3.696z"
                            opacity=".503"></path>
                    </g>
                </g>
            </g>
        </svg>
    </div>
</div>
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
    <script>
        const input = document.querySelector("#phone");

        // function onSubmit(token) {
        //     document.getElementById("form").submit();
        // }
        let ini = window.intlTelInput(input, {
            initialCountry: "auto",
            geoIpLookup: function (callback) {
                fetch("https://ipapi.co/json")
                    .then(function (res) {
                        return res.json();
                    })
                    .then(function (data) {
                        callback(data.country_code)
                    })
                    .catch(function (e) {
                        callback("us");
                    })
            },
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
        });
        ini.promise.then(function () {
            input.value = "{{old('phone')}}";
        });
    </script>
    <script>
        function onClick(e) {
            e.preventDefault();
            grecaptcha.ready(function () {
                grecaptcha.execute('{{env('RECAPTCHA_SITE_KEY')}}', {action: 'form'}).then(function (token) {
                    document.getElementById("g-recaptcha-response").value = token;
                    document.getElementById("form").submit();
                });
            });
        }
    </script>
    <script>
        let errors = "{{$errors->any()}}";

        if(errors) {
            let formBlock = document.getElementById('form');
            formBlock.scrollIntoView({ behavior: 'auto', block: 'start' });
        }
    </script>
@endpush