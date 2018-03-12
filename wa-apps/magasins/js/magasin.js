$( document ).ready(function() {
    $('.publish_toogle').change(function() {
        var published = $(this).prop('checked');

        var id = $(this).attr('value_id');
        var module = $(this).attr('module');

        $.post( "?module="+module+"&action=publish", { id: id, published: published })
            .done(function( data ) {
                location.reload();
            });
    });


});

function submitbutton(module, action) {
    window.location.href = '/webasyst/magasins/?module='+module+'&action='+action+'&id=';
}

function deletebutton(module,action) {

    var ids = $("input[name=cid\\[\\]]:checked").map(function() {
        return this.value;
    }).get().join(",");



    if(ids == '') {
        alert('выберите что-нибудь из списка')
        return false;
    }

    $.post( "?module="+module+"&action="+action, { ids: ids })
        .done(function( data ) {
            location.reload();
        });
}

function checkAll() {
    $("input[name=cid\\[\\]]").trigger('click');
}

function submitbuttonsetup(module, action, id) {
    window.location.href = '/webasyst/magasins/?module='+module+'&action='+action+'&magasin_id='+id+'&id=';
}

function submitbuttonfields(module, action, magasin_id, provider_id) {
    window.location.href = '/webasyst/magasins/?module='+module+'&action='+action+'&magasin_id='+magasin_id+'&provider_id='+provider_id+'&id=';
}