@php
$results = $entry->results;
@endphp

<table>
    <thead>
        <tr>
            <th>User</th>
            <th>Question Set</th>
            <th>Correct/Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($results as $result)
        <tr>
            <td>{{ $result['username'] }}</td>
            <td>Question Set {{ $result['question_set_id'] }}</td>
            <td>{{ $result['correct_answers'] }}/{{ $result['total_answers'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>