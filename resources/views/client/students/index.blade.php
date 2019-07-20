<style>
    td, th{
        padding: 10px 0;
        text-align: center;
    }
</style>

<table border="1" style="border-collapse: collapse">
    <thead>
    <tr>
        <th width="50px">ID</th>
        <th width="100px">Code</th>
        <th width="200px">Name</th>
        <th width="150px">Class</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
           <tr style="background:{{ $student->id % 2 == 0 ? 'blue' : 'yellow' }}">
               <td>{{ $student->id }}</td>
               <td>{{ $student->code }}</td>
               <td>{{ $student->name }}</td>
               <td>{{ $student->class }}</td>
           </tr>
        @endforeach
    </tbody>
</table>