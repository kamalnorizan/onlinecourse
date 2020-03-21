@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                Name
                            </td>
                            <td>
                                Email
                            </td>
                            <td>
                                Date Register
                            </td>
                            <td>
                                Action(s)
                            </td>
                        </tr>
                        @foreach ($users as $key=>$user)
                        <tr>
                            <td>
                                {{($users->currentPage()-1)*$users->perPage()+$key+1}}
                            </td>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->email}}

                            </td>
                            <td>
                                {{\Carbon\Carbon::parse($user->created_at)->format('d-m-Y')}}

                            </td>
                            <td>

                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{$users->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
