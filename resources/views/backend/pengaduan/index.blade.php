@extends('backend.layouts.app')

@section('title') {{ __($module_title) }} @endsection

@section('breadcrumbs')
<x-backend.breadcrumbs>
    <x-backend.breadcrumb-item type="active" icon='{{ $module_icon }}'>{{ __($module_title) }}</x-backend.breadcrumb-item>
</x-backend.breadcrumbs>
@endsection

@section('content')



<div class="card">
        <div class="card-body">

            <x-backend.section-header>
            <i class="{{ $module_icon }}"></i> {{ __($module_title) }}
            <small class="text-muted">{{ __($module_action) }}</small>

            <x-slot name="toolbar">
                <a id="tmbl" class="btn btn-sm btn-primary mt-1" data-bs-toggle="modal" data-bs-target="#exampleModal" data-toggle="tooltip" href="#" aria-label="Tambah Pengaduan" data-coreui-original-title="Tambah Pengaduan"><i class="fas fa-plus"></i></a>
            

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form method="POST" action="">
                    @csrf
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pengaduan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="text-align: left;">
                    <div class="mb-3">
                        <label for="nama" :value="__('nama')" class="form-label">Nama</label>
                        <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" placeholder="Ketik Nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="nohp" :value="__('nohp')" class="form-label">No HP</label>
                        <input id="nohp" type="text" class="form-control" name="nohp" value="{{ old('nohp') }}" placeholder="Ketik Nomor HP">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" :value="__('deskripsi')" class="form-label">Deskripsi Pengaduan</label>
                        <textarea id="deskripsi" class="form-control" name="deskripsi" value="{{ old('deskripsi') }}" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"> <i class="fas fa-check"></i> Submit</button>
                    </div>
                    </div>
                    </form>
                </div>
                </div>
                            
            
            
            </x-slot>
        </x-backend.section-header>


            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table-bordered table-hover table-responsive-sm table" id="datatable">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        No HP
                                    </th>
                                    <th>
                                        Deskripsi Pengaduan
                                    </th>
                                    <th>
                                        Tanggal Submit
                                    </th>
                                    @if(Auth::user()->roles->pluck('name')[0] =='user')  
                                    <!-- nothing -->
                                    @else
                                    @endif
                                </tr>
                            </thead>

                            <tbody>
                            <!-- <input type="text" value="{{Auth::id()}}">
                            <input type="text" value="{{Auth::user()->roles->pluck('name')[0]}}">
                            <input type="text" value="{{Auth::user()->email}}"> -->

                            @if(Auth::user()->roles->pluck('name')[0] =='user')    
                            @foreach ($$module_name as $module_name_singular)
                          
                                    <tr>
                                        <td>
                                        {{ $module_name_singular->id }}
                                        </td>
                                        <td>
                                        {{ $module_name_singular->nama }}
                                        </td>
                                        <td>
                                        {{ $module_name_singular->email }}
                                        </td>
                                        <td>
                                        {{ $module_name_singular->nohp }}
                                        </td>
                                        <td>
                                        {{ $module_name_singular->deskripsi }}
                                        </td>
                                        <td>
                                        {{ $module_name_singular->created_at }}
                                        </td>

                                            <!-- td nothing -->

                                          
                                    </tr>

                                    @endforeach
                                    @else
                                    @foreach ($module_name_super as $super)
                                    <tr>
                                        <td>
                                        {{ $super->id }}
                                        </td>
                                        <td>
                                        {{ $super->nama }}
                                        </td>
                                        <td>
                                        {{ $super->email }}
                                        </td>
                                        <td>
                                        {{ $super->nohp }}
                                        </td>
                                        <td>
                                        {{ $super->deskripsi }}
                                        </td>
                                        <td>
                                        {{ $super->created_at }}
                                        </td>
                                        <!-- <td class="text-end">
                                            <a class='btn btn-sm btn-primary mt-1' data-toggle="tooltip"
                                                href='7'
                                                title="Edit {{ ucwords(Str::singular($module_name)) }}"><i
                                                    class="fas fa-wrench"></i></a>
                                            <a class='btn btn-sm btn-success mt-1' data-toggle="tooltip"
                                                href='8'
                                                title="Show {{ ucwords(Str::singular($module_name)) }}"><i
                                                    class="fas fa-tv"></i></a>
                                        </td> -->
                                    </tr>
                                    @endforeach
                                    @endif


                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-7">
                    <div class="float-left">
                        <!-- Total {{ $$module_name->total() }} {{ ucwords($module_name) }} -->
                    </div>
                </div>
                <div class="col-5">
                    <div class="float-end mb-2">
                        @if(Auth::user()->roles->pluck('name')[0] =='user')  
                        {!! $$module_name->render() !!}
                        @else
                        {!! $module_name_super->render() !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        $('svg.w-5.h-5').css("width", 25)
        $('div.flex.justify-between.flex-1').remove()
    </script>
@endsection