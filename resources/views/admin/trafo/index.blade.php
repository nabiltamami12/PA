@extends('admin.admin')
    @section('content')
    <div class="table-responsive" >
    <div class="panel panel-default" >
        <div class="panel-body" >
           <!--  <button href="{{ url('/trafo/create') }}" type="submit" class="btn btn-warning btn-s">Tambah
            </button> -->
              <br/>
            <br/>
            <br/>
            <br/>
           <!--  <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title card-sm">Data Trafo Banyuwangi</h3>
                </div>
            </div> -->
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-light" >
                 <!--    <thead>
                        <tr >
                            <th> ID </th>
                            <th> Kode_Lokasi  </th>
                            <th> Lokasi  </th>
                            <th> Kapasitas </th>
                            <th> Terpakai </th>
                            <th> Belum Terpakai </th>
                        </tr>
                    </thead> -->
                       <thead>
                        <tr >
                            <th> No </th>
                            <th> Kode Trafo </th>
                            <th> Lokasi  </th>
                            <th> Status </th>
                            <th> Deskripsi </th>
                            <!-- <th> Belum Terpakai </th> -->
                        </tr>
                    </thead>
                    <tbody >
                        @foreach($trafo as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->kode_lokasi }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td>{{ $item->kapasitas }}</td>
                            <td>{{ $item->kap_terpakai }}</td>
                            <td>{{ $item->kap_sisa }}</td>
                            <td>
                                <a href="{{ url('/trafo/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit trafo">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"/>
                                </a>
                                {!! Form::open([
                                    'method'=>'DELETE',
                                    'url' => ['/trafo', $item->id],
                                    'style' => 'display:inline'
                                    ]) !!}
                                    {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete trafo" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete trafo',
                                    'onclick'=>'return confirm("Confirm delete?")'
                                    )) !!}
                                    {!! Form::close() !!}
                            </td>
                        </tr>
                            @endforeach
                    </tbody>
                </table>
            <div class="pagination-wrapper"> {!! $trafo->render() !!} </div>
            </div>

        </div>
    </div>
    </div>
    @endsection