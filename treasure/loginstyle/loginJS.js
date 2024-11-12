window.addEventListener('load', function () {
    var loading = document.getElementById('loadingJS');
    console.log(loading); // 检查是否成功获取元素
    if (loading) {
        loading.style.display = 'none';
    }
});
