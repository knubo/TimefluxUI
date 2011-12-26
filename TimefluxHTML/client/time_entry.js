function addRow(event) {
    var day = $('#day').val();
    var dayDesc = $('#day :selected').text();

    var project = $('#project').val();
    var projectDesc = $('#project :selected').text();
    
    
    var hours = $('#hours').val();
    var notes = $('#notes').val();
    
    var html = '<ul style="display:none" class="data"><li>'+dayDesc+'</li><li>'+projectDesc+'</li><li>'+hours+'</li>'+'<li>'+notes+'</li>';
    
    
    $(html).insertAfter($('#timeheader')).slideDown();
    
}


