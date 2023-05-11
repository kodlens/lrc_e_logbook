@extends('layouts.print')

@section('content')
    

    <div class="print-area">

        <div style="font-weight: bold; text-align:center;">LIST OF STUDENTS</div>

        <table class="table-report">
            <tr>
                <th>Student Id</th>
                <th>Name</th>
                <th>Program & Year</th>
                <th>Contact No.</th>
                <th>Entry Log</th>
            </tr>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->student_id }}</td>
                    <td>{{ $item->fullname }}</td>
                    <td>{{ $item->program }} - {{ $item->year_level }}</td>
                    <td>{{ $item->contact_no }}</td>
                    <td>{{ date('M-d-Y', strtotime($item->date_entry)) }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection

