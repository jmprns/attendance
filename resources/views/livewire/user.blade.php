<h2 class="display-6 text-center mb-4">Users</h2>

<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Attendances</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach($users as $user)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->attendances->count() }}</td>
            <td>
                <a href="{{ route('attendace', $user->id) }}">View Attendance</a>
            </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
