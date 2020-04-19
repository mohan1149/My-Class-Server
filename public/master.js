$(document).ready(function(){
   // global variable to hold the delete route
    let delete_url = '';
    /* code to toggle between the languages
    start*/
    $(".language").change(function(e){
        //localStorage.setItem('sailorLang',e.target.value);
        location.assign(location.pathname + "?lan=" + e.target.value);
    });
    /*end*/

    /* code to validate periods is integer
    start*/
    $(".periods").keyup(function(e){
        var num = e.target.value;
        if(isNaN(num)){
            alert('Please enter numbers only.');
            $(".periods").val('0');
        }
    });
    /*end*/

    /* code to validate phone numbers
    start*/
    $(".phone").keyup(function(e){
        var num = e.target.value;
        if(isNaN(num)){
            alert('Please enter numbers only.');
            $(".phone").val('0');
        }
    });
    /*end*/

    /* code to validate period length
    start*/
    $(".period-length").keyup(function(e){
        var num = e.target.value;
        if(isNaN(num)){
            alert('Please enter numbers only.');
            $(".period-length").val('0');
        }
    });
    /*end*/

    /* code to generate subject fields
    start*/
    $(".subjects").keyup(function(e){
        var num = e.target.value;
        if(isNaN(num)){
            alert('Please enter numbers only.');
            $(".subjects").val('0');
        }
        else{
            let grids = num / 2;
            if(grids !== 0){
                let check = parseInt(grids);
                let grid1 = grids;
                let grid2 = grids;
                if(check !== num / 2){
                    grid1 = check + 1;
                    grid2 = check;
                }
                for( i=1;i<=grid1;i++){
                    let str = "<div class='form-group dyn-fg'>";
                    str += "<span>Subject "+ i +"</span>";
                    str += "<input class='form-input' type='text' name='subject"+ i+"'>";
                    str += "</div>";
                    $(".grid1").append(str);
                }
                for( i=grid1+1;i<=num;i++){
                    let str = "<div class='form-group dyn-fg'>";
                    str += "<span>Subject "+ i +"</span>";
                    str += "<input class='form-input' type='text' name='subject"+ i+"'>";
                    str += "</div>";
                    $(".grid2").append(str);
                }
            }else{
                $(".dyn-fg").remove();
                $(".dyn-fg").remove();
            }
        }
    });
    /*end*/
    /* code to toggle between departments,classes,staff and students content in school viewing
    start*/
    $('.data-item').click(function(){
        $('.data-item').removeClass('active');
        $('.data').removeClass('active');
        $(this).addClass('active');
        let classes = $(this).attr('class');
        let classArray = classes.split(" ");
        $('.' + classArray[1]).addClass('active');
    });
    /*end*/

    /* code to append dynamic departments and classes while adding class and staff
    start*/
    $('.select-school').change(function(){
        let id = $(this).val();
        axios.get('/get/departs-classes/' + id)
        .then(function(response){
            //dynamic deps
            let deps = "<select class='form-input department' name='department'>";
            response.data.deps.map((data)=>{
                deps+= "<option value='"+ data.id+"'>"+ data.d_name+"</option>";
            });
            deps+= "</select>";
            $('.department').replaceWith(deps);
            //dynamic classes
            let classes = "<select class='form-input classes' name='class_teacher_for'>";
            response.data.classes.map((data)=>{
                classes+= "<option value='"+ data.id+"'>"+ data.value+"</option>";
            });
            classes+= "</select>";
            $('.classes').replaceWith(classes);
        });
    });
    /*end*/
    
    /* code to toggle between departments,classes,staff and students content in school viewing
    start*/
    $('.staff-show').click(function(){
        var className = '.'+$(this).attr('id');
        $('content-table').removeClass('active');
        $('.content-table').addClass('inactive');
        $(className).removeClass('inactive');
        $(className).addClass('active');
    });
    /*end*/

    /* code to show school delete modal
    start*/
    $('.delete-school').click(function(){
        delete_url = $(this).attr('url');
        $('.delete-modal').show();
    });
    /*end*/

    /* delete school confirm
    start*/
    $('.delete-confirm').click(function(){
        location.assign(delete_url);
    });
    /*end*/

    /*code to show department delete modal
    start*/
    $('.del-dept').click(function(){
        delete_url = $(this).attr('url');
        $('.delete-modal').show();
    });
    /*end*/

    /* delete departmet confirm
    satrt*/
    $('.delete-confirm').click(function(){
        location.assign(delete_url);
    });
    /*end*/

});
