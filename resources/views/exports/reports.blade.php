<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
    <table>
        <thead style="background-color:#c8c8c8; padding: 5px; font-size: 9px;">
            <tr>
                <td style="width: 300px; text-align: center; font-weight: bold;">Code</td>
                <td style="width: 300px; text-align: center; font-weight: bold;">Sample Code</td>
                <td style="width: 300px; text-align: center; font-weight: bold;">Date</td>
            </tr>
        </thead>
        <tbody>
        @foreach($lists as $list)
            <tr style="text-align: center; font-size: 9px; color: #072388;">
                <td style="text-align: center;">{{$list['code']}}</td>
                <td style="text-align: center;">{{$list['sample_code']}}</td>
                <td style="text-align: center;">{{$list['created_at']}}</td>
            </tr>
        @endforeach
        </tbody>

    </table>
</body>
</html>
