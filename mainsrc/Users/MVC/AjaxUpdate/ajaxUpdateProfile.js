
/* UMBAU delete */

$('#ajaxUpdateProfile').on('submit', function (event){
    event.preventDefault();
    // alert("super funktioniert");
    $.ajax({
        type: 'POST',
        /** Die URL wird von der Route im index übergeben  */
        url: 'Profile-Update',
        data: $(this).serialize(),
        
        /** veraltet -- success hat man früher verwendet 
        success: function(data) {}*/
        // alert(var_dump(data));
    })
        /** Data ist der Platzhalter für die Route die übergeben wird also
         * die Funktion ajaxPageDocument aus dem LearningAreacontroller.*/
        
        .done(function(data){
            // Die Seite soll neu geladen werden
           $('#registerform').html(data)
 
        })
        .fail(function () {
            console.log("Das Ding ist fehlgeschlagen");
            alert("Das Ding ist fehlgeschlagen");
        })

})

