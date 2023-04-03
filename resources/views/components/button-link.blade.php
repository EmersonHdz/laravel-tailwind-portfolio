<div>
   @php
   $class = [
       'py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded leading-normal border inline-block transition',
   ];

   switch ($variant) {
       case 'outline-primary':
           $class[] = 'border-primary text-primary hover:bg-primary hover:border-primary hover:text-white';
           break;
       case 'outline-red':
           $class[] = 'border-red-700 text-red-700 hover:bg-red-700 hover:border-red-700 hover:text-white';
           break;
       case 'red':
           $class[] = 'bg-red-700 border-red-700 text-white hover:bg-red-800';
           break;
       case 'dark':
           $class[] = 'bg-gray-900 border-gray-700 text-white hover:bg-gray-800';
           break;
       default: // primary
           $class[] = 'bg-primary border-primary text-white hover:bg-opacity-80';
           break;
   }
@endphp

<div>
   <a href="{{ $href }}" target="{{ $target }}" {{ $attributes->class($class) }}>
       {{ $slot }}
   </a>
</div>
</div>