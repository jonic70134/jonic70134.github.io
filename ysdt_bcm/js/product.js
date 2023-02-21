$('.add-product-detail-form input').blur(function(){
    if( !$(this).val() ) {
          $(this).parents('.form-content').addClass('warning');
    }else{
        $(this).parents('.form-content').removeClass('warning');
    }
});
// 上傳圖片
const dropzone = $('#file-input');
const dropframe = $('.chos-file');
dropzone.on('dragover', function(e) {
    e.preventDefault();
    dropzone.addClass('dragover');
});
dropzone.on('drop', function(e) {
    e.preventDefault();
    dropzone.removeClass('dragover');
    handleFiles(e.originalEvent.dataTransfer.files);
});
$('#file-input').on('change', function() {
    handleFiles($('#file-input').prop('files'));
});
// 選擇檔案按鈕被選擇時觸發
function handleFiles(files) {
    for (let i = 0; i < files.length; i++) {
    const file = files[i];
        if (file.type === 'image/jpeg' || file.type === 'image/gif') {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = $('<img class="preview-image"/>').attr('src', e.target.result);
                const name = $('<div class="preview-image-name"/>').text(file.name);
                const delBtn = $('<button class="preview-image-delete fa-solid fa-circle-xmark"/>');
                const wrapper = $('<div class="preview-image-wrapper"/>').append(img, delBtn);
                // 將預覽圖片包裝器添加到預覽區域
                $('.preview').append(wrapper);
                // 當刪除按鈕被點擊時，刪除對應的預覽圖片包裝器
                delBtn.on('click', function() {
                    wrapper.remove();
                });
            };
            // 讀取選中的檔案
            reader.readAsDataURL(file);
        } else {
            dropframe.addClass('error_type');
            setTimeout(function() {dropframe.removeClass('error_type')}, 5000);
        }
    }
}

// 上傳影片
$('#video_pop .box_btn_send').on('click', function(e) {
    var youtubeLink = $('#video-input').val();
    var embeddedLink = youtubeLink.replace("embed/");
    if (isValidYoutubeLink(youtubeLink)) {
        $('#preview-video').attr('src', embeddedLink);
        $('.video-container').show();
        $('#video_pop .con_block').removeClass('error_link');
    }else {
        // 顯示錯誤訊息
        e.preventDefault();
        $('#video_pop .con_block').addClass('error_link');
    }
});
$('.preview-video-delete').on('click', function() {
    $('.video-container').hide();
    $('#preview-video').attr('src', '');
});

// 檢查yoube網址
function isValidYoutubeLink(link) {
    var pattern = /^(http(s)?:\/\/)?((w){3}.)?youtu(be|.be)?(\.com)?\/.+$/;
    return pattern.test(link);
}

// 切換字功能
$.fn.extend({
    toggleText: function(a, b){
        return this.text(this.text() == b ? a : b);
    }
});
// 打開多規格
$(".multi-chk").click( function(e){
    e.preventDefault();
    $('.form-grid-template').toggle();
    $('.multi-chk-text > i').toggleClass('fa-chevron-right','fa-chevron-down')
    $('.multi-chk-text').toggleText('展開▼', '收起▲');
});

// 彈出訊息
$('.btn-grey').click(function(){
    $('.add-save-success').show();
});
$('.btn-red').click(function(){
    $('.add-prod-success').show();
});
// 關閉訊息
$('.msg-close').click(function(){
    $('.form-alert-msg').hide();
});

$(".fa-circle-plus").click( function(e){
    e.preventDefault();
    
});

$(".fa-trash-can").click( function(e){
    e.preventDefault();
});


//商品介紹 wysihtml
var editor = new Quill('#editor', {
    modules: { toolbar: '#toolbar' },
    theme: 'snow',
    placeholder: '請輸入商品說明',
});