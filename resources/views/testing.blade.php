<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>TESTING</title>
  </head>


<body>

    <div class="container">
        <h1>Raw sql commands testing</h1>

        <p>OK, this is the randomStuff stuff:</p>
        <?php
            if (isset($customers)) {
                foreach($customers as $customer){
                    echo $customer->id . '<br>';
                    echo $customer->name . '<br>';
                    echo $customer->address . '<br>';
                    echo $customer->city . '<br>';
                }
            }
        ?>

        <form method="POST" action="insert">
        @csrf
            <button>Insert</button>
        </form>

        <br>

        <form method="POST" action="update">
        @csrf
        @method('PATCH')
            <button>Update</button>
        </form>

        <br>

        <form method="POST" action="delete">
        @csrf
        @method('DELETE')
            <button>DELETE</button>
        </form>



    
    </div>
    
    












   
</body>
</html>