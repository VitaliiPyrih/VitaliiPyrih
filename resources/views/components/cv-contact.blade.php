@props(['link','name'])
<div class="fill-gray-500 text-xl md:text-lg flex gap-3 underline underline-offset-4 dark:fill-white">{{$slot}}<a href="{{$link}}">{{$name}}</a></div>
