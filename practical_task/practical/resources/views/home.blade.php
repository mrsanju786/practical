@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card-header">{{ __('Job Application Listing') }}</div><br>
                @if (session('success'))
                <div class="alert alert-{{ session('class') ?: 'danger' }}">
                  {{ session('message') }}
                </div>
                @endif
                    
                    <div class="col-md-12">
                        <table id="jobTable">
                            <thead>
                            <tr>
                                <th>no</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $no=1; @endphp
                            @foreach ($jobs as $job)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $job->firstname }}</td>
                                    <td>{{ $job->lastname }}</td>
                                    <td>{{ $job->city }}</td>
                                    <td>{{ $job->state }}</td>
                                    <td>
                                        <a href="{{ url('jobedit/'.$job->id ) }}" style="text-decoration: none;color: green;">Edit</a>&nbsp;&nbsp;
                                        <a href="{{ url('jobdelete/'.$job->id ) }}" style="text-decoration: none;color: red;" onClick="return confirm('Are you sure you want to delete?')">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

        </div>
    </div>
</div>

@endsection
<script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" id="theme-styles">

</script>
