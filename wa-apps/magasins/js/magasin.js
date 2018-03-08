$( document ).ready(function() {
    $('.publish_toogle').change(function() {
        var published = $(this).prop('checked');
        var id = $(this).attr('magasin_id');
        $.post( "?module=magasin&action=publish", { id: id, published: published })
            .done(function( data ) {
                location.reload();
            });
    });

    $('#post-form').validator();
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

