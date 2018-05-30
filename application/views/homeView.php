<?php 
include('layout/header.php');
?>
<div class="container">
    <div class="row">
        <h1>Ví dụ về table có sắp xếp theo search và export CSV, PDF, Print Export to Excel</h1>
        <table id="bang1" class="table table-bordered table-striped table-hover text-center">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên chương trình</th>
                    <th>Chức danh</th>
                    <th>Người thực hiện</th>
                    <th>Đơn vị</th>
                    <th>Số tiền</th>
                    <th>Tổng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>something1</td>
                    <td>something2</td>
                    <td>something3</td>
                    <td>something4</td>
                    <td>something5</td>
                    <td>something6</td>
                    <td>something7</td>
                </tr>
                <tr>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                </tr>
                <tr>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                </tr>
                <tr>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                </tr>
                <tr>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                </tr>
                <tr>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                </tr>
                <tr>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                </tr>
                <tr>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                </tr>
                <tr>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                </tr>
                <tr>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                </tr>
                <tr>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                </tr>
                <tr>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                    <td>something</td>
                </tr>
            </tbody>
            <tfoot>
            
            </tfoot>
        </table>
    </div>
</div>

<script>
    $(function () {
        
        $('#bang1').dataTable({
            
            dom: 'Bfrtip',
            buttons: ['pageLength','copy', 'csv', 'pdf', 'print', {
                extend: 'excel',
                text: 'Export To Excel'
            }],
            lengthMenu: [
                [ 5, 10, 25, 50, -1 ],
                [ '5 rows', '10 rows', '25 rows', '50 rows', 'Show all' ]
            ],
            "pageLength": 5,
        });
    });
</script>

<?php 
include('layout/footer.php');
 ?>