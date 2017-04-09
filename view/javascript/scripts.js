

$( document ).ready(function() {
    $.ajax({
       type:'GET',
        url:'../../storage/data.json',
        dataType:'json',
        success: done,
        error : fail
    }).done(function( ) {
        console.log( "Data Saved: ");
    });
});

function done(){
    $.getJSON('../../storage/data.json', function(data){
        $.each(data.products.product, function(k, v){
           var id = v.id;
           var name = v.name;
           $('#products').append('<span>Numer:' + id + '</span>');
        });
    });
}

function fail(){
    alert('nie wczytalo');
}
