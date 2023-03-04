<x-slot:title>
        Edit-Category
    </x-slot>
    <div class="content">
     <div class="intro-y box">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base mr-auto">
                                    Edit Category
                                </h2>
                                <div class="form-check form-switch w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0">
                                   <a href="{{ route('admin.categories')}}" class="btn btn-primary mt-5">All category</a> 
                                    <!-- //<input id="show-example-6" data-target="#vertical-form" class="show-code form-check-input mr-0 ml-3" type="checkbox"> -->
                                </div>
                            </div>
                            <div id="vertical-form" class="p-5">
                                <div class="preview">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert" >{{Session::get('message')}}</div>
                                @endif
                                <form wire:submit.prevent="updateCategory">
                                    <div>
                                        <label for="name" class="form-lable">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter category name" wire:model="name" wire:keyup="generateSlug">
                                            @error('name')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                            <!-- <label for="vertical-form-1" class="form-label">Name</label>
                                            <input id="vertical-form-1" type="text" class="form-control" placeholder="Enter category name"> -->
                                        </div>
                                        <div class="mt-3">
                                            <!-- <label for="vertical-form-2" class="form-label">Slug</label>
                                            <input id="vertical-form-2" type="text" class="form-control" placeholder="enter category slug"> -->
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


<!-- <div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block;
        }
    </style>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Edit Category
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6"> 
                                        Edit Category
                                    </div>
                                    <div class="col-md-6"> 
                                        <a href="{{ route('admin.categories')}}" class="btn btn-success float-end">All categories</a> 
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert" >{{Session::get('message')}}</div>
                                @endif
                                <form wire:submit.prevent="updateCategory">
                                    <div class="mb-3 mt3">
                                        <label for="name" class="form-lable">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter category name" wire:model="name" wire:keyup="generateSlug">
                                        @error('name')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="form-lable">Slug</label>
                                        <input type="text" name="slug" class="form-control" placeholder="Enter category slug" wire:model="slug">
                                        @error('slug')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary float-end">Submit</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
    </main>
</div> -->

