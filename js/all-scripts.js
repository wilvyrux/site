// script for slide sidebar mobile
$(function() {
        $('.btn-slide').click(function() {
                $('.sidebar.background-light-gray').toggleClass('active');
        });
});
        

// script for search dropdown 
$(document).ready(function() {
        // $(".open-box").hide();
        $(".dropdown-box button").click(function(){
                $(".open-box").show(); 
        })
        $(".dropdown-box .close").click(function(){
                $(".open-box").hide(); 
        })
})

// bootstrap accordion 
$(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.in").each(function(){
                $(this).siblings(".panel-heading").find(".glyphicon").addClass("glyphicon-minus").removeClass("glyphicon-plus");
        });

       
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
                $(this).parent().find(".glyphicon").removeClass("glyphicon-plus").addClass("glyphicon-minus");
        }).on('hide.bs.collapse', function(){
                $(this).parent().find(".glyphicon").removeClass("glyphicon-minus").addClass("glyphicon-plus");
        });
});
