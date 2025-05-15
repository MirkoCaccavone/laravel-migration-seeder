@props(['treno'])

<tr>
    <td><strong>{{ $treno->azienda }}</strong></td>
    <td>{{ $treno->codice_treno }}</td>
    <td>{{ $treno->stazione_partenza }}</td>
    <td>{{ $treno->stazione_arrivo }}</td>
    <td>{{ $treno->orario_partenza }}</td>
    <td>{{ $treno->orario_arrivo }}</td>
    <td>{{ $treno->numero_carrozze }}</td>
    <td>
        @if ($treno->cancellato)
            <span class="badge bg-danger">Cancellato</span>
        @elseif (!$treno->in_orario)
            <span class="badge bg-warning text-dark">In ritardo</span>
        @else
            <span class="badge bg-success">In orario</span>
        @endif
    </td>
</tr>