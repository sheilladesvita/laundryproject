<main class="my-4">
    <div class="container">
        
        <div class="text-24 text-default-medium">Daftar Member</div>

        <table
            id="admin-table"
            class="table table-striped table-sm dt-responsive table-responsive-sm"
            style="width: 100%"
        >
            <thead>
                <tr class="text-center">
                    <th class="text-default-medium-important align-middle">Nama</th>
                    <th class="text-default-medium-important align-middle">Email</th>
                    <th class="text-default-medium-important align-middle">No.Telepon</th>
                    <th class="text-default-medium-important align-middle">Alamat</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    foreach($member as $item){
                ?>
                <tr>
                    <td class="text-center"><?php echo $item->username;?></td>
                    <td class="text-center"><?php echo $item->email;?></td>
                    <td class="text-center"><?php echo $item->nomor_telepon;?></td>
                    <td class="text-center"><?php echo $item->alamat;?></td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>
    <!-- </main> -->

    
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    
    <script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"
    ></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"
    ></script>

    <script
        type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"
    ></script>

    <script src="<?php echo base_url()?>assets/js/admin-page.js"></script>
</main>
