@extends('layouts.app')

@section('title', 'Admin - Messages')

@section('content')
    <div class="container mt-5">
        <h1>Messages</h1>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Question</th>
                <th>Responded</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->phone }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->question }}</td>
                    <td>
                        @if($message->responded)
                            <span class="badge bg-success">Responded</span>
                        @else
                            <span class="badge bg-warning">Pending</span>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('admin.messages.destroy', ['id' => $message->id, 'admin_token' => $admin_token]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        @if(!$message->responded)
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#respondModal{{ $message->id }}">
                                Respond
                            </button>
                        @endif

                        <!-- Respond Modal -->
                        <div class="modal fade" id="respondModal{{ $message->id }}" tabindex="-1" aria-labelledby="respondModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="respondModalLabel">Respond to Message</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.messages.respond', ['id' => $message->id, 'admin_token' => $admin_token]) }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="response" class="form-label">Response</label>
                                                <textarea class="form-control" id="response" name="response" rows="3" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Send Response</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
