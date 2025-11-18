{{-- small and md device navebar --}}
<div class="sticky top-0 z-50 bg-background-dark/30 backdrop-blur-sm block md:hidden">
    <div class='flex items-center gap-2 p-2'>
    <img src="{{ asset('images/newLogo.png') }}" class="w-[60px]" alt="Logo">

    <h2 class="font-serif text-lg font-bold tracking-wide text-white">
        TOWOBOLA LUXE
    </h2>

    <button class="ml-auto h-12 rounded-lg bg-transparent text-white" id='triggerBtn'>
        <span class="material-symbols-outlined text-3xl">menu</span>
    </button>
    </div>
     <div class=' bg-neutral-600 hidden' id='mobileNavList'>
        <ul class='text-center text-base capitalize '>
            <li class='py-2  border-b border-white'><a href='{{route('home')}}'>home</a></li>
             <li class='py-2 border-b border-white'><a href='{{route('bookfittings')}}'>book fitting</a></li>
              <li class='py-2 border-b border-white'><a href='{{route('about')}}'>about</a></li>
               <li class='py-2 border-b border-white'><a href='{{route('contact')}}'>contact</a></li>
               <li class='py-2 '><a href='{{route('lookBook')}}'>look book</a></li>
        </ul>
    </div>
</div>
{{-- large device nav bar device navebar --}}
<div class="sticky top-0 z-50 bg-background-dark/30 backdrop-blur-sm hidden md:block">
    <div class='flex justify-between items-center gap-2 p-2'>

    <div class='flex gap-5 items-center'>
        <img src="{{ asset('images/newLogo.png') }}" class="w-[80px] h-[80px]" alt="Logo">
    <h2 class="font-serif text-xl font-bold tracking-wide text-white">
        TOWOBOLA LUXE
    </h2>
    </div>

     <div><ul class='text-lg font-semibold capitalize  flex gap-5 items-center mr-5'>
            <li class='py-2'><a href='{{route('home')}}'>home</a></li>
             <li class='py-2'><a href='{{route('bookfittings')}}'>book fitting</a></li>
              <li class='py-2'><a href='{{route('about')}}'>about</a></li>
               <li class='py-2'><a href='{{route('contact')}}'>contact</a></li>
               <li class='py-2 '><a href='{{route('lookBook')}}'>look book</a></li>
        </ul></div>

   
    </div>
</div>
<script>
  let triggerBtn=document.getElementById('triggerBtn');
  let mobileNavList=document.getElementById('mobileNavList');
triggerBtn.addEventListener('click', () => {
      mobileNavList.classList.toggle('hidden');
      triggerBtn.innerHTML = mobileNavList.classList.contains('hidden') 
        ? ' <span class="material-symbols-outlined text-3xl">menu</span>' 
        : '<h1 class="text-3xl font-bold capitalize text-white">x</h1>';
    });
    </script>



