// 表單設定
$(document).ready(function () {
    $('#table_id').DataTable({
        //url: '//cdn.datatables.net/plug-ins/1.13.1/i18n/zh-HANT.json',
        language: {
            lengthMenu: "顯示 _MENU_ 項結果",
            zeroRecords: "沒有符合的結果",
            info: "顯示資料第 _START_ 至 _END_ 項結果，共 _TOTAL_ 項",
            infoEmpty: "顯示第 0 至 0 項結果，共 0 項",
            search: "搜尋:",
            infoFiltered: "(從  _MAX_  筆結果中過濾)",
            paginate: {
                next: "下一頁",
                previous: "上一頁",
            }
        },
        lengthMenu: [10, 20, 30, 50],

    });
});

window.addEventListener('load', function () {
    var loading = document.getElementById('loadingJS');
    console.log(loading);
    if (loading) {
        setTimeout(function () {
            loading.style.display = 'none';
        }, 500);
    }
});

function confirmSubmit() {
    return confirm('確定要修改資料嗎？');
}

