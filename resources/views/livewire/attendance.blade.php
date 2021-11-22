<div>

    <h3 class="text-center">
        {{ $user->name }} <br>
        <small>November 1, 2021 - November 30, 2021</small>
    </h3>

    <h5 class="text-center">TOTAL: {{ $user->attendances->count() }}</h5>

    <table class="table">
        <tr>
            <th>DATE</th>
            <th>TIME IN</th>
            <th>TIME OUT</th>
            <th>TIME IN</th>
            <th>TIME OUT</th>
        </tr>
        @foreach($period as $date)
            @php($current_date = $date->format('Y-m-d'))
            <tr>
                <td>{{ $date->format('d') }}</td>
                @switch($date->format('N'))
                    @case(6)
                        <td class="text-center" colspan="4">SATURDAY</td>
                        @break
                    @case(7)
                        <td class="text-center" colspan="4">SUNDAY</td>
                        @break


                    @default
                        @php($attendances = $user->attendances)

                        {{-- MORNING TIME IN --}}
                        <?php
                            $mti = $attendances->whereBetween('created_at', [$current_date." ".$ranges['mtif'], $current_date." ".$ranges['mtis']])->first();
                        ?>
                        <td>{{ $mti?->created_at->format('h:i:s A') }}</td>

                        {{-- MORNING TIME IN --}}
                        <?php
                            $mto = $attendances->whereBetween('created_at', [$current_date." ".$ranges['mtof'], $current_date." ".$ranges['mtos']])->first();
                        ?>
                        <td>{{ $mto?->created_at->format('h:i:s A') }}</td>


                        {{-- AFTERNOON TIME IN --}}
                        <?php
                            $ati = $attendances->whereBetween('created_at', [$current_date." ".$ranges['atif'], $current_date." ".$ranges['atis']])->first();
                        ?>
                        <td>{{ $ati?->created_at->format('h:i:s A') }}</td>

                        {{-- AFTERNOON TIME OUT --}}
                        <?php
                            $ato = $attendances->whereBetween('created_at', [$current_date." ".$ranges['atof'], $current_date." ".$ranges['atos']])->first();
                        ?>
                        <td>{{ $ato?->created_at->format('h:i:s A') }}</td>

                        @break

                @endswitch
            </tr>

        @endforeach
    </table>




</div>
