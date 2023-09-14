<div class="mx-auto container p-10">
    <div class="flex flex-col items-center gap-5 sm:gap-10 md:gap-20">
        <div class="flex items-center text-center gap-5 sm:gap-30 sm:text-left justify-center flex-col sm:flex-row">
            <div class="dev-info flex flex-col gap-3">
                <h2 class="text-4xl">Full-stack web developer</h2>
                <p class="text-sky-500 font-bold text-2xl">{{__('messages.welcome')}}</p>
            </div>
            <div class="mt-8 sm:mt-0"><img
                    src="https://res.cloudinary.com/dqzxpn5db/image/upload/v1554258271/andremadarang.com/hero.svg"
                    alt="hero" class="mx-auto sm:mx-0"></div>
        </div>
        <div class="text-xl max-w-3xl">
            {{__('messages.skils.line1')}} <x-skils link="https://laravel.com/">Laravel PHP framework</x-skils> {{__('messages.skils.line2')}} <x-skils link="https://vuejs.org/">Vue.js</x-skils> {{__('messages.skils.line3')}} <x-skils link="https://tailwindcss.com/">Tailwind CSS</x-skils> {{__('messages.skils.line4')}}
        </div>
        <div class="flex justify-between items-center py-16 border-b-2 border-b-gray-600">
            <div class="w-full sm:w-1/2"><img
                    src="https://res.cloudinary.com/dqzxpn5db/image/upload/v1554258271/andremadarang.com/browser.svg"
                    alt="browser" class="mx-auto sm:m-0"></div>
            <div class="w-1/2 hidden sm:flex justify-end"><img
                    src="https://res.cloudinary.com/dqzxpn5db/image/upload/v1554258271/andremadarang.com/mobile.svg"
                    alt="mobile"></div>
        </div>
    </div>
</div>
