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

    let tools = eval('('+page_info.tools+')');

    $('.page-modal-technologies-list').empty().append('<li class="list-group-item active">Technologies</li>');

    for(let category_tool in tools){
        $('.page-modal-technologies-list').append('<li class="list-group-item"><strong class="text-uppercase">' + category_tool + '</strong></li>');
        for(let tool_inside in tools[category_tool]){
            $('.page-modal-technologies-list').append('<li class="list-group-item"><span class="text-muted text-uppercase"> ' + tools[category_tool][tool_inside] + ' </span></li>');
        }
    }

    $('.page-modal-info').empty();
    $('.page-modal-title').text(page_info.title);
    $('.page-modal-description').html(page_info.description);
    $('.page-modal-developer-experience').html(page_info.developer_experience);

}
