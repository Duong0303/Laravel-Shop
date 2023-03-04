<x-slot:title>
        All-Category
    </x-slot>
<div class="content">
    <div class="col-span-12 mt-6">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    All Category
                </h2>
                <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                    <a href="{{route('admin.category.add')}}"> <button class="btn btn-primary mt-5" ></i> Add new category </button></a>
                </div>
            </div>
            <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                <table class="table table-report sm:mt-2">
                    @if(Session::has('message'))
                        <div class="btn btn-success " role="alert" >{{Session::get('message')}}</div>
                    @endif
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap">#</th>
                            <th class="whitespace-nowrap">NAME</th>
                            <th class="text-center whitespace-nowrap">Slug</th>
                            <th class="text-center whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = ($categories->currentPage()-1)*$categories->perPage() ;
                        @endphp
                        @foreach($categories as $category)
                        <tr class="intro-x">
                            <td class="w-40">
                                {{++$i}}
                            </td>
                            <td>
                                <a href="" class="font-medium whitespace-nowrap">{{$category->name}}</a>
                            </td>
                            <td class="text-center">{{$category->slug}}</td>

                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3" href="{{ route('admin.category.edit',['category_id'=>$category->id])}}"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-danger" href=""  wire:click.prevent="deleteCategory({{$category->id}})"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$categories->links()}}
            </div>
        </div>
</div>

