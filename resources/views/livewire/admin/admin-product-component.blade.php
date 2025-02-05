 <x-slot:title>
        All-Products
    </x-slot>
<div class="content">
<div class="col-span-12 mt-6">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                All Products
            </h2>
            <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                <a href="{{route('admin.products.add')}}"><button class="btn btn-primary mt-5" ></i> Add Products </button></a>
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
                        <th class="whitespace-nowrap">Image</th>
                        <th class="text-center whitespace-nowrap">Name</th>
                        <th class="text-center whitespace-nowrap">Stock</th>
                        <th class="text-center whitespace-nowrap">Price</th>
                        <th class="text-center whitespace-nowrap">Category</th>
                        <th class="text-center whitespace-nowrap">Date</th>
                        <th class="text-center whitespace-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $i = ($products->currentPage()-1)*$products->perPage() ;
                @endphp
                @foreach($products as $product)
                    <tr class="intro-x">
                        <td class="w-40">
                        {{++$i}}
                        </td>
                        <td>
                        <img src="{{ asset('assets/imgs/products')}}/{{ $product->image}}" alt="{{$product->name}}" width="60">
                        </td>
                        <td class="text-center">{{$product->name}}</td>
                        <td class="w-40">
                        {{$product->stock_status}}
                        </td>
                        <td class="text-center">{{$product->regular_price}}</td>
                        <td class="text-center">{{optional($product->category)->name??null}}</td>
                        <td class="text-center">{{$product->created_at}}</td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                            <a href="{{ route('admin.products.edit',['product_id'=>$product->id])}}" class="text-info">Edit</a>
                            <a href="#" wire:click.prevent="deleteProduct({{$product->id}})" class="text-danger" style="margin-left:20px;">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$products->links()}}
        </div>
    </div>
</div>






{{-- <div>
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
                    <span></span> All Products
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
                                        All Products
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{route('admin.products.add')}}" class="btn btn-success float-end">Add Products</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Stock</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = ($products->currentPage()-1)*$products->perPage() ;
                                        @endphp
                                        @foreach($products as $product)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td><img src="{{ asset('assets/imgs/products')}}/{{ $product->image}}" alt="{{$product->name}}" width="60"></td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->stock_status}}</td>
                                                <td>{{$product->regular_price}}</td>
                                                <td>{{$product->category->name}}</td>
                                                <td>{{$product->created_at}}</td>
                                                <td>
                                                    <a href="{{ route('admin.products.edit',['product_id'=>$product->id])}}" class="text-info">Edit</a>
                                                    <a href="#" onclick="deleteConfirmation({{$product->id}})" class="text-danger" style="margin-left:20px;">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$products->links()}}
                            </div>
                        </div>

                    </div>
                </div>
            </section>
    </main>
</div>
<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3">Do you want to delete thisrecord? </h4>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#deleteConfirmation">Cannel</button>
                        <button type="button" class="btn btn-danger" onclick="deleteProduct()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
{
    <script>
        function deleteConfirmation(id)
        {
            @this.set('product_id',id);
            $('#deleteConfirmation').modal('show');
        }
        function deleteProduct()
        {
            @this.call('deleteProduct');
            $('#deleteConfirmation').modal('hide');
        }
    </script>
}
@endpush --}}


