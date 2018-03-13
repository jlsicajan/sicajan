$(document).ready(function(){
    $('.page-info').unbind('click').click(function(){
        let page_id = $(this).attr('data-page-id');
        build_modal_with_page_info(page_id)
    });
});

function build_modal_with_page_info(page_id){
    let page_info = local_obj_pages.find(page => page.id == page_id);
    console.dir(page_info);
    console.log(page_info.id);
    console.log(page_info.title);
    console.log(page_info.description);
    $('.page-modal-info').empty();
    $('.page-modal-title').text(page_info.title);
    $('.page-modal-description').html(page_info.description);
    $('.page-modal-developer-experience').html(page_info.developer_experience);
}
