<x-homelayout>
    <section class='mx-3 md:mx-5 mt-3 md:mt-5'>
    <h1 class="text-2xl font-bold text-slate-800  md:text-3xl mb-3">manage your categories on this page Add,Delete and Edit categories</h1>
    <a href="{{route('dashboard')}}" class=" text-md  font-semibold text-white bg-red-400 py-2 px-3 rounded-md">home</a>
        <form method="POST" action="{{route('createCategory')}}">
            @csrf
           <h1 class='text-md font-semibold text-slate-500 text-center mt-3'>Add categories</h1>
            @if(session()->has('message'))
           <h1 class="text-md text-white">{{session('message')}}</h1>
           @endif
           <div class='border-2 border-dashed border-red-400 flex justify-center py-3'>
                <div>
                <label for="category"></label><br />
                <input type="text" name='name' id='category' class='w-70 md:w-140 border-1 rounded-md py-4 px-4'><br />
                <input type="submit" value='add' class=" text-base text-white capitalize py-2 px-3 bg-slate-800 rounded-md my-3">
                @error('name')
                <h1 class='text-red-600'>{{$message}}</h1>
                @enderror
            </div>
            </div>
        </form>
        <h1 class='text-md font-semibold text-slate-500 text-center mt-10'>manage categories</h1>
        <h1 class='text-md font-semibold text-red-500 mt-3'>Note:for any category deleted,all the associated items will be deleted as well!!!</h1>
        <div class='wrapper space-y-2'>
            @foreach($categories as $category)
        <div class="flex items-center justify-between bg-slate-600 text-white  p-4 rounded-lg shadow-sm ">
        <div>
        <p class="font-semibold">{{$category->name}}</p>
        </div>
        <div class="flex items-center space-x-2">
        <button class="flex h-9 w-9 items-center justify-center rounded-md border border-border-light dark:border-border-dark hover:bg-neutral-light dark:hover:bg-gray-700">
        <span class="material-symbols-outlined text-lg"><a href='{{route('editcategory',$category->id)}}'>edit</a></span>
        </button>
        <form action="{{route('deleteCategory',$category->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="flex h-9 w-9 items-center justify-center rounded-md border border-border-light dark:border-border-dark hover:bg-red-50 dark:hover:bg-red-900/30">
         <input type="submit" value='delete' class="material-symbols-outlined text-lg text-red-600 dark:text-red-500">
        </button>
        </form>
        </div>
        </div>
            @endforeach
        </div>
</section>
</x-homelayout>