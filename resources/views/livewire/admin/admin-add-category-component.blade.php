
<x-slot:title>
        Add-Category
    </x-slot>
<div class="content">
     <div class="intro-y box">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                Add new Category
            </h2>
            <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                <a href="{{ route('admin.categories')}}" class="btn btn-primary mt-5">All category</a>
            </div>
        </div>
        <div id="vertical-form" class="p-5">
            <div class="preview">
            @if(Session::has('message'))
                <div class="btn btn-success " role="alert" >{{Session::get('message')}}</div>
            @endif
            <form wire:submit.prevent="storeCategory">
                <div>
                    <label for="name" class="form-lable">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter category name" wire:model="name" wire:keyup="generateSlug">
                        @error('name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="name" class="form-lable">Slug</label>
                        <input type="text" name="slug" class="form-control" placeholder="Enter category slug" wire:model="slug">
                        @error('slug')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit"  class="btn btn-primary mt-5">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


 {{-- <x-slot:title>
        Add-Category
    </x-slot>
<div class="content">
    <div class="intro-y box">
        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
            <h2 class="font-medium text-base mr-auto">
                Add new Category
            </h2>
            <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                <a href="{{ route('admin.categories')}}" class="btn btn-primary mt-5">All category</a>
            </div>
        </div>
        <div id="vertical-form" class="p-5">
            <div class="preview">
            @if(Session::has('message'))
                <div class="alert alert-secondary show flex items-center mb-2" role="alert" >{{Session::get('message')}}</div>
            @endif
            <form wire:submit.prevent="storeCategory">
                <div>
                    <label for="name" class="form-lable">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter category name" wire:model="name" wire:keyup="generateSlug">
                        @error('name')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="name" class="form-lable">Slug</label>
                        <input type="text" name="slug" class="form-control" placeholder="Enter category slug" wire:model="slug">
                        @error('slug')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <button type="submit"  class="btn btn-primary mt-5">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}

