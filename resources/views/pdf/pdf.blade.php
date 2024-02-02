<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/final.css">
    <style>
      table, tr, td{
        border: 1px solid black;
        border-collapse: collapse;
      }
      .table-row-first{
        background-color:#D9D9D9;
      }
      .table-row-second{
        background-color:#28EF92;
      }
      .setColor{
        color:blue;
      }
      .ini-bawah{
        z-index: 10;
      }
    </style>
</head>
<body>
  <!-- foreach(data as d) -->
      <div class="container">
        <h2 class="text-3xl font-semibold pb-3">Bug Report: report-{{ $data->id }}</h2>
        <table style="width:100%;"><!-- w-full -->
          <tr class="table-row-first border font-semibold">
            <td class="p-2">User ID</td>
            <td class="px-6">#ID-{{ $data->user_id }}</td>
          </tr>
          <tr class="border">
            <td class="p-2">Tester</td>
            <td class="px-6">{{ $data->submitted_by }}</td>
          </tr>
          <tr class="border">
            <td class="p-2">Date</td>
            <td class="px-6">{{ $data->created_at }}</td>
          </tr>
          <tr class="border">
            <td class="p-2">Title</td>
            <td class="px-6">{{ $data->title }}</td>
          </tr>
          <tr class=" border">
            <td class="table-row-second p-2 font-semibold" colspan="2">Bug Description</td>
          </tr> 
          <tr class="border">
            <td class="p-2">Asset</td>
            <td class="px-6">{{ $data->asset_name }}</td>
          </tr>
          <tr class="border">
            <td class="p-2">Summary</td>
            <td class="px-6">{{$data->description}}</td>
          </tr>
          <tr class="border">
            <td class="p-2">URL</td>
            <td class="setColor px-6">{{ $data->url_video }}</td>
          </tr>
          <tr class="border">
            <td class="p-2">Severity</td>
            <td class="px-6">{{ $data->severity }}</td>
          </tr>
          <tr class="ini-bawah border">
            <td class="p-2">Screenshot</td>
              <img src="data:image/jpeg,jpg,png;base64,{{base64_encode( $data->foto_bukti )}}" alt="foto_bukti">
            <!-- <td class="px-6"><img src=' url("storage/$img") ' alt=""></td> -->
          </tr>
        </table>
      </div>
  <!-- endforeach  -->
</body>
</html>