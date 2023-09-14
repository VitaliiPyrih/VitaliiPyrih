<div class="mx-auto container p-3">
        <h2 class="text-left sm:text-center text-3xl mb-10">{{__('messages.about_me.info')}}</h2>
    <div class="content flex flex-col gap-6">
        <div class="content w-full md:w-2/3 mx-auto">
            <div class="checkmark">
                <h3 class="text-2xl mb-5">{{__('messages.about_me.portfolio.line1')}}</h3>
                <p class="text-xl">{{__('messages.about_me.portfolio.line2')}} <x-skils link="">GitHub</x-skils></p>
            </div>
        </div>
        <div class="content w-full md:w-2/3 mx-auto">
            <div class="checkmark">
                <h3 class="text-2xl mb-5">{{__('messages.about_me.resume.line1')}}</h3>
                <p class="text-xl">{{__('messages.about_me.resume.line2')}} <x-skils link="{{route('cv')}}">HTML {{__('messages.about_me.resume.line4')}}</x-skils> {{__('messages.about_me.resume.line3')}} <x-skils link="{{asset('/assets/Vitalii_Pyrih_CV.pdf')}}">PDF {{__('messages.about_me.resume.line4')}}</x-skils></p>
            </div>
        </div>
        <div class="content w-full md:w-2/3 mx-auto">
            <div class="checkmark">
                <h3 class="text-2xl mb-5">{{__('messages.about_me.home.line1')}}</h3>
                <p class="text-xl">{{__('messages.about_me.home.line2')}} <x-skils link="">Live Link.</x-skils></p>
            </div>
        </div>
    </div>

</div>
