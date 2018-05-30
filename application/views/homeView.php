<?php 
include('layout/header.php');
?>
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
    </tbody>
    <tfoot>
    <tr>
        <td colspan="2" style="text-align: right;padding: 0 20px;">Tổng</td>
        <td colspan="2" style="text-align: left;"><strong>0</strong></td>
    </tr>
    </tfoot>
</table>

<script>
    $(function () {
        $('#bang1').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'pdf', 'print', {
                extend: 'excel',
                text: 'Export To Excel'
            }]
        });
    });
</script>

<?php 
include('layout/footer.php');
 ?>