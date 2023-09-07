<div class="mx-auto container p-10">
    <div class="flex flex-col sm:flex-row gap-5 justify-around items-center">
        <div class="name">
            <h1 class="text-2xl font-semibold">{{__('messages.first_name')}}#{{__('messages.last_name')}}</h1>
        </div>
        <div class="nav-right items-center flex gap-5">
            <div class="theme">
                <a href="#" class="sun hover:text-gray-600"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"></path></svg></a>
                <a href="#" class="moon hidden hover:text-gray-600"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></a>
            </div>
            <ul class="flex gap-5">
                <x-nav-link>{{__('messages.course')}}</x-nav-link>
            </ul>
            <div class="lang">
                <div class="relative select-none">
                    <div class="current cursor-pointer bg-gray-400 hover:bg-gray-500 dark:bg-sky-950 dark:hover:bg-sky-900 transition rounded p-2">
                        <img class="select w-5" src="/assets/img/united-states-flag-icon.svg" alt="Ukraine">
                    </div>
                    <div class="option hidden absolute top-7">
                        <div class="bg-gray-800 p-2 flex flex-col gap-2">
                            <div class="lang cursor-pointer">
                                <img class="w-5" src="/assets/img/ukraine-flag-icon.svg" alt="Ukraine">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
