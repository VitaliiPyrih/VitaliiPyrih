<x-app-layout>
    <x-slot name="header">
        @include('partials.header',['locale' => $locale])
    </x-slot>
    <div class="container">
        <section class="info">
            <div class="grid grid-cols-5 justify-items-center">
                <div class="img col-span-full md:col-span-1 w-1/3 md:w-5/6"><img class="rounded-full" src="{{asset('/assets/img/my.webp')}}" alt=""></div>
                <div class="info col-span-full md:col-span-4 p-5">
                    <div class="info_name flex flex-col gap-4">
                        <h1 class="text-4xl text-center md:text-left">Vitalii Pyrih</h1>
                        <p class="text-sky-500 text-2xl text-center md:text-left">Full Stack Web Developer</p>
                        <div class="contact flex flex-wrap gap-5 justify-center md:justify-between">
                            <x-cv-contact name="mySite" link="http://127.0.0.1:8000"><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" class="icon w-5"><path d="M1520 1216q0-40-28-68l-208-208q-28-28-68-28-42 0-72 32 3 3 19 18.5t21.5 21.5 15 19 13 25.5 3.5 27.5q0 40-28 68t-68 28q-15 0-27.5-3.5t-25.5-13-19-15-21.5-21.5-18.5-19q-33 31-33 73 0 40 28 68l206 207q27 27 68 27 40 0 68-26l147-146q28-28 28-67zm-703-705q0-40-28-68l-206-207q-28-28-68-28-39 0-68 27l-147 146q-28 28-28 67 0 40 28 68l208 208q27 27 68 27 42 0 72-31-3-3-19-18.5t-21.5-21.5-15-19-13-25.5-3.5-27.5q0-40 28-68t68-28q15 0 27.5 3.5t25.5 13 19 15 21.5 21.5 18.5 19q33-31 33-73zm895 705q0 120-85 203l-147 146q-83 83-203 83-121 0-204-85l-206-207q-83-83-83-203 0-123 88-209l-88-88q-86 88-208 88-120 0-204-84l-208-208q-84-84-84-204t85-203l147-146q83-83 203-83 121 0 204 85l206 207q83 83 83 203 0 123-88 209l88 88q86-88 208-88 120 0 204 84l208 208q84 84 84 204z"></path></svg></x-cv-contact>
                            <x-cv-contact name="Ukraine" link="https://uk.wikipedia.org/wiki/%D0%A3%D0%BA%D1%80%D0%B0%D1%97%D0%BD%D0%B0">
                                <img class="w-5" src="{{asset('/assets/img/ua-flag-icon.svg')}}" alt=""></x-cv-contact>
                            <x-cv-contact name="vetall995995@gmail.com" link="mailto:vetall995995@gmail.com"><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" class="icon w-5"><path d="M1664 1504v-768q-32 36-69 66-268 206-426 338-51 43-83 67t-86.5 48.5-102.5 24.5h-2q-48 0-102.5-24.5t-86.5-48.5-83-67q-158-132-426-338-37-30-69-66v768q0 13 9.5 22.5t22.5 9.5h1472q13 0 22.5-9.5t9.5-22.5zm0-1051v-24.5l-.5-13-3-12.5-5.5-9-9-7.5-14-2.5h-1472q-13 0-22.5 9.5t-9.5 22.5q0 168 147 284 193 152 401 317 6 5 35 29.5t46 37.5 44.5 31.5 50.5 27.5 43 9h2q20 0 43-9t50.5-27.5 44.5-31.5 46-37.5 35-29.5q208-165 401-317 54-43 100.5-115.5t46.5-131.5zm128-37v1088q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-1088q0-66 47-113t113-47h1472q66 0 113 47t47 113z"></path></svg></x-cv-contact>
                        </div>
                    </div>
                    <div class="paragraph text-2xl md:text-lg">
                        <x-cv-paragraph>{{__('messages.about_my.line1')}}</x-cv-paragraph>
                        <x-cv-paragraph>{{__('messages.about_my.line2')}}</x-cv-paragraph>
                        <x-cv-paragraph>{{__('messages.about_my.line3')}}</x-cv-paragraph>
                        <x-cv-paragraph>{{__('messages.about_my.line4')}}</x-cv-paragraph>
                    </div>
                </div>
            </div>
            <hr class="w-2/3 mx-auto">
        </section>
        <section class="education">
            <div class="grid grid-cols-5 items-center p-10">
                <div class="col-span-full mb-5 md:col-span-1 w-1/3 md:w-5/6">
                    <h2 class="font-mono text-2xl">{{__('messages.education.name')}}</h2>
                </div>
                <div class="col-span-full text-xl justify-between flex flex-col md:flex-row md:col-span-4">
                    <div class="left">
                        <div class="font-bold"><p>{{__('messages.education.name')}}</p></div>
                        <ul>
                            <li>{{__('messages.education.skills1')}}</li>
                            <li>{{__('messages.education.skills2')}}</li>
                        </ul>
                    </div>
                    <div class="exp_data">
                        <p>2010-2013</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="skills">
            <div class="grid grid-cols-5 items-center p-10">
                <div class="col-span-full mb-5 md:col-span-1 w-1/3 md:w-5/6">
                    <h2 class="font-mono text-2xl">{{__('messages.skills.name')}}</h2>
                </div>
                <div class="col-span-full text-xl justify-between flex flex-col md:flex-row md:col-span-4">
                    <div class="left">
                        <div class="font-bold"><p>{{__('messages.skills.name2')}}</p></div>
                        <ul>
                            <li>PHP,Laravel,SQL,MySQL</li>
                            <li>Vue,Vuex,JavaScript,API</li>
                            <li>TailwindCSS,CSS,HTML,Bootstrap,Materialized</li>
                            <li>Linux,Git,Docker,Postman,Redis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="languages">
            <div class="grid grid-cols-5 items-center p-10">
                <div class="col-span-full mb-5 md:col-span-1 w-1/3 md:w-5/6">
                    <h2 class="font-mono text-2xl">{{__('messages.languages.name')}}</h2>
                </div>
                <div class="col-span-full text-xl md:col-span-4">
                    <div class="left">
                        <ul>
                            <li>Ukraine - {{__('messages.languages.native')}}</li>
                            <li>English - {{__('messages.languages.worked')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <x-slot name="footer">
        @include('partials.footer')
    </x-slot>
</x-app-layout>
