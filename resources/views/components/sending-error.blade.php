@props(['error'])
<div class="modal bg-gray-800 rounded-2xl fixed left-1/2 z-20 top-1/2 -translate-x-1/2 -translate-y-1/2 w-96 p-6  md:mx-auto">
    <svg class="text-green-600 w-16 h-16 mx-auto my-6" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 122.88" style="enable-background:new 0 0 122.88 122.88" xml:space="preserve"><style type="text/css">.st0{fill:#D8453E;}</style><g><path class="st0" d="M61.44,0c8.31,0,16.24,1.66,23.49,4.66c7.53,3.12,14.3,7.68,19.96,13.34c5.66,5.66,10.22,12.42,13.34,19.96 c3,7.25,4.66,15.18,4.66,23.49c0,8.31-1.66,16.24-4.66,23.49c-3.12,7.53-7.68,14.3-13.34,19.96c-5.66,5.66-12.42,10.22-19.96,13.34 c-7.25,3-15.18,4.66-23.49,4.66s-16.24-1.66-23.49-4.66c-7.53-3.12-14.3-7.68-19.96-13.34C12.34,99.23,7.78,92.46,4.66,84.93 C1.66,77.68,0,69.75,0,61.44c0-8.31,1.66-16.24,4.66-23.49C7.78,30.42,12.34,23.65,18,18c5.66-5.66,12.42-10.22,19.96-13.34 C45.2,1.66,53.13,0,61.44,0L61.44,0z M49.13,16.62l38.18,83.42c0.93-0.63,1.84-1.28,2.72-1.97c1.46-1.14,2.89-2.41,4.26-3.78 c4.29-4.29,7.75-9.41,10.09-15.08c2.26-5.47,3.51-11.47,3.51-17.78c0-6.31-1.25-12.31-3.51-17.78c-2.35-5.67-5.8-10.79-10.09-15.08 c-4.29-4.29-9.41-7.75-15.08-10.09c-5.47-2.26-11.47-3.51-17.78-3.51c-2.54,0-5.01,0.2-7.38,0.58 C52.4,15.82,50.75,16.18,49.13,16.62L49.13,16.62z M73.75,106.26L35.57,22.83c-0.93,0.63-1.84,1.28-2.72,1.97 c-1.46,1.14-2.89,2.41-4.26,3.78c-4.29,4.29-7.75,9.41-10.09,15.08c-2.26,5.47-3.51,11.47-3.51,17.78c0,6.31,1.25,12.31,3.51,17.78 c2.35,5.67,5.8,10.79,10.09,15.08s9.41,7.75,15.08,10.09c5.47,2.26,11.47,3.51,17.78,3.51c2.54,0,5.01-0.2,7.38-0.58 C70.48,107.06,72.13,106.7,73.75,106.26L73.75,106.26z"/></g></svg>                <div class="text-center text-white">
        <h3 class="md:text-2xl text-base font-semibold text-center">Error</h3>
        <p>{{$error}}</p>
        <div class="py-10 text-center">
            <a href="#" class="close px-12 bg-indigo-600 hover:bg-indigo-500 text-white font-semibold py-3">
                {{__('messages.success.close')}}
            </a>
        </div>
    </div>
</div>