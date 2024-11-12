

function showContent(contentId) {
    // 先隱藏所有的 content 區域
    var allContents = document.querySelectorAll('.content1, .content2,.content3,.content4,.content5');
    allContents.forEach(function (content) {
        content.classList.remove('show');
    });

    // 根據點擊的圖片來顯示相應的 content
    var contentToShow = document.querySelector('.' + contentId);
    if (contentToShow) {
        contentToShow.classList.add('show');
    }
}

window.addEventListener('load', function () {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('successgivedata')) {
        alert('報名成功');
    } else if (urlParams.has('IDisfault')) {
        alert('查無資料，請重新查詢或詢問客服');
    }
});



document.addEventListener('DOMContentLoaded', function () {
    const birthdayInput = document.getElementById('Inputdate1');

    // 設定最大生日日期為2018年10月20日
    const maxDate = '2018-10-20';

    birthdayInput.setAttribute('max', maxDate);
});

