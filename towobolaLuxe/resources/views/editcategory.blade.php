<x-homelayout>
    <section class='mx-3 md:mx-5 mt-3 md:mt-5'>
    <h1 class="text-2xl font-bold text-slate-800  md:text-3xl mb-3">update your categories on this page Add,Delete and Edit categories</h1>
    <a href="{{route('dashboard')}}" class=" text-md  font-semibold text-white bg-red-400 py-2 px-3 rounded-md">home</a>
       
         <form method="post" action="{{route('updateCategory',$category->id)}}">
            @method('PUT')
            @csrf
           <h1 class='text-md font-semibold text-slate-500 text-center mt-3'>update categories</h1>
            @if(session()->has('message'))
           <h1 class="text-md text-white">{{session('message')}}</h1>
           @endif
           <div class='border-2 border-dashed border-red-400 flex justify-center py-3'>
                <div>
                <label for="category"></label><br />
                <input type="text" name='name' id='category' value='{{$category->name}}' class='w-70 md:w-140 border-1 rounded-md py-4 px-4'><br />
                <input type="submit" value='update' class=" text-base text-white capitalize py-2 px-3 bg-yellow-400 rounded-md my-3">
                @error('name')
                <h1 class='text-red-600'>{{$message}}</h1>
                @enderror
            </div>
            </div>
        </form>
        
       
        
</section>
</x-homelayout>