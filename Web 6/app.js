$(document).ready(function() {
    $("#search-button").click(function(e) {
        let sql = "";
        let lastChecked = false;
        
        if ($("#i5").is(":checked")) {
            if($("#i7").is(":checked") === false) {
                if (lastChecked) { sql += " AND "; }
                sql += "processor LIKE '%i5'";
                lastChecked = true;
            }
        } 
        else if ($("#i7").is(":checked")) {
            if (lastChecked) { sql += " AND "; }
            sql += "processor LIKE '%i7'";
            lastChecked = true;
        }

        if ($("#8gb").is(":checked")) {
            if($("#16gb").is(":checked") === false) {
                if (lastChecked) { sql += " AND "; }
                sql += "memory LIKE '%8GB'";
                lastChecked = true;
            }
        } 
        else if ($("#16gb").is(":checked")) {
            if (lastChecked) { sql += " AND "; }
            sql += "memory LIKE '%16GB'";
            lastChecked = true;
        }

        if ($("#512gb").is(":checked")) {
            if($("#1024gb").is(":checked") === false) {
                if (lastChecked) { sql += " AND "; }
                sql += "hdd LIKE '%512GB'";
                lastChecked = true;
            }
        } 
        else if ($("#1024gb").is(":checked")) {
            if (lastChecked) { sql += " AND "; }
            sql += "hdd LIKE '%1024GB'";
            lastChecked = true;
        }

        if ($("#1050").is(":checked")) {
            if(($("#1050ti").is(":checked") === false) && ($("#1660ti").is(":checked") === false)){
                if (lastChecked) { sql += " AND "; }
                sql += "graphicsCard LIKE '%1050'";
                lastChecked = true;
            }
        } 
        else if (($("#1050ti").is(":checked")) && ($("#1660ti").is(":checked"))) {
            if (lastChecked) { sql += " AND "; }
            sql += "graphicsCard LIKE '%1050 Ti'";
            sql += "graphicsCard LIKE '%1660 Ti'";
            lastChecked = true;
        }
        
        if ($("#1050ti").is(":checked")) {
            if (($("#1050").is(":checked") === false) && ($("#1660ti").is(":checked") === false)){
                if (lastChecked) { sql += " AND "; }
                sql += "graphicsCard LIKE '%1050 Ti'";
                lastChecked = true;
            }
        } 
        else if (($("#1050").is(":checked")) && ($("#1660ti").is(":checked"))) {
            if (lastChecked) { sql += " AND "; }
            sql += "graphicsCard LIKE '%1050'";
            sql += "graphicsCard LIKE '%1660 Ti'";
            lastChecked = true;
        }
        
        if ($("#1660ti").is(":checked")) {
            if (($("#1050").is(":checked") === false) && ($("#1050ti").is(":checked") === false)){
                if (lastChecked) { sql += " AND "; }
                sql += "graphicsCard LIKE '%1660 Ti'";
                lastChecked = true;
            }
        } 
        else if (($("#1050").is(":checked")) && ($("#1050ti").is(":checked"))) {
            if (lastChecked) { sql += " AND "; }
            sql += "graphicsCard LIKE '%1050'";
            sql += "graphicsCard LIKE '%1050 Ti'";
            lastChecked = true;
        }
        
        if (($("#1050").is(":checked")) && ($("#1050ti").is(":checked")) && ($("#1660").is(":checked"))){
                if (lastChecked) { sql += " AND "; }
                sql += "graphicsCard LIKE '%1050'";
                sql += "graphicsCard LIKE '%1050 Ti'";
                sql += "graphicsCard LIKE '%1660 Ti'";
                lastChecked = true;
            }
        } 
        $.post("private/laptopsController.php", {where: sql}, function(response) {
            response = $.parseJSON(response);
            console.log(response);
            $("#laptops-list").empty();
            $.each(response, function(_, value) {
                $("#laptops-list").append('<li class="list-group-item">' + value['name'] +'</li>');
            });
        });
    });
});