<!--<table class="table table-striped">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th scope="col">#</th>-->
<!--        <th scope="col">First</th>-->
<!--        <th scope="col">Last</th>-->
<!--        <th scope="col">Handle</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    <tr>-->
<!--        <th scope="row">1</th>-->
<!--        <td>Mark</td>-->
<!--        <td>Otto</td>-->
<!--        <td>@mdo</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <th scope="row">2</th>-->
<!--        <td>Jacob</td>-->
<!--        <td>Thornton</td>-->
<!--        <td>@fat</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <th scope="row">3</th>-->
<!--        <td colspan="2">Larry the Bird</td>-->
<!--        <td>@twitter</td>-->
<!--    </tr>-->
<!--    </tbody>-->
<!--</table>-->

<div class="mt-5 container">
    <?php $i=1;?>
    <?php foreach ( $data['mhs'] as $mhs) : ?>

    <ul>
        <li>
            <?=$i++;?>
        </li>
        <li>
            <?=$mhs['nama'];?>
        </li>
        <li>
            <?=$mhs['nrp'];?>
        </li>
        <li>
            <?=$mhs['jurusan'];?>
        </li>
        <li>
            <?=$mhs['jurusan'];?>
        </li>
    </ul>
    <?php endforeach;?>
</div>