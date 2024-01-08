<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Relationship!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center my-3">Eloquent Relationship</h2>
                
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name,Title,comments</th>
                            <th>Phone,Comments,title</th>
                        </tr>
                    </thead>
                    <tbody>
{{--------------------------------------- -one to one ----------------------------------------}}
                         {{-- @foreach ($users as $data)
                        <?php 
                        // dd($data->phone_name) ;
                        //  dd($data->phone->toArray(),$data->phone_name->toArray(),$data->toArray()); 
                       
                        ?>
                        <tr>
                            <td>{{ $data->name }}</td>
                            @if($data->phone_name)
                            <td> {{ $data->phone_name->name }}</td>
                            @endif
                        </tr>
                        @endforeach --}}
{{--------------------------------------- -one to Many ----------------------------------------}}
                          @foreach ($comments as $data)
                            <?php 
                            // dd($data->phone_name) ;
                            //  dd($data->phone->toArray(),$data->phone_name->toArray(),$data->toArray()); 
                           
                            ?>
                            <tr>
                                {{-- <td>{{ $data->title }}</td> --}}
                                <td>{{ $data->message }}</td>
                                <td>
                                    {{-- @foreach ($data->comments as $comment )
                                         {{ $comment->message }}
                                    @endforeach --}}
                                    {{ $data->post->title }}
                                </td>
                            </tr>
                            @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>