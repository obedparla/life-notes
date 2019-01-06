
/* Hides and Shows the search bar in the header */


jQuery(document).ready(function($){
    $(".search-toggle").click(function(){
        $("#search-container").slideToggle('normal', function(){
            $('.search-toggle').toggleClass('active');
        });
        // Optional return false to avoid the page "jumping" when clicked
        return false;
    });
}); 