<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    </head>
    <body class="antialiased">
        <table>
            <thead>
                <th>出表日期</th>
                <th>年度</th>
                <th>季別</th>
                <th>公司代號</th>
                <th>公司名稱</th>
                <th>產業別</th>
                <th>基本每股盈餘(元)</th>
                <th>普通股每股面額</th>
                <th>營業收入</th>
                <th>營業利益</th>
                <th>營業外收入及支出</th>
                <th>稅後淨利</th>
            </thead>
            <tbody>
                @foreach ($listedCompanys as $listedCompany)
                <tr>
                <th>{{ $listedCompany['出表日期'] }}</th>
                <th>{{ $listedCompany['年度'] }}</th>
                <th>{{ $listedCompany['季別'] }}</th>
                <th>{{ $listedCompany['公司代號'] }}</th>
                <th>{{ $listedCompany['公司名稱'] }}</th>
                <th>{{ $listedCompany['產業別'] }}</th>
                <th>{{ $listedCompany['基本每股盈餘(元)'] }}</th>
                <th>{{ $listedCompany['普通股每股面額'] }}</th>
                <th>{{ $listedCompany['營業收入'] }}</th>
                <th>{{ $listedCompany['營業利益'] }}</th>
                <th>{{ $listedCompany['營業外收入及支出'] }}</th>
                <th>{{ $listedCompany['稅後淨利'] }}</th>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
