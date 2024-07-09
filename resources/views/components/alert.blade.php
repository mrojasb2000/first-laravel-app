@props(['type'])

@php
    switch ($type) {
        case 'info':
            $class = 'text-blue-800 bg-blue-50 dark:text-blue-500';
            break;
        case 'danger':
            $class = 'text-red-800 bg-red-50 dark:text-red-500';
            break;
        case 'success':
            $class = 'text-green-800 bg-green-50 dark:text-green-500';
            break;    
        case 'warning':
            $class = 'text-yellow-800 bg-yellow-50 dark:text-yellow-500';
            break;   
        default:
            $class = 'text-gray-800 bg-gray-50 dark:text-gray-500';
            break;
    }
@endphp
<div class="p-4 mb-4 text-sm rounded-lg {{$class}}" role="alert">
    <span class="font-medium">{{ $title }} Alert!</span> {{ $slot }}
</div>

