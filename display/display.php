<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<body>
    <div class="container">
        <button class="btn btn-primary my-5 "> <a href="registrastion 2.php" class="text-light text-decoration-none">ADD
                USER</a>
        </button><br><br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S1 no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th schop="col">guests</th>
                    <th schop="col">Address</th>
                    <th schop="col">phone</th>
                    <th schop="col">birthday</th>

                    <th schop="col">arrivals</th>
                    <th schop="col">leaving</th>

                    <th schop="col">gender</th>
                    <th schop="col">rail</th>
                    <th schop="col">operations</th>
                </tr>
            </thead>
            <tbody>
            <?php
        include 'connect.php';

        $sql = "select * from book_form";
        $result = mysqli_query($con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                // $name = $row['name'];
                // $email = $row['email'];
                // $mobile = $row['mobile'];
                // $password = $row['password'];
                $name = $row['name'];
                $email = $row['email'];
                $guests = $row['guests'];
                $address = $row['address'];
                $phone = $row['phone'];
                $bday = $row['bday'];

                $arrivals = $row['arrivals'];
                $leaving = $row['leaving'];

                $gender = $row['gender'];
                $rail = $row['rail'];
                echo ' <tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $guests . '</td>
                        <td>' . $address . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $bday . '</td>
                        <td>' . $arrivals . '</td>
                        <td>' . $leaving . '</td>   
                        <td>' . $gender . '</td>
                        <td>' . $rail . '</td>
                        <td>
                        <button class="btn btn-primary my-1"><a href="update.php?
                        updateid=' . $id . ' " class="text-light text-decoration-none">update</a></button>
                        <button class="btn btn-danger "><a href="delete.php?
                        deleteid=' . $id . '" class="text-light text-decoration-none">delete</a></button>
                        </td>
                        </tr>';
            }


        }
        ?>

            </tbody>
        </table>
        <!-- <table class="table">
            <thead>
                <tr>
                    <th schop="col">sl no</th>

                    <th schop="col">name</th>
                    <th schop="col">email</th>
                    <th schop="col">guests</th>
                    <th schop="col">Address</th>
                    <th schop="col">phone</th>
                    <th schop="col">bday</th>
                    
                    <th schop="col">arrivals</th>
                    <th schop="col">leaving</th>
                    
                    <th schop="col">gender</th>
                    <th schop="col">rail</th>
                    <th schop="col">operations</th>
                </tr>
            </thead>
            <thead> -->
        

        <!-- </thead>
        </table> -->
    </div>
</body>

</html>