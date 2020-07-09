
    @extends('master')
    
    @section('content')
    
    <table class=" table table-resposive table-hover" >
          <tr>
                <th>Serial</th>
                <th>Name</th>
                <th>registration</th>
                <th>department</th>
                <th>Info</th>
                <th>Action</th>
            </tr>
        @php 
        $i=0;
        @endphp
        @foreach($students as $student)
        @php 
        $i++;
        @endphp

             <tr>
              <th>{{ $i }}</th>
              <th>{{ $student->name }}</th>
              <th>{{ $student->registration_id }}</th>
              <th>{{ $student->depertment_name }}</th>
              <th>{{ $student->info }}</th>
              <td>
                <a href="{{ route('edit' , $student->id) }}" class="btn btn-success"> Edit</a>
                <form class="form-inline" action="{{ route('delete' , $student->id) }}" method="post">
                {{ csrf_field() }}

                <input type="submit" class="btn btn-danger" value="delete">

                </form>
              </td>
             </tr> 
         @endforeach     
        </table>

    @endsection