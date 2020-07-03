@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <button>Add</button>
                    <br/><br/>
                    <table width='100%'>
                    <tr>
                    <th>Task Name</th>
                    <th>Priority</th>
                    </tr>
                    <tr>
                    <td>Task 1</td>
                    <td>High</td>
                    <td><button>Open Task</button></td>
                    <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Some text in the Modal..</p>
                    </div>

                    </div>
                    <button>Edit</button>
                    <button>Delete</button>
                    <button>Change Priority</button>
                    </tr>
                    </table>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
