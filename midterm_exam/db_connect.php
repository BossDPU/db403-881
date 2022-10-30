<?php
    $c = mysqli_connect( "localhost", "root", "", "my_database" );
    mysqli_query( $c, "SET NAMES UTF8" );
    echo "
        ";

    $sql = " SELECT * FROM book ORDER BY book_id ASC ";
    $q = mysqli_query( $c, $sql );
    $no = 1;
    while( $f = mysqli_fetch_assoc( $q ) ) {
        echo "
                <tr>
                    <td>".$no."</td>
                    <td>".$f['book_name']."</td>
                    <td>".$f['book_price']."</td>
                </tr>
                ";
        $no++;
    }

    echo "</table>";
    mysqli_close( $c );
?>